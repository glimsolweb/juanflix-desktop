<?php

use App\Livewire\Landing\Plan;
use App\Livewire\Landing\Profile;
use App\Livewire\Landing\Homepage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Landing\Profile\ProfileContent;
use App\Http\Controllers\User\UserController;
use App\Livewire\Landing\Profile\ProfileManage;
use App\Livewire\Landing\VerifyOtp;

// Public Route
// Landing Page
Route::get('/', Homepage::class)->name('homepage');

// Authenticated Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','otpverify'])->group(function () {
    // Profile
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-content/{profileID}', ProfileContent::class)->name('profile-content');
    Route::get('/profile-manage', ProfileManage::class)->name('profile-manage');
    Route::get('/plans', Plan::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/verify-otp', VerifyOtp::class)->name('verify-otp');
});

// Test
Route::get('usercreate', [UserController::class, 'createUser']);
