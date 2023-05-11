<?php

namespace App\Http\Controllers;

use App\Models\User;

class EditUserController extends Controller
{

    public function edit(User $user)
    {
        return view('admin-edit', compact('user'));
    }

}
