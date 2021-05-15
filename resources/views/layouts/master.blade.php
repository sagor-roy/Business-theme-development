<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/main.css') }}">
</head>
<body>

@yield('content')

<script type="text/javascript" src="{{ asset('assets/login/js/main.js') }}"></script>
</body>
</html>
