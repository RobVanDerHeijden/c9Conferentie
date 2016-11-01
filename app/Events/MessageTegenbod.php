<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageTegenbod extends Event
{
    use SerializesModels;
    public $user = [];
    public $aanmelding = [];

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $aanmelding)
    {
        $this->user = $user;
        $this->aanmelding = $aanmelding;
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
