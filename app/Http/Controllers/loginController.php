<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logingUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))) {   // seecond parameter is for remember me, by default
                                                                         // it is false, store password in cookie upto wee mannually logout
            return redirect()->route('customer.signin');
            
        }
        else{
            return redirect()->route('login')->with('error', 'Login details are not valid');
        }
       
    }
    public function logout(){
        Auth::logout();   //auth()->logout();
        return redirect()->route('login');
    }
}
