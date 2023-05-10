<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin-dashboard');
});

Route::get('/login', function () {
    return view('guest');
});

Route::get('/admin/edit', function () {
    return view('admin-edit');
});

// Route::get('/users/{user}/edit', EditUser::class)->name('users.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
