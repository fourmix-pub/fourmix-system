<?php

namespace App\Events\ModelEvents;

use App\Models\SafetyMail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SafetyMailCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var SafetyMail
     */
    public $safetyMail;

    /**
     * Create a new event instance.
     *
     * @param SafetyMail $safetyMail
     */
    public function __construct(SafetyMail $safetyMail)
    {
        $this->safetyMail = $safetyMail;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
