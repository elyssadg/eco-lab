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
    <section class="flex h-max min-h-screen">
        <div class="fixed top-1/2 -translate-y-1/2 w-2/5 flex items-center">
            <img src="{{ Storage::url('assets/auth/login.png') }}" alt="">
        </div>
        <div class="ml-[40%] w-3/5 flex flex-col gap-12 items-center justify-center bg-gradient-to-t from-mid/[0.3] via-mid/[0.23] to-mid/[0.15]">
            @yield('authentication_form')
        </div>

        <script>
            var a = 0;
            function show_and_hide_password(){
                let password = document.getElementById('password');
                let eye_button = document.getElementById('eye-btn');
                if(a == 1){
                    password.type = 'password';
                    eye_button.classList.remove('fa-eye');
                    eye_button.classList.add('fa-eye-slash');
                    a = 0;
                } else {
                    password.type = 'text';
                    eye_button.classList.remove('fa-eye-slash');
                    eye_button.classList.add('fa-eye');
                    a = 1;
                }
            }
        </script>
    </section>
</body>
</html>