<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageTicket extends Event
{
    use SerializesModels;
    public $ticket = [];
    public $maaltijd = [];
    public $user = [];
    public $aanmelding = [];
    public $pdf;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($ticket, $maaltijd, $user, $aanmelding, $pdf)
    {
        $this->ticket = $ticket;
        $this->maaltijd = $maaltijd;
        $this->user = $user;
        $this->aanmelding = $aanmelding;
        $this->pdf = $pdf;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
