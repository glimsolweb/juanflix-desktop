<?php

use Illuminate\Http\Request;
use App\Http\Middleware\ApiToken;
use App\Http\Controllers\Api\Film;
use App\Http\Controllers\Api\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserLogin;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Juanflix Api Route
Route::group(['middleware' => 'apitoken'], function () {

    // Film API
    Route::apiResource('film', Film::class);
    Route::get('films/genre/{genre}', [Film::class, 'filmByGenre']);
    Route::get('films/genre-id/{genre_id}', [Film::class, 'filmByGenreID']);

    // User API
    Route::apiResource('userlogin', UserLogin::class);
    Route::apiResource('user', User::class);
});
