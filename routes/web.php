<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; // Import the BlogController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blog Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('blogs', BlogController::class);

        // Image upload route for the blog editor
        Route::post('/blogs/upload-image', [BlogController::class, 'uploadImage'])->name('blogs.uploadImage');

    });
});

Route::get('/blogs-list', [\App\Http\Controllers\Api\BlogAPIController::class, 'index']);


require __DIR__.'/auth.php';
