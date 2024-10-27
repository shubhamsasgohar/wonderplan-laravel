<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/firebase-users', [UserController::class, 'listUsers'])->name('firebase-users');
Route::get('/read-pb-file', [FileController::class, 'readPbFile'])->name('read.pb.file');

Route::get('/get-file-from-gcs-direct', [FileController::class, 'getFileFromGcsDirect'])->name('get.file.from.gcs.direct');
