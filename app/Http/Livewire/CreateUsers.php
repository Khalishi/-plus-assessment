<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class CreateUsers extends ModalComponent
{
    public function render()
    {
        return view('livewire.create-users');
    }
}
