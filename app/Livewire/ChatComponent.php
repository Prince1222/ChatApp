<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ChatComponent extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($user_id){
    $this->user = User::whereId($user_id)->first();
    }
}
