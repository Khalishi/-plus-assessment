<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $firstName;
    public $lastName;
    public $email;
    public $role;
    public $password;
    public $ConfirmPassword;
    protected $rules = [
        'firstName' => 'required|min:3|max:50',
        'lastName' => 'required|min:3|max:50',
        'email' => 'required|email|max:255',
        'password' => 'required|min:8|max:255',
        'ConfirmPassword' => 'required|same:password',
        'role' => 'required',

    ];

    public function mount(User $user)
    {
        $this->user = $user;

        $this->firstName = $user->firstName;
        $this->lastName = $user->lastName;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->password = $user->password;
        $this->ConfirmPassword = $user->ConfirmPassword;

    }

    public function updateUser()
    {

        $this->validate();

        $this->user->update([
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'role' => $this->role,
            'password' => bcrypt($this->password),
            'ConfirmPassword' => bcrypt($this->ConfirmPassword),

        ]);

        session()->flash('success_message', 'User updated successfully!');

    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
