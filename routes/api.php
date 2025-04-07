<?php

use App\Http\Controllers\Api\Film;
use App\Http\Controllers\Api\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('film', Film::class);
Route::apiResource('login', UserLogin::class);
