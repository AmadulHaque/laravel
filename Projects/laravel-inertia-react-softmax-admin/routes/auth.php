<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
 


// Registration
// Route::get('/vendor/register',[RegisterController::class,'vendorRegister'])->name('vendor.register');
Route::get('/vendor/register', function () {
    return Inertia::render('auth/Register');    
});
