<?php

namespace App\Listeners;

use App\Events\MessageTegenbod;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendTegenbod
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageTegenbod  $event
     * @return void
     */
    public function handle(MessageTegenbod $event)
    {
       $message = "Tegenbod bevestigd!";
        $userArray = $event->user;
        $aanmeldingArray = $event->aanmelding;
        
        Mail::Send("email.email-tegenbod", [
            'message'=>$message, 
            'aanmeldingen'=>$aanmeldingArray, 
            'users'=>$userArray], function($m) use($message) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to("whomever@who.com", "yo");
            $m->subject($message);
        });
    }
}
