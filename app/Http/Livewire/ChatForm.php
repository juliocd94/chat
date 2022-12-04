<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Messages;

class ChatForm extends Component
{
    public $message;
    public $nombre;
    protected $listeners = ["enviarMensaje"];

    public function mount()
    {
        $this->message = "";
        $this->nombre = "";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }


    public function enviarMensaje()
    {
        Messages::create([
            "message" => $this->message,
            "user_id" => "2",
        ]);
        $this->validate([
            "nombre" => "required|min:5",
            "message" =>"required"
        ]);

        $this->emit("mensajeEnviado");

        $datos = [
            "nombre" => $this->nombre,
            "message" => $this->message
        ];

        $this->emit("mensajeRecibido", $datos);

        event(new \App\Events\EnviarMensaje($this->nombre, $this->message));
    }
}
