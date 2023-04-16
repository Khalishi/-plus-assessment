<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class CreateUsers extends ModalComponent
{

    public $firstName;
    public $LastName;
    public $email;
    public $password;
    public $ConfirmPassword;
    public $role;

    public function createUsers()
    {
        $validatedData = Validator::make(
            [
                'firstName' => $this->firstName,
                'LastName' => $this->LastName,
                'email' => $this->email,
                'password' => $this->password,
                'confirmPassword' => $this->ConfirmPassword,
            ],

            [
                'firstName' => 'required|min:3|max:50',
                'LastName' => 'required|min:3|max:50',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:8|max:255',
                'ConfirmPassword' => 'required|same:password',
                'role' => 'nullable',
            ]
        )->validate();

        // Save the user to the database
        // $user->save();
        dd($validatedData);
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
