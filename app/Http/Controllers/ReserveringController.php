<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reservering;
use App\Http\Requests;
use App\Events\MessageTicket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class ReserveringController extends Controller
{
    public function getReserveringIndex()
    {
        $query = DB::table('ticketsoorts')->get();
        $maaltijdquery = DB::table('maaltijdsoorts')->get();
        return view('reserveren.reserveren')->with(['tickets'=>$query, 'maaltijden'=>$maaltijdquery]);
    }
    
    public function postReserveringArray(Request $request){
        /* Validation */
        /*$this->validate($request, [
            'naam' => 'required',
            'email' => 'required|email'
        ]);*/
        $post = $request->all();
        //var_dump($post);
        /* ************* USER *********** */
        $user = array('id' => DB::table('users')->max('id') + 1,
            'naam' => $post["naam"],
            'tussenvoegsel' => $post["tussenvoegsel"],
            'achternaam' => $post["achternaam"],
            'email' => $post["email"],
            'telnummer' => $post["telnummer"],
            'adres' => $post["adres"],
            'woonplaats' => $post["woonplaats"],
            'rol' => "bezoeker",
        );
        $id = DB::table('users')->insertgetId($user);
        
        if ($id > 0) {
            $reservering = array('id' => DB::table('reserverings')->max('id') + 1,
                'idUser' => $id,
                'betaalmethode' => $post["betaalmethode"],
                'prijs' => $post["totaalReservering"]
            );
            $idReservering = DB::table('reserverings')->insertgetId($reservering);
                
            /* Alle tickets */
            for ($i = 0; $i < count($post["ticket"]); $i++)
            {
                $ticket = array('id' => DB::table('tickets')->max('id') + 1,
                    'reservering' => $idReservering,
                    'soort' => $post["ticket"][$i],
                    'barcode' => "666" . $post["ticket"][$i] . $id . DB::table('tickets')->max('id')
                );
                DB::table('tickets')->insert($ticket);
            }
            
            /* Alle maaltijden */
            if (isset($post["maaltijd"])) {
                // $x is what makes sure that the vegetarisch checkbox is correct with each row
                $x = 1;
                for ($i = 0; $i < count($post["maaltijd"]); $i++)
                {
                    if(isset($post['vegetarisch'][$x]) && $post['vegetarisch'][$x] == 'Ja') 
                    {
                        //$check = "Ja i: " . $i . " x: " . $x;
                        $check = "Ja";
                        $x = $x + 1;
                    }
                    else
                    {
                        //$check = "Nee i: " . $i . " x: " . $x;
                        $check = "Nee";
                    } 
                    $x = $x + 1;
    
                    $maaltijd = array('id' => DB::table('maaltijds')->max('id') + 1,
                        'reservering' => $idReservering,
                        'soort' => $post["maaltijd"][$i],
                        'vegetarisch' => $check,
                        'barcode' => "999" . $post["maaltijd"][$i] . $id . DB::table('maaltijds')->max('id')
                    );
                    DB::table('maaltijds')->insert($maaltijd);
                }
            }
            
            Event::fire(new MessageTicket($ticket, $maaltijd, $user));
            return redirect()->route("reserverenComplete")->with(["success" => "U heeft succesvol gereserveerd!"]);
        }
    }
    
    public function postReservering(Request $request)
    {
        /*$this->validate($request, [
            'naam' => 'required',
            'email' => 'required|email'
        ]);*/
            
        $user = new User();
        $user->id = DB::table('users')->max('id') + 1;
        $user->naam = $request["naam"];
        $user->tussenvoegsel = $request["tussenvoegsel"];
        $user->achternaam = $request["achternaam"];
        $user->email = $request["email"];
        $user->telnummer = $request["telnummer"];
        $user->adres = $request["adres"];
        $user->woonplaats = $request["woonplaats"];
        $user->rol = "bezoeker";
        $user->save();
        
        $reservering = new Reservering();
        $reservering->idUser = $user->id;
        $reservering->idTicket = $request["ticket"];
        $reservering->betaalmethode = $request["betaalmethode"];
        $reservering->barcode = $request["ticket"] * $reservering->idUser . "12351";
        $reservering->prijs = 70;
        $reservering->save();
        
        return redirect()->route("reserverenComplete")->with(["success" => "U heeft succesvol gereserveerd!"]);
    }
}