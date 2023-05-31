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
    <nav id="navigation-bar" class="w-screen">
        <div class="w-full flex items-center justify-between mx-auto px-24 py-5">
            <a href="{{ url('/') }}">
                <img src="{{ Storage::url('assets/general/logo.png') }}" class="h-10 mr-3" alt="Flowbite Logo" />
            </a>
            <div class="w-max flex gap-5 items-center">
                <a href="{{ url('/calculator') }}" class="text-subheading text-mid font-medium hover:text-dark hover:border-b-2 hover:border-dark transition duration-500">
                    Calculator
                </a>
                <a href="{{ url('/forum') }}" class="text-subheading text-mid font-medium hover:text-dark hover:border-b-2 hover:border-dark transition duration-500">
                    Forum
                </a>
                <a href="{{ url('/login') }}" class="px-5 py-1 text-subheading text-mid font-medium rounded border-2 border-mid hover:bg-mid hover:text-white hover:shadow-md hover:shadow-mid/25 transition duration-200">
                    Sign In
                </a>
                <a href="{{ url('/register') }}" class="px-5 py-1 text-subheading text-white bg-mid font-medium rounded border-2 border-mid hover:shadow-md hover:shadow-mid/25 transition duration-200">
                    Sign Up
                </a>
            </div>
        </div>
    </nav>

    <div class="scroll-to-top fixed bottom-5 right-5 z-50 flex items-center rounded-full bg-mid w-max h-max hover:shadow-md hover:shadow-mid/25">
        <i class="fa fa-solid fa-arrow-up px-5 py-4 text-white"></i>
    </div>

    <section class="w-screen h-screen overflow-x-hidden">
        @yield('content')
    </section>
</body>
<script>
    $(document).ready(function() {
        $('.scroll-to-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        });
    });
</script>
</html>