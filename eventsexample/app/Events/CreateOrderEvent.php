<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateOrderEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public $order) {}
    public function broadcastOn(): Channel|array
    {
        return new PrivateChannel('channel-name');
    }
}

