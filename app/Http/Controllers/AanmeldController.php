<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Aanmelding;
use App\Events\MessageTicket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;

class AanmeldController extends Controller
{
    public function postAanmelding(Request $request)
    {
        $this->validate($request, [
            'naam' => 'required',
            //'email' => 'required|email'
        ]);
           
        $user = new User();
        $user->id = DB::table('users')->max('id') + 1;
        $user->naam = $request["naam"];
        $user->tussenvoegsel = $request["tussenvoegsel"];
        $user->achternaam = $request["achternaam"];
        $user->email = $request["email"];
        $user->telnummer = $request["telnummer"];
        $user->adres = $request["adres"];
        $user->woonplaats = $request["woonplaats"];
        $user->rol = "spreker";
        $user->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = $request["slot1"];
        $aanmelding->voorkeur = $request["slot-voorkeur"];
        $aanmelding->idUser = $user->id;
        $aanmelding->onderwerp = $request["onderwerp"];
        $aanmelding->omschrijving = $request["omschrijving"];
        $aanmelding->wensen = $request["wensen"];
        $aanmelding->kosten = $request["kosten"];
        $aanmelding->save();
        
        DB::table('slots')->where('id', $request["slot1"])->update(['idStatus' => 2]);
        
        return redirect()->route("completeaanmelden")->with(["success" => "U heeft succesvol gereserveerd!"]);
    }
}