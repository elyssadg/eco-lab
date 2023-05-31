<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EcoLab</title>
    <link rel="icon" href="{{ asset('storage/assets/general/favicon.png') }}" type="image/x-icon">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <section class="flex h-screen">
        <div class="w-2/5 flex items-center">
            <img src="{{ Storage::url('assets/auth/login.png') }}" alt="">
        </div>
        <div class="w-3/5 flex flex-col gap-12 items-center justify-center bg-gradient-to-t from-mid/[0.3] via-mid/[0.23] to-mid/[0.15]">
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
                        <div class="absolute" style="right:10px; cursor:pointer;" onclick="show_and_hide()">
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
        </div>

        <script>
            var a = 0;
            function show_and_hide(){
                if(a == 1){
                    document.getElementById('password').type = 'password';
                    document.getElementById('eye-btn').classList.remove('fa-eye');
                    document.getElementById('eye-btn').classList.add('fa-eye-slash');
                    a = 0;
                } else {
                    document.getElementById('password').type = 'text';
                    document.getElementById('eye-btn').classList.remove('fa-eye-slash');
                    document.getElementById('eye-btn').classList.add('fa-eye');
                    a = 1;
                }
            }
        </script>
    </section>
</body>
</html>