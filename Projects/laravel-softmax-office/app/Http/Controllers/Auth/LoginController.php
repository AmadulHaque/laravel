<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');    
    }


    public function login(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        
        $creds = $request->only('email','password'); 
        if(Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('auth.login')->with(['type'=>'error','message'=>'Incorrect credentials']);
        } 
    }


    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('auth.login')->with(['type'=>'success','message'=>'Logout success!']);
    }


}
