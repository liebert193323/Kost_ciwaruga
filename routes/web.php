<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Route::resource('users', UserController::class); // Pastikan resource controller digunakan untuk menangani CRUD user
    Route::put('users/{user}/restore', [UserController::class, 'restore'])->name('users.restore');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

});
