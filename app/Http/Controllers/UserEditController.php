<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserEditController extends Controller
{
    public function edit(User $user)
    {

        return view('admin-edit', compact('user'));

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required|min:3|max:50',
            'LastName' => 'required|min:3|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'ConfirmPassword' => 'required|same:password',
            'role' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('/')
            ->with('success', 'User updated successfully');
    }
}
