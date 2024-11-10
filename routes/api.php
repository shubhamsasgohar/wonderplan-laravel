<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; // Import the BlogController
use App\Http\Controllers\Api\BlogAPIController; // Import the BlogController

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/blogs', [BlogAPIController::class, 'index']);
Route::get('/blogs/{slug}', [BlogAPIController::class, 'show']);
