<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherBroadcast implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $message;
    public string $name;
    public string $avatar;
    public string $level;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    // public function __construct(string $message)
    // {
    //     //
    //     $this->message = $message;
    // }
    public function __construct(string $message, string $name
    ,string $avatar
    ,string $level
    )
    {
        //
        $this->message = $message;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->level = $level;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn(): array
    {
        return ['public'];
    }

    public function broadcastAs(): string
    {
        return 'chat';
    }
}
