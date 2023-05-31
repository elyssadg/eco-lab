<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // Login View
    public function login(){
        return view('auth.login');
    }

    // Login Validation
    public function validate_login(Request $request){
        // Input
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Remember Me
        $remember = $request->remember;
        
        // Valid
        if(Auth::attempt($credentials, true)){
            if($remember){
                Cookie::queue('email_cookie', $request->email, 7);
                Session::put('login_session', $credentials);
            }else{
                Cookie::queue('email_cookie', null);
                Session::put('login_session', null);
            }
            return redirect('/');
        }
        
        // Not Valid
        return redirect()->back();
    }

    // Logout
    public function logout(){
        Auth::logout();
        Session::forget('login_session');
        return redirect()->back();
    }
}
