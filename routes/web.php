<?php

use App\Livewire\Landing\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Livewire\Landing\Plan;
use App\Livewire\Landing\Profile;

// Public Route
// Landing Page
Route::get('/', Homepage::class);
Route::get('/profile', Profile::class);

// Authenticated Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/plans', Plan::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Test
Route::get('usercreate', [UserController::class, 'createUser']);
