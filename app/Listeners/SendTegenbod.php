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
        /*$ticketArray = $event->ticket;
        $maaltijdArray = $event->maaltijd;
        $userArray = $event->user;
        $pdf = $event->pdf;*/
        
        Mail::Send("email.email-tegenbod", ['message'=>$message], function($m) use($message) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to("what@waht.com", "yoyoyo");
            $m->subject($message);
            /*$m->attachData($pdf->output(), "Robattatchment.pdf");*/
        });
    }
}
