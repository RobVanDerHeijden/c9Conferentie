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
        $query = DB::table('tickets')->get();
        $maaltijdquery = DB::table('maaltijds')->get();
        return view('reserveren.reserveren')->with(['tickets'=>$query, 'maaltijden'=>$maaltijdquery]);
    }
    
    public function postReserveringArray(Request $request){
        $post = $request->all();
        //var_dump($post);
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
            for ($i = 0; $i < count($post["ticket"]); $i++)
            {
                $reservering = array('id' => DB::table('reserverings')->max('id') + 1,
                'idUser' => $id,
                'idTicket' => $post["ticket"][$i],
                'betaalmethode' => $post["betaalmethode"],
                'barcode' => $id . $i . $post["ticket"][$i],
                'prijs' => $post["amount"][$i]
                );
                DB::table('reserverings')->insert($reservering);
            }
            Event::fire(new MessageTicket());
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