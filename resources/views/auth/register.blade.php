@extends('template.auth_layout')

@section('title')
    Sign Up
@endsection

@section('authentication_form')
    <div class="py-28 w-full flex flex-col justify-center items-center gap-12">
        <a href="{{ url('/') }}"><img src="{{ Storage::url('assets/general/logo.png') }}" class="h-10" alt=""></a>
        <h1 class="text-title text-mid font-bold">Hello</h1>
        <p class="text-name text-dark font-medium">Create a new account</p>
        <form class="w-8/12" action="/register" method="POST">
            {{ csrf_field() }}
            <div>
                <label for="full_name" class="text-name text-dark font-medium">Full Name</label>
                <div class="mt-2">
                    <input type="text" id="full_name" name="full_name" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Full Name">
                </div>
            </div>
    
            <div class="mt-5">
                <label for="username" class="text-name text-dark font-medium">Username</label>
                <div class="mt-2">
                    <input type="text" id="username" name="username" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Username">
                </div>
            </div>
    
            <div class="mt-5">
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
    
            <div class="mt-5">
                <label for="password_confirmation" class="text-name text-dark font-medium">Confirm Password</label>
                <div class="relative mt-2 flex items-center w-full">
                    <input type="password" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                    <div class="absolute" style="right:10px; cursor:pointer;" onclick="show_and_hide_confirm()">
                        <i id="eye-btn-confirm" class="fa fa-eye-slash text-dark"></i>
                    </div>
                </div>
            </div>
    
            <div class="mt-5">
                <label for="birthday" class="text-name text-dark font-medium">Birthday</label>
                <div class="mt-2">
                    <input type="date" id="birthday" name="birthday" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="dd/mm/yyyy">
                </div>
            </div>
    
            <div class="mt-5 flex gap-5">
                <label for="gender" class="text-name text-dark font-medium">Gender</label>
                <label class="text-name text-dark font-medium">
                    <input type="radio" name="gender" class="border-dark" value="male">
                    Male
                </label class="text-name text-dark font-medium">
    
                <label class="text-name text-dark font-medium">
                    <input type="radio" name="gender" class="border-dark" value="female">
                    Female
                </label>
            </div>

            @if ($errors->any())
                <div class="flex justify-center mt-5 text-name text-red-500 font-medium">
                    {{ $errors->first() }}
                </div>
            @endif
    
            <div class="mt-10 flex justify-center w-full">
                <button type="submit" class="w-full py-1.5 rounded bg-mid text-subheading font-medium text-white transition-all duration-200 hover:shadow-md hover:shadow-mid/25">Sign Up</button>
            </div>
        </form>
    
        <p class="mt-20 text-center text-subname text-dark font-normal">
            Already have an account?
            <a href="{{ url('/login') }}" class="text-subname text-mid font-semibold hover:text-dark hover:underline" type="button">Sign In</a>
        </p>
    </div>

    <script>
        var b = 0;
        function show_and_hide_confirm(){
            let password = document.getElementById('password_confirmation');
            let eye_button = document.getElementById('eye-btn-confirm');
            if(b == 1){
                password.type = 'password';
                eye_button.classList.remove('fa-eye');
                eye_button.classList.add('fa-eye-slash');
                b = 0;
            } else {
                password.type = 'text';
                eye_button.classList.remove('fa-eye-slash');
                eye_button.classList.add('fa-eye');
                b = 1;
            }
        }
    </script>
@endsection