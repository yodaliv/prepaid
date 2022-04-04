<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" >
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
    @if (Route::currentRouteName() === 'home' || Route::currentRouteName() === null )
        @include('layouts.home-header')
    @elseif (Route::currentRouteName() === 'home1')
        @include('layouts.home1-header')
    @elseif (Route::currentRouteName() === 'home2')
        @include('layouts.home2-header')
    @elseif (Route::currentRouteName() === 'home3')
        @include('layouts.home3-header')
    @elseif (Route::currentRouteName() === 'home4')
        @include('layouts.home4-header')
<<<<<<< HEAD
    @elseif (Route::currentRouteName() === 'register')
        @include('layouts.register-header')
=======
    @elseif (Route::currentRouteName() === 'home5')
        @include('layouts.home5-header')
>>>>>>> e0e559b5b84997868a22ea8b06599ebdd2307ea5
    @else
        @include('layouts.page-header')
    @endif
        @yield('content')
    @include('layouts.footer')
</body>
</html>
