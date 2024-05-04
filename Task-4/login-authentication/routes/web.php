<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'register'])->name('register');
Route::post('/signup',[UserController::class, 'signup'])->name('signup');

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/signin',[UserController::class, 'signin'])->name('signin');

Route::get('/welcome',[UserController::class, 'index'])->name('index');

Route::get('/logout',[UserController::class, 'logout'])->name('logout');