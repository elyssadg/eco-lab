<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - EcoLab</title>
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
    <nav class="w-screen">
        <div class="w-[85%] flex items-center justify-between mx-auto py-5">
            <a href="{{ url('/') }}">
                <img src="{{ Storage::url('assets/general/logo.png') }}" class="h-10 mr-3" alt="EcoLab" />
            </a>
            <div class="w-max flex gap-5 items-center">
                <a href="{{ url('/calculator') }}" class="text-subheading text-mid font-medium hover:text-dark hover:border-b-2 hover:border-dark transition duration-500">
                    Calculator
                </a>
                <a href="{{ url('/forum') }}" class="text-subheading text-mid font-medium hover:text-dark hover:border-b-2 hover:border-dark transition duration-500">
                    Forum
                </a>
                @if (Auth::user())
                    <div id="profile" class="flex gap-2 items-center px-3 py-1 text-dark rounded cursor-pointer">
                        <i class="fa fa-user"></i>
                        <p class="text-subheading font-medium">Hi, {{ Auth::user()->username }}</p>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="px-5 py-1 text-subheading text-mid font-medium rounded border-2 border-mid hover:bg-mid hover:text-white hover:shadow-md hover:shadow-mid/25 transition duration-200">
                        Sign In
                    </a>
                    <a href="{{ url('/register') }}" class="px-5 py-1 text-subheading text-white bg-mid font-medium rounded border-2 border-mid hover:shadow-md hover:shadow-mid/25 transition duration-200">
                        Sign Up
                    </a>
                @endif
            </div>
        </div>
        @if (Auth::user())
            <div id="logout" class="w-[85%] mx-auto relative" style="display: none;">
                <a href="{{ url('/logout') }}" class="flex justify-center rounded absolute top-0 -translate-y-4 right-0 w-[154.34px] py-1 bg-white text-subheading text-mid font-medium border border-mid hover:bg-mid hover:text-white transition-all duration-200 cursor-pointer">Logout</a>
            </div>
        @endif
    </nav>

    <div class="scroll-to-top fixed bottom-5 right-5 z-50 flex items-center rounded-full bg-mid w-max h-max hover:shadow-md hover:shadow-mid/25 cursor-pointer">
        <i class="fa fa-solid fa-arrow-up px-5 py-5 text-white"></i>
    </div>

    @yield('content')
</body>
<script>
    $(document).ready(function() {
        $('.scroll-to-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 'slow');
        });
    });

    let profile = document.getElementById('profile');
    let logout = document.getElementById('logout');
    var clicked = 0;
    profile.addEventListener('click', function() {
        if (clicked == 0) {
            logout.style.display = 'block';
            clicked = 1;
        } else {
            logout.style.display = 'none';
            clicked = 0;
        }
    });
</script>
</html>