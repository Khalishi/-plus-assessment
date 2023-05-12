<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class CreateUsers extends ModalComponent
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $ConfirmPassword;
    public $role;
    protected $rules = [
        'firstName' => 'required|min:3|max:50',
        'lastName' => 'required|min:3|max:50',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:8|max:255',
        'ConfirmPassword' => 'required|same:password',
        'role' => 'required',

    ];

    public function createUsers()
    {
        $validatedData = $this->validate();

        User::create($validatedData);
        $this->reset();

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'firstName' => 'required|min:3|max:50',
            'lastName' => 'required|min:3|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'ConfirmPassword' => 'required|same:password',
            'role' => 'required',
        ]);

    }

    public function render()
    {

        return view('livewire.create-users');

    }
}
