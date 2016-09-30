<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reservering;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ReserveringController extends Controller
{
    public function getReserveringIndex()
    {
        return view('reserveren.reserveren');
    }
    
    public function postReservering(Request $request)
    {
        
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
        
        return redirect()->route("vervolgReserveren")->with(["success" => "U heeft succesvol gereserveerd!"]);

    }
}
