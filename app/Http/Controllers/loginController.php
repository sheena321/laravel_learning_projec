<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

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
        // $customer=Customer::where('email','kesu@kk.com')->first();
        // info($credentials);
        // info(Auth::attempt($credentials));
        // info([
        //     'Entered Password' => $request->password,
        //     'Hashed Password in DB' => $customer->password,
        //     'Password Match' => Hash::check($request->password, $customer->password)
        // ]);
    // if(Auth()->check()){
        if (Auth::attempt($credentials)) {   // seecond parameter is for remember me, by default
            // it is false, store password in cookie upto wee mannually logout
            return redirect()->route('customer.signin');

        }
        else{
            return redirect()->route('login')->with('error', 'Login details are not valid');
        }

    // }else{
    //     return redirect()->route('login')->with('error', 'Login details are not valid');

    // }
        
       
    }
    public function logout(){
        Auth::logout();   //auth()->logout();
        return redirect()->route('login');
    }

    public function userlist(Request $request){
        $users = User::all();
        return view('user_list', compact('users'));
    }
}
