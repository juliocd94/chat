<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EnviarMensaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nombre;
    public $message;
   
    public function __construct($nombre, $message)
    {
        $this->$nombre = $nombre;
        $this->$message = $message;
    }

    public function broadcastOn()
    {
        return 'for-zebra-602';
    }

    public function broadcastAs()
    {
        return "chat-event";
    }
}
