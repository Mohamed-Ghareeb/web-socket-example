<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WelcomeMsg implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public function __construct(public $title)
    {
        //
    }

    public function broadcastOn(): array
    {
        return [
            'welcome_msg'
        ];
    }

    public function broadcastAs(): string
    {
        return 'welcome_user';
    }

    public function viaConnection(): string
    {
        return 'database';
    }
}
