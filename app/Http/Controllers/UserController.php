<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

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
    //login_api
    public function login_api(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // Retrieve the account based on the email
        $account = User::where([
            'email'=>$email,
        ])->first();
        if ($account && Hash::check($password,$account->password)) {
            // Credentials are valid, generate a token for the account
            $token = $account->createToken('user',['forum']);
            return [
                'token' => $token->plainTextToken
            ];
        }
        // Invalid credentials
        return ['error' => 'Invalid credentials'];
    }
    // Register View
    public function register(){
        return view('auth.register');
    }
    public function register_api(Request $request)
    {
        $account = User::create($request->all());
        if ($account) {
            // Credentials are valid, generate a token for the account
            $token = $account->createToken('user',['forum']);
            return ['token' => $token->plainTextToken];
        }
    }
    // Register Validation
    public function validate_register(Request $request){
        $validation = [
            'username' => 'required|unique:users|min:5',
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'gender'=> 'required|in:male,female',
            'birthday' => 'required|before:-15 years'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->full_name = $request->full_name;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->save();

        return view('auth.login');
    }

    // Logout
    public function logout(){
        Auth::logout();
        Session::forget('login_session');
        return redirect()->back();
    }
}
