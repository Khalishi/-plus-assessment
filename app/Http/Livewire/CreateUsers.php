<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class CreateUsers extends ModalComponent
{
    public $state = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'role' => '',
        'password' => '',
    ];

    public $firstName = '';
    public $LastName = '';
    public $email = '';
    public $password = '';
    public $ConfirmPassword = '';
    public $role = 'User';

    public function createUsers()
    {

        $this->state = [
            'first_name' => $this->firstName,
            'last_name' => $this->LastName,
            'email' => $this->email,
            'role' => $this->role,
            'password' => $this->password,
        ];

        dd($this->state);
    }

    public function render()
    {
        return view('livewire.create-users');

    }
}
