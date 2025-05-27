<?php

use App\Livewire\Landing\Plan;
use App\Livewire\Landing\Profile;
use App\Livewire\Landing\Homepage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Landing\Profile\ProfileContent;
use App\Http\Controllers\User\UserController;
use App\Livewire\Landing\CancelMembership;
use App\Livewire\Landing\Profile\ProfileManage;
use App\Livewire\Landing\ProfileInformation\ProfileSettings;
use App\Livewire\Landing\VerifyOtp;
use App\Livewire\Landing\WelcomeNewUser;

// Public Route
// Landing Page
Route::get('/', Homepage::class)->name('homepage');

// Authenticated Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','otpverify'])->group(function () {
    // Profile
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-content/{profileID}', ProfileContent::class)->name('profile-content');
    Route::get('/profile-manage', ProfileManage::class)->name('profile-manage');

    // Plans
    Route::get('/plans', Plan::class);

    // Otp
    Route::get('/verify-otp', VerifyOtp::class)->name('verify-otp');

    // Profile Information
    Route::get('profile-information', ProfileSettings::class)->name('profile-information');
    Route::get('cancel-membership', CancelMembership::class)->name('cancel-membership');

    // Welcome New User
    Route::get('welcome-user', WelcomeNewUser::class)->name('welcome-user');

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

// Test
Route::get('usercreate', [UserController::class, 'createUser']);
