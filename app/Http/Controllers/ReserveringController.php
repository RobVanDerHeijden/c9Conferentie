<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reservering;
use App\Ticket;
use App\Maaltijd;
use PDF;
use App\Http\Requests;
use QrCode;
use App\Events\MessageTicket;
use App\Events\MessageTegenbod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class ReserveringController extends Controller
{
    // Functie die het makkelijker maakt om gegevens van de ticket+maaltijd soort op te halen op de view pagina van reserveren
    public function getReserveringIndex()
    {
        // ticket en maaltijd variabelen als alle rijen uit de tabellen ticketsoorts en maaltijdensoorts
        $ticketquery = DB::table('ticketsoorts')->get();
        $maaltijdquery = DB::table('maaltijdsoorts')->get();
        // Geef de variabelen mee aan de view reserveren in de map reserveren als: 'tickets' en 'maaltijden'
        return view('reserveren.reserveren')->with(['tickets'=>$ticketquery, 'maaltijden'=>$maaltijdquery]);
    }
    
    // Functie die wordt aangeroepen wanneer een reservering wordt gemaakt (bezoeker drukt op bevestigen+allevalidatie klopt)
    public function postReserveringArray(Request $request){
        /* Validation */
        /*$this->validate($request, [
            'naam' => 'required',
            'email' => 'required|email'
        ]);*/
        
        // alle informatie die wordt meegegeven wordt nu omgezet naar variabel $post
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
        // zet de nieuwe user in de database en zet de id van die user in variabele $id
        $id = DB::table('users')->insertgetId($user);
        
        // Als het id van de user groter is dan 0(zou altijd moeten zijn, anders is er iets mis), voer dan alles hierin uit
        if ($id > 0) {
            /* ************* RESERVERING *************** */
            $reservering = array('id' => DB::table('reserverings')->max('id') + 1,
                'idUser' => $id,
                'betaalmethode' => $post["betaalmethode"],
                'prijs' => $post["totaalReservering"]
            );
            // zet de nieuwe reservering in de database en zet de id van die reservering in variabele $idReservering
            $idReservering = DB::table('reserverings')->insertgetId($reservering);
                
            /* *************** Alle TICKETS *************** */
            $ticket = [];
            
            // Voor ieder gepost ticket
            for ($i = 0; $i < count($post["ticket"]); $i++)
            {
                // Variabelen voor dagen
                $vrijdag = DB::table('ticketsoorts')->where('id', 1)->value('beschikbaar');
                $zaterdag = DB::table('ticketsoorts')->where('id', 2)->value('beschikbaar');
                $zondag = DB::table('ticketsoorts')->where('id', 3)->value('beschikbaar');
            
                // Maak nieuwe ticket aan door middel van de Ticket model
                $ticket[] = Ticket::create([
                    'id' => DB::table('tickets')->max('id') + 1,
                    'reservering' => $idReservering,
                    'soort' => $post["ticket"][$i],
                    'barcode' => "666" . $post["ticket"][$i] . $id . DB::table('tickets')->max('id')
                ]);
                
                // Verlaag beschikbaar per dag gebaseerd op soort ticket
                if ($post["ticket"][$i] == 1) {
                    DB::table('ticketsoorts')->where('id', 1)->update(['beschikbaar' => ($vrijdag - 1)]);
                }
                if ($post["ticket"][$i] == 2) {
                    DB::table('ticketsoorts')->where('id', 2)->update(['beschikbaar' => ($zaterdag - 1)]);
                }
                if ($post["ticket"][$i] == 3) {
                    DB::table('ticketsoorts')->where('id', 3)->update(['beschikbaar' => ($zondag - 1)]);
                }
                if ($post["ticket"][$i] == 4) {
                    DB::table('ticketsoorts')->where('id', 1)->update(['beschikbaar' => ($vrijdag - 1)]);
                    DB::table('ticketsoorts')->where('id', 2)->update(['beschikbaar' => ($zaterdag - 1)]);
                    DB::table('ticketsoorts')->where('id', 3)->update(['beschikbaar' => ($zondag - 1)]);
                }
                if ($post["ticket"][$i] == 5) {
                    DB::table('ticketsoorts')->where('id', 2)->update(['beschikbaar' => ($zaterdag - 1)]);
                    DB::table('ticketsoorts')->where('id', 3)->update(['beschikbaar' => ($zondag - 1)]);
                }
            }
            
            /* *************** Alle MAALTIJDEN *************** */
            $maaltijd = []; 
            // De for loop gaat alleen af wanneer er minstens een maaltijd wordt gepost
            if (isset($post["maaltijd"])) {
                // $x is what makes sure that the vegetarisch checkbox is correct with each row
                $x = 1;
                // Voor ieder geposte maaltijd
                for ($i = 0; $i < count($post["maaltijd"]); $i++)
                {
                    // Als vegetarisch is aangevinkt
                    if(isset($post['vegetarisch'][$x]) && $post['vegetarisch'][$x] == 'Ja') 
                    {
                        // Wel vegetarisch
                        $check = "Ja";
                        $x = $x + 1;
                    }
                    else
                    {
                        // Niet vegetarisch
                        $check = "Nee";
                    } 
                    // Zorg dat loop niet oneindig doorgaat
                    $x = $x + 1;
                    
                    // Maak nieuwe maaltijd aan door middel van de Maaltijd model
                    $maaltijd[] = Maaltijd::create([
                        'id' => DB::table('maaltijds')->max('id') + 1,
                        'reservering' => $idReservering,
                        'soort' => $post["maaltijd"][$i],
                        'vegetarisch' => $check,
                        'barcode' => "999" . $post["maaltijd"][$i] . $id . DB::table('maaltijds')->max('id')
                    ]);
                }
            }
            
            foreach ($ticket as $ticketQr) {
                QrCode::format('png')->size(250)->generate('ticketcode: ' . $ticketQr->barcode,public_path(). '/src/tickets/'.$ticketQr->id.'.jpg');
            }
            
            foreach ($maaltijd as $maaltijdQr) {
                QrCode::format('png')->size(250)->generate('maaltijdcode: ' . $maaltijdQr->barcode,public_path(). '/src/maaltijden/' . $maaltijdQr->id . '.jpg');
            }
            
            // Extra variabelen om mee te gevven voor het opstellen van de email
            $pdf = PDF::loadView('pdf.pdf', ["ticketarray" => $ticket, "maaltijdarray" => $maaltijd]);
            
            Event::fire(new MessageTicket($ticket, $maaltijd, $user, $pdf));
            // Stuur door naar route "reserverenComplete"
            return redirect()->route("reserverenComplete")->with(["success" => "U heeft succesvol gereserveerd!"]);
        }
    }
    
    public function afzegReservering(Request $request)
    {
        $reservering = DB::table('reserverings')->where('id', $request["reserveringNr"])->first();
        if (isset($request["idTicket"])) {
            DB::table('tickets')->where('id', $request["idTicket"])->delete();
        }
        if (isset($request["idMaaltijd"])) {
            DB::table('maaltijds')->where('id', $request["idMaaltijd"])->delete();
        }
        
        return redirect()->back();
    }
    
    // Oude irrelevante reserveringscontrollerfunctie. Kon maar 1 ticket doen
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