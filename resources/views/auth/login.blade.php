@extends('template.auth_layout')

@section('title')
    Sign In
@endsection

@section('authentication_form')
    <img src="{{ Storage::url('assets/general/logo.png') }}" class="h-10" alt="">
    <h1 class="text-title text-mid font-bold">Welcome Back!</h1>
    <p class="text-name text-dark font-medium">Login to your account</p>
    <form class="w-8/12" action="/login" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="email" class="text-name text-dark font-medium">Email</label>
            <div class="mt-2">
                <input type="email" id="email" name="email" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Email" value="{{ Cookie::get('email_cookie') !== null ? Cookie::get('email_cookie') : '' }}">
            </div>
        </div>

        <div class="mt-5">
            <label for="password" class="text-name text-dark font-medium">Password</label>
            <div class="relative mt-2 flex items-center w-full">
                <input type="password" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" id="password" name="password" placeholder="Password">
                <div class="absolute" style="right:10px; cursor:pointer;" onclick="show_and_hide_password()">
                    <i id="eye-btn" class="fa fa-eye-slash text-dark"></i>
                </div>
            </div>
        </div>

        <div class="mt-10 flex items-center justify-center gap-2">
            <input class="rounded border-mid" type="checkbox" id="remember" name="remember">
            <label class="text-subname text-dark font-medium" for="remember">Remember Me</label>
        </div>

        <div class="mt-5 flex justify-center w-full">
            <button type="submit" class="w-full py-1.5 rounded bg-mid text-subheading font-medium text-white transition-all duration-200 hover:shadow-md hover:shadow-mid/25">Sign In</button>
        </div>
    </form>

    <p class="mt-20 text-center text-subname text-dark font-normal">
        Don’t have an account?
        <a href="{{ url('/register') }}" class="text-subname text-mid font-semibold hover:text-dark hover:underline" type="button">Sign Up</a>
    </p>
@endsection