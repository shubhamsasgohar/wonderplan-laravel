<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; // Import the BlogController
use App\Http\Controllers\Api\BlogAPIController; // Import the BlogController


// Redirect users to the login page if they access a route without authentication
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blog Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('blogs', BlogController::class);
        Route::post('/blogs/upload-image', [BlogController::class, 'uploadImage'])->name('blogs.uploadImage');
        Route::get('/firebase-users', [UserController::class, 'listUsers'])->name('firebase-users');


    });
});

Route::get('/blogs', [BlogAPIController::class, 'index']);
Route::get('/blogs/{slug}', [BlogAPIController::class, 'show']);

require __DIR__.'/auth.php';
