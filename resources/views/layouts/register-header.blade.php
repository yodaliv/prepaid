<header class="home-header">
<title>Prepaid | Register</title>
    <img src="{{ asset('frontend/img/pink-mountain.png') }}" alt="logo" class="header-home-bg wow animated fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <div class="nav-var">
                    <div class="logo-wrapper lg-pt-33px">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class=" wow animated fadeIn header-logo res-image">
                        </a>
                    </div>
                    <div class="nav-wrapper">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 lg-pt-40px">
                        <nav class="navbar navbar-expand-lg navbar-dark justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse rounded nav-phone" id="navbarsExample07">
                                    <ul class="navbar-nav text-center">
                                        <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('home') }}">{{ __('Home') }} <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'pricing' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('pricing') }}">Pricing <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('about') }}">About <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'features' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('features') }}">Features <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'faq' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('faq') }}">FAQ <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item home-header-phone-num {{Route::currentRouteName() === 'faq' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style color-white" href="{{ route('faq') }}">909-353-3333-1 <span></span></a>
                                        </li>
                                        
                                        <!-- <li class="nav-item {{Route::currentRouteName() === 'how-it-works' ? 'active' : ''}}">
                                            <a class="nav-link nav-menu-style" href="{{ route('how-it-works') }}">how we works <span class="active-link"></span></a>
                                        </li>
                                        <li class="nav-item {{Route::currentRouteName() === 'contact-us' ? 'active' : ''}}">
                                            <a class="nav-link" href="{{ route('contact-us') }}">contact <span class="active-link"></span></a>
                                        </li> -->
                                        
                                        @auth
                                            <li class="nav-item">
                                                <a class="nav-link color-white" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                    <span class="active-link"></span>
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
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <img src="{{ asset('frontend/img/hand-phone-items.png') }}" alt="service" class="img-fluid wow animated fadeIn header-service md-display-none position-absolute bottom-0">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="description" style="padding-top: 30px;">
                            <h3 class="text-white text-uppercase lg-font-32 sm-font-32 xs-font-32">REGISTER</h3>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8 lg-ml-45px">
                        <div class="justify-content-center loginCheck">
                            <form method="post" action="{{route('register-user')}}" id="register" name="register" class="md-pt-20px">
                                @csrf
                                <input type="text" class="form-control lg-font-20 m-h-btn color-black" id="name" name="name" required autocomplete="name"  autofocus placeholder="Name">
                                <input type="text" class="form-control lg-font-20 m-h-btn color-black mt-5px" id="phone" name="phone" value="{{session('phone_no')}}" required autocomplete="phone"  autofocus placeholder="Phone">
                                <input type="text" class="form-control lg-font-20 m-h-btn color-black mt-5px" id="email" name="email" required autocomplete="email"  autofocus placeholder="Email Address">
                                <input type="password" class="form-control lg-font-20 m-h-btn color-black mt-5px" id="password" name="password" required autocomplete="password"  autofocus placeholder="Password">
                                <input type="password" class="form-control lg-font-20 m-h-btn color-black mt-5px" id="passwordconfirm" name="passwordconfirm" required autocomplete="passwordconfirm"  autofocus placeholder="Password repeat">
                                <div id="res"></div>  
                                <button style="background: #0F9588; color:white " class="btn px-5 py-3 mt-5px lg-font-24 md-font-15 hvr-grow btn-continue" onclick="register_user()">Register To Continue</button>
                            </form>
                        </div> 
                        <div class="justify-content-center">
                            <div class="md-pt-20px row">
                                <div class="col-3"></div>
                                <button onclick="history.back()" style="color: white;" class="background-pink btn  py-3 mt-5px lg-font-10 md-font-10 hvr-grow btn-continue col-6">Back To Login</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                    </div>
                </div>
	        </div>
        </div>        
    </div>
</header>
<script>
    function register_user() {
        pw = $('#password').val();
        pw1 = $('#passwordconfirm').val();
        if (pw && pw1 && pw != pw1) {
            alert('Password is not same Confirm password.');
            $('#passwordconfirm').val('');
        }
    }
</script>