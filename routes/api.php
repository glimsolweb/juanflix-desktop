<?php

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Middleware\ApiToken;
use App\Http\Controllers\Api\Film;
use App\Http\Controllers\Api\User;
use App\Http\Controllers\Api\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserLogin;
use App\Http\Controllers\Api\CrewController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OtpController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Juanflix Api Route
Route::group(['middleware' => 'apitoken'], function () {
    // Film API
    Route::apiResource('film', Film::class);
    Route::get('films/genre/{genre}', [Film::class, 'filmByGenre']);
    Route::get('films/genre-id', [Film::class, 'filmByGenreID']);

    // Genre API
    Route::apiResource('genre', GenreController::class);

    // Categories API
    Route::apiResource('categories', CategoryController::class);
    Route::get('films/category-id', [Film::class, 'filmByCategoryId']);

    // Crew API
    Route::apiResource('crews', CrewController::class);

    // User API
    Route::apiResource('userlogin', UserLogin::class);
    Route::apiResource('user', User::class);
    Route::put('user/update/{id}', [User::class, 'update']);
});

// JWT Middleware Route
Route::group(['middleware' => 'jwt.auth'], function ($router) {
    // Auth
    Route::post('auth-user-api', [UserLogin::class, 'authUserApi'])->name('login.api');
    Route::post('logout-api', [UserLogin::class, 'authLogoutApi'])->name('logout.api');

    // Profile
    Route::get('user-profile-api', [Profile::class, 'userProfileApi']);
    Route::get('get-available-profiles', [Profile::class, 'getAvailableProfilesApi']);

    // Otp
    Route::get('validate-otp-api', [OtpController::class, 'validateUserOtpApi']);
});
