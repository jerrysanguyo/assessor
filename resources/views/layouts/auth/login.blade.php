<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/4f2d7302b1.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <style>
        body {
            background-color: #FAF9F6 !important;
        }
        
        /* .form-control {
            border: 1px solid #dc3545 !important; 
            box-shadow: none; 
        }

        .form-control:focus {
            border: 1px solid #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .input-group-text {
            border: 1px solid #dc3545;
        }

        .input-group .form-control:focus + .input-group-text {
            border-color: #dc3545;
        } */
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('specificSizeInputGroupPassword');
            const lockIcon = document.querySelector('.fa-lock');
            const unlockIcon = document.querySelector('.fa-unlock');

            unlockIcon.style.display = 'none';

            lockIcon.addEventListener('click', () => {
                passwordInput.type = 'text'; 
                lockIcon.style.display = 'none'; 
                unlockIcon.style.display = 'inline'; 
            });

            unlockIcon.addEventListener('click', () => {
                passwordInput.type = 'password'; 
                unlockIcon.style.display = 'none'; 
                lockIcon.style.display = 'inline'; // Show lock icon
            });
        });
    </script>
</head>
<body>
    <div class="container-fluid">
        <!-- Main Content -->
        <main class="col-lg-12">
            @yield('content')
        </main>
    </div>
</body>
</html>
