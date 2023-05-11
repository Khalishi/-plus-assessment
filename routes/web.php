<?php
use App\Http\Controllers\EditUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin-dashboard');
});

Route::get('/login', function () {
    return view('guest');
});

Route::get('/users/{user}/edit', [EditUserController::class, 'edit'])->name('admin-edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
