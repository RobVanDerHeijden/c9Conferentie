<?php

namespace App\Listeners;

use App\Events\MessageTicket;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendTicket
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
     * @param  MessageTicket  $event
     * @return void
     */
    public function handle(MessageTicket $event)
    {
        $message = "Reservering bevestigd!";
        $ticketArray = $event->ticket;
        $maaltijdArray = $event->maaltijd;
        $userArray = $event->user;
        
        Mail::Send("email.email", ['message'=>$message, 'tickets'=>$ticketArray, 'maaltijden'=>$maaltijdArray, 'users'=>$userArray], function($m) use($message, $userArray) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to($userArray["email"], $userArray["naam"]);
            $m->subject($message);
        });
    }
}
