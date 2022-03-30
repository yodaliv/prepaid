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

<header class="page-header background-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <div class="nav-var">
                    <div class="logo-wrapper lg-pt-33px">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/img/logo-green.png') }}" alt="logo" class=" wow animated fadeIn header-logo">
                        </a>
                    </div>
                    <div class="nav-wrapper">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 lg-pt-40px">
                            <nav class="navbar navbar-expand-lg navbar-dark">
                                <button class="navbar-toggler background-primary" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample07">
                                    <ul class="navbar-nav">
                                        <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-primary" href="{{ route('home') }}">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'pricing' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-primary" href="{{ route('pricing') }}">Pricing <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-primary" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'features' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-primary" href="{{ route('features') }}">Features <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'faq' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-primary" href="{{ route('faq') }}">FAQ <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item payment-header-phone-num {{Route::currentRouteName() === 'faq' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('faq') }}">909-353-3333-1 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <!-- <li class="nav-item {{Route::currentRouteName() === 'how-it-works' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style" href="{{ route('how-it-works') }}">how we works <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'contact-us' ? 'active' : ''}}">
                                            <a class="nav-link" href="{{ route('contact-us') }}">contact <span class="sr-only">(current)</span></a>
                                        </li> -->
                                        
                                        @auth
                                            <li class="nav-item">
                                                <a class="nav-link color-primary" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                    <span class="sr-only">(current)</span>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</header>
<section id="buy-renew">
    <div class="background-primary">
        <div class="container">
            <ul class="nav nav-tabs lg-pl-170px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'electricity' ? 'active' : '' }}" href="{{ route('electricity') }}">
                        <img src="{{ asset('frontend/img/lamp.png') }}" alt="electricity" class="img-fluid mb-3">
                        <br>
                        Electricity
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'mobile' ? 'active' : '' }}" href="{{ route('mobile') }}">
                        <img src="{{ asset('frontend/img/phone.png') }}" alt="phone" class="img-fluid mb-3">
                        <br>
                        Air Time
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'data' ? 'active' : '' }}" href="{{ route('data') }}">
                        <img src="{{ asset('frontend/img/display.png') }}" alt="display" class="img-fluid mb-3">
                        <br>
                        Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'cable' ? 'active' : '' }}" href="{{ route('cable') }}">
                        <img src="{{ asset('frontend/img/cable.png') }}" alt="cable" class="img-fluid mb-3">
                        <br>
                        Cable TV
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'gift-card' ? 'active' : '' }}" href="{{ route('gift-card') }}">
                        <img src="{{ asset('frontend/img/present.png') }}" alt="present" class="img-fluid mb-3">
                        <br>
                        Gift Card
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Route::currentRouteName() === 'crypto' ? 'active' : '' }}" href="{{ route('crypto') }}">
                        <img src="{{ asset('frontend/img/crypto.png') }}" alt="crypto" class="img-fluid mb-3">
                        <br>
                        Crypto
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container py-5">
        <div class="tab-content" id="myTabContent">
            @yield('content')
        </div>
    </div>
</section>
@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
