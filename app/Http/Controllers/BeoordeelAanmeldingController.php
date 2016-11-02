<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Aanmelding;
use PDF;
use App\Http\Requests;
use App\SlotTag;
use App\Events\MessageTicket;
use App\Events\MessageTegenbod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;

class BeoordeelAanmeldingController extends Controller
{
    public function postacceptaanmelding(Request $request)
    {
        $aanmeldingsId = DB::table('aanmeldings')->where('idAanmelding', $request["aanmelding"])->first();
        DB::table('slots')->where('id', $aanmeldingsId->idSlot)->update(['idStatus' => 3]);
        $kosten = $aanmeldingsId->kosten;
        $oudBudget = DB::table('sprekerskostens')->first();
        $nieuwBudget = $oudBudget->budget - $kosten;
        DB::table('sprekerskostens')->where('id', 1)->update(['budget' => $nieuwBudget]);
        
        DB::table('aanmeldings')->where('idAanmelding', $request["aanmelding"])->update(['status' => "Geaccepteerd"]);
        
        $idSlot = DB::table('slots')->where('id', $aanmeldingsId->idSlot)->first();
        
        $slottag1 = new SlotTag();
        $slottag1->id = DB::table('slot_tags')->max('id') + 1;
        $slottag1->idSlot = $idSlot->id;
        $slottag1->idTag = $request["tag1"];
        $slottag1->save();
        
        $slottag2 = new SlotTag();
        $slottag2->id = DB::table('slot_tags')->max('id') + 1;
        $slottag2->idSlot =  $idSlot->id;
        $slottag2->idTag = $request["tag2"];
        $slottag2->save();
        
        $slottag3 = new SlotTag();
        $slottag3->id = DB::table('slot_tags')->max('id') + 1;
        $slottag3->idSlot =  $idSlot->id;
        $slottag3->idTag = $request["tag3"];
        $slottag3->save();
        
        return redirect()->route("dashboard")->with(["success" => "U heeft succesvol een aanmelding geaccepteerd!"]);
    }
    
    public function postdeclineaanmelding(Request $request)
    {
        DB::table('slots')->where('id', $request["aanmelding"])->update(['idStatus' => 1]);
        DB::table('aanmeldings')->where('idSlot', $request["aanmelding"])->delete();
        
        return redirect()->route("dashboard")->with(["success" => "U heeft succesvol een aanmelding verworpen!"]);
    }
    
    public function postTegenbod(Request $request)
    {
        
        DB::table('aanmeldings')->where('idUser', $request["idUser"])->update(['status' => "Wachtend"]);
        DB::table('aanmeldings')->where('idUser', $request["idUser"])->update(['tegenBod' => $request["nieuweKosten"]]);
/*        $ticket[] = DB::table('tickets')->get();
        $maaltijd[] = DB::table('maaltijds')->get();*/
        $user = DB::table('users')->where('id', $request["idUser"])->first();
        $aanmelding = DB::table('aanmeldings')->where('idUser', $request["idUser"])->first(); 
       /* $pdf = PDF::loadView('pdf.pdf', ["ticketarray" => $ticket]);
        */
        /*Event::fire(new MessageTegenbod($user, $aanmelding));*/
        
        $message = "Tegenbod aanmelding!";
        $userArray = $user;
        $aanmeldingArray = $aanmelding;
        
        Mail::Send("email.email-tegenbod", [
            'message'=>$message, 
            'aanmeldingen'=>$aanmeldingArray, 
            'users'=>$userArray], function($m) use($message) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to("whomever@who.com", "yo");
            $m->subject($message);
        });
        
        return redirect()->route("dashboard")->with(["success" => "U heeft een mail gestuurd!"]);
    }
    
    public function postAcceptTegenbod(Request $request)
    {
        $aanmelding = DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->first();
        
        DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->update(['status' => "Geaccepteerd"]);
        DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->update(['kosten' => $aanmelding->tegenBod]);
        
        $kosten = $aanmelding->tegenBod;
        $oudBudget = DB::table('sprekerskostens')->first();
        $nieuwBudget = $oudBudget->budget - $kosten;
        DB::table('sprekerskostens')->where('id', 1)->update(['budget' => $nieuwBudget]);
        // Verander status van slot naar 3 (bezet)
        $aanmelding = DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->first();
        DB::table('slots')->where('id', $aanmelding->idSlot)->update(['idStatus' => 3]);
        
        return redirect()->route("aanmelden")->with(["success" => "U heeft succesvol uw aanmelding geaccepteerd, voor een nieuwe prijs!"]);
    }
    
    public function postWeigerTegenbod(Request $request)
    {
        $aanmelding = DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->first();
        $slotId = $aanmelding->idSlot;
        
        DB::table('slots')->where('id', $slotId)->update(['idStatus' => 1]);
        DB::table('aanmeldings')->where('idAanmelding', $request["aanmeldingsId"])->delete();
        
        return redirect()->route("aanmelden")->with(["success" => "U heeft succesvol uw aanmelding geweigerd!"]);
    }
    
    public function postTag(Request $request)
    {
        $slottag1 = new SlotTag();
        $slottag1->id = DB::table('slot_tags')->max('id') + 1;
        $slottag1->idSlot = $request["idSlot"];
        $slottag1->idTag = $request["tag1"];
        $slottag1->save();
        
        $slottag2 = new SlotTag();
        $slottag2->id = DB::table('slot_tags')->max('id') + 1;
        $slottag2->idSlot = $request["idSlot"];
        $slottag2->idTag = $request["tag2"];
        $slottag2->save();
        
        $slottag3 = new SlotTag();
        $slottag3->id = DB::table('slot_tags')->max('id') + 1;
        $slottag3->idSlot = $request["idSlot"];
        $slottag3->idTag = $request["tag3"];
        $slottag3->save();
        
        return redirect()->route("dashboard")->with(["success" => "U heeft succesvol uw aanmelding tags gegeven!"]);
    }
}
