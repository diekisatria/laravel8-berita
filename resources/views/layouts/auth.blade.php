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

    <title>My App || {{ $title }}</title>
</head>

<body>
  



    @yield('container')



    <!-- Js Boostrap -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
