<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Login</title>
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/styles/home.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')
    
        @yield('content')
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>