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
        
        Mail::Send("email.email", ['message'=>$message], function($m) use($message) {
            $m->from("bunky_rob@hotmail.com", "Bunky™");
            $m->to("rob_bunky@hotmail.com", $message);
            $m->subject($message);
        });
    }
}
