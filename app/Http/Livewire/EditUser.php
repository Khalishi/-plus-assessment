<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $firstName;
    public $LastName;
    public $email;
    public $password;
    public $role;
    public $ConfirmPassword;
    protected $rules = [
        'firstName' => 'required|min:3|max:50',
        'LastName' => 'required|min:3|max:50',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:8|max:255',
        // 'ConfirmPassword' => 'required|same:password',
        'role' => 'required',

    ];

    public function mount(User $user)
    {

        $this->user = $user;
        $this->firstName = $user->firstName;
        $this->LastName = $user->LastName;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;

    }

    public function submitForm()
    {
        $this->validate();

        $this->user->update([
            $this->firstName = $user->firstName,
            $this->LastName = $user->LastName,
            $this->email = $user->email,
            $this->password = $user->password,
            $this->role = $user->role,

        ]);

        session()->flash('message', 'User updated successfully!');

    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
