<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Events\MessageTicket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;

class InlogController extends Controller
{
     public function getDashboard()
    {
        return view("organisator.organisator-dashboard");
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route("user.login");
    }
    public function postInlogArray(Request $request) {
        /* Validation */
        $this->validate($request, [
            'gebruikersnaam' => 'required',
            'password' => 'required'
        ]);
        
        if (!Auth::attempt(['gebruikersnaam' => $request["gebruikersnaam"], 'password'=> $request["password"], 'rol' => 'organisator'])) {
            return redirect()->back()->with(["fail" => "Gebruiker niet gevonden! Probeer opnieuw!"]);
            
        }
        return redirect()->route("dashboard");
        
        
        
        
        
        
        
        
        /*
        $post = $request->all();
        //var_dump($post);
        $gebruikersnaam = $post["gebruikersnaam"];
        $wachtwoord = $post['wachtwoord'];

        $user = DB::table('users')->where('gebruikersnaam', $post["gebruikersnaam"])->get();
        if (count($user) > 0) {
            
        $user = DB::table('users')->where('gebruikersnaam', $post["gebruikersnaam"])->get();
        $userHash = $user[0]->password;
        $userRol = $user[0]->rol;
        
        $wwcheck = 0;
        if (password_verify($wachtwoord, $userHash) && $userRol == "organisator") {
            //echo 'Password is valid!';
            $wwcheck = 1;
        } else {
            return redirect()->route("aanmelden")->with(["fail" => "Wachtwoord incorrect! Of u heeft niet de juiste bevoegdheden!"]);
            $wwcheck = 2;
        }
        //$gebruiker = DB::table('users')->where('gebruikersnaam', $gebruikersnaam)->pluck(bcrypt('password'));
        //$wachtwoord = DB::table('users')->where('gebruikersnaam', $post["gebruikersnaam"])->value(bcrypt('fietsje'));
    
            return redirect()->route("vervolgaanmelden")->with(["success" => "Succes! naam: ".$gebruikersnaam." ww: ".$wachtwoord." succescheck: ".$wwcheck." Roll: ".$userRol]);
        } else {
            return redirect()->route("aanmelden")->with(["fail" => "Gebruiker niet gevonden! Probeer opnieuw!"]);
            
        }
        */
    }
}
