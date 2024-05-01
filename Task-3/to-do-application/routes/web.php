<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class, 'index'])->name('index');
Route::post('/submit',[UserController::class , 'submit'])->name('submit'); 
Route::post('/delete/{id}',[UserController::class, 'delete']);