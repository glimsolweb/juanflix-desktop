<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

// Public Route
Route::get('/', function () {
    return view('layouts.guest.landing.homepage');
})->name('homepage');

Route::get('usercreate', [UserController::class, 'createUser']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
