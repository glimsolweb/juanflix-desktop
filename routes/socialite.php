<?php
// Route for Socialite

use App\Http\Controllers\User\Auth\GoogleController;
use App\Http\Controllers\User\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::group(['middleware' => ['web']], function () {
    Route::get('/auth/google/redirect', [GoogleController::class, 'googleAuth'])->name('google.auth');
    Route::get('/auth/google/callback', [GoogleController::class, 'googleCallBack'])->name('google.callback');
});
