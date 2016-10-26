<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Aanmelding;
use Illuminate\Support\Facades\DB;

class BeoordeelAanmeldingController extends Controller
{
    public function postAanmelding(Request $request)
    {
        DB::table('slots')->where('id', $request["aanmelding"])->update(['idStatus' => 3]);
        
        
        return redirect()->route("dashboard")->with(["success" => "U heeft succesvol gereserveerd!"]);
    }
}
