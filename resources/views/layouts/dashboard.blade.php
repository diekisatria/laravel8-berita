<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="{{ url('/assets/images/logo.png') }}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="{{ url('/assets/fontawesome/css/all.min.css') }}" />

    <!-- fonts awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <!-- My CSs -->
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ url('/assets/js/trix.js') }}"></script>

    <title>My App || {{ $title }}</title>
    <style>

        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none; 
        }

    </style>
</head>

<body>

    @include('partials.navbar')



    @yield('container')



    <!-- footer -->
    <div class="container my-5">
        <div class="row">
            <p class="text-center text-muted font-2 mt-5 font-16">
                © Copyright LKP Utama Jaya 2023. All Rights Reserved
            </p>
        </div>
    </div>
    <!-- end footer -->

    <!-- Js Boostrap -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });

    </script>
</body>

</html>
