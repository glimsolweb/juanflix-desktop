<?php
// Route for Socialite

use App\Http\Controllers\User\Auth\FacebookController;
use App\Http\Controllers\User\Auth\GoogleController;
use App\Http\Controllers\User\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::group(['middleware' => ['web']], function () {
    // Google Route
    Route::get('/auth/google/redirect', [GoogleController::class, 'googleAuth'])->name('google.auth');
    Route::get('/auth/google/callback', [GoogleController::class, 'googleCallBack'])->name('google.callback');

    // Facebook Route
    Route::get('/auth/facebook/redirect', [FacebookController::class, 'facebookAuth'])->name('facebook.auth');
    Route::get('/auth/facebook/callback', [FacebookController::class, 'facebookCallBack'])->name('facebook.callback');
    Route::get('/auth/facebook/delete', [FacebookController::class, 'facebookDelete'])->name('facebook.delete');
});
