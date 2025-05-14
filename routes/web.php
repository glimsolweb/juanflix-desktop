<?php

use App\Livewire\Landing\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Livewire\Landing\Plan;
use App\Livewire\Landing\Profile;
use App\Livewire\Landing\ProfileContent;

// Public Route
// Landing Page
Route::get('/', Homepage::class)->name('homepage');
Route::get('/profile-content', ProfileContent::class);

// Authenticated Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/profile', Profile::class);
    Route::get('/plans', Plan::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Test
Route::get('usercreate', [UserController::class, 'createUser']);
