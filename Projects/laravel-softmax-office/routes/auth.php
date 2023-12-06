<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/auth/register',[RegisterController::class,'index'])->name('auth.register');
Route::post('/auth/register',[RegisterController::class,'register'])->name('auth.register.post');
Route::get('/auth/login',[LoginController::class,'index'])->name('auth.login');
Route::post('/auth/login',[LoginController::class,'login'])->name('auth.login.post');