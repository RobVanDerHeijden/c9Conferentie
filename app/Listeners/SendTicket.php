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
        $message = "Aanmelding bevestigd!";
        $ticketArray = $event->ticket;
        $maaltijdArray = $event->maaltijd;
        $userArray = $event->user;
        $aanmeldingArray = $event->aanmelding;
        $pdf = $event->pdf;
        
        Mail::Send("email.email", [
            'message'=>$message, 
            'tickets'=>$ticketArray, 
            'maaltijden'=>$maaltijdArray, 
            'aanmeldingen'=>$aanmeldingArray, 
            'users'=>$userArray], function($m) use($message, $pdf) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to("whomever@who.com", "yo");
            $m->subject($message);
            $m->attachData($pdf->output(), "Robattachment.pdf");
        });
    }
}
