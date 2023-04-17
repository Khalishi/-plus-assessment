<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class CreateUsers extends ModalComponent
{

    public $firstName;
    public $LastName;
    public $email;
    public $password;
    public $ConfirmPassword;
    public $role;
    protected $rules = [
        'firstName' => 'required|min:3|max:50',
        'LastName' => 'required|min:3|max:50',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:8|max:255',
        'ConfirmPassword' => 'required|same:password',
        'role' => 'nullable',
    ];

    public function createUsers()
    {
        $validatedData = $this->validate();

        User::create($validatedData);
        $this->dispatchBrowserEvent('recordCreated');
        $this->reset();
        $this->emit('recordAdded');

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'firstName' => 'required|min:3|max:50',
            'LastName' => 'required|min:3|max:50',
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
