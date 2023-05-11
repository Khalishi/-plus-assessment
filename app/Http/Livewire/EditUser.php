<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $firstName;
    public $LastName;
    public $email;
    public $role;
    public $password;
    public $ConfirmPassword;

    public function mount($user)
    {
        $this->user = $user;

        $this->firstName = $user->firstName;
        $this->LastName = $user->LastName;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->password = $user->password;

    }

    public function updateUser()
    {

        $this->validate([

            'firstName' => 'required|min:3|max:50',
            'LastName' => 'required|min:3|max:50',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'password' => 'required|min:8|max:255',
            'ConfirmPassword' => 'required|same:password',
            'role' => 'required',
        ]);

        // Update the user instance with the new values

        $this->user->firstName = $this->user['firstName'];
        $this->user->LastName = $this->user['LastName'];
        $this->user->email = $this->user['email'];
        $this->user->role = $this->user['role'];

        if ($this->user['password']) {

            $this->user->password = bcrypt($this->user['password']);
        }

        // Save the changes to the database
        $this->user->save();

        session()->flash('message', 'User updated successfully!');

    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
