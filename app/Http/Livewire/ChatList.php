<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    
    public $messages;
    protected $listeners = ["mensajeRecibido"];

    public function mount()
    {
        
        $this->messages = [];
    }

    public function mensajeRecibido($message)
    {
        $this->messages[] = $message;
    }


    public function render()
    {
        return view('livewire.chat-list');
    }
}
