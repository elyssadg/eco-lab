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

    <style>
        ::-webkit-scrollbar {
            width: 0;
        }

        .text-multiline-3 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body class="relative">
    <nav class="w-screen">
        <div class="w-[85%] flex items-center justify-between mx-auto py-5">
            <a href="{{ url('/') }}">
                <img src="{{ Storage::url('assets/general/logo.png') }}" class="h-10 mr-3" alt="EcoLab" />
            </a>
            <div class="w-max flex gap-5 items-center">
                <a href="{{ url('/calculator') }}" class="text-subheading {{ (Request::route()->getName() == 'calculator') ? 'text-dark border-b-2 border-dark' : 'text-mid hover:text-dark hover:border-b-2 hover:border-dark' }} font-medium transition duration-500">
                    Calculator
                </a>
                <a href="{{ url('/forum') }}" class="text-subheading {{ (Request::route()->getName() == 'forum') ? 'text-dark border-b-2 border-dark' : 'text-mid hover:text-dark hover:border-b-2 hover:border-dark' }} font-medium transition duration-500">
                    Forum
                </a>
                
                @if (Auth::user())
                    <div id="profile" class="flex gap-2 items-center text-mid cursor-pointer">
                        <i id="profile-icon" class="fa fa-user transition-all duration-500"></i>
                        <p id="profile-name" class="text-subheading font-medium transition-all duration-500">Hi, {{ Auth::user()->username }}</p>
                        <a href="{{ url('/logout') }}" id="logout" class="text-subheading text-dark font-medium border-b-2 border-dark transition-all duration-500" style="display: none;">Logout</a>
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
    </nav>

    <div class="scroll-to-top fixed bottom-5 right-5 z-50 flex items-center rounded-full bg-mid w-max h-max hover:shadow-md hover:shadow-mid/25 cursor-pointer">
        <i class="fa fa-solid fa-arrow-up px-5 py-5 text-white"></i>
    </div>

    <section class="my-20">
        @yield('content')
    </section>

    <img src="{{ Storage::url('assets/general/intersect.png') }}" class="absolute top-0 right-0 -z-10 w-2/3 h-auto" alt="background">
</body>
<script>
    $(document).ready(function() {
        $('.scroll-to-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 'slow');
        });
    });

    @if (Auth::user())
        let profile = document.getElementById('profile');
        let name = document.getElementById('profile-name');
        let icon = document.getElementById('profile-icon');
        let logout = document.getElementById('logout');
        profile.addEventListener('mouseover', function() {
            name.style.display = 'none';
            icon.style.display = 'none';
            logout.style.display = 'block';
        });
        
        profile.addEventListener('mouseleave', function() {
            name.style.display = 'block';
            icon.style.display = 'block';
            logout.style.display = 'none';
        });
    @endif
</script>
</html>
