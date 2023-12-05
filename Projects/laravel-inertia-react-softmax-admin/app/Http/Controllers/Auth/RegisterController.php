<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisterController extends Controller
{
    
    public function vendorRegister()
    {
        return Inertia::render('auth/Register');    
    }



}