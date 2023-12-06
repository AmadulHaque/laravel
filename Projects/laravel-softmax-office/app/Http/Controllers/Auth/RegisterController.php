<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');    
    }


    public function register(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }
        $data = $request->only('email','name'); 
        $data['password'] = Hash::make($request->password);
        User::create($data);

        return response()->json(['status'=>'200','url'=>route('auth.login')]);
       
    }


}


// Auth::guard('admin')->attempt($request->only('email', 'password'));