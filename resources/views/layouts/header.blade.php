<header class="header-home-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 col-sm-9 col-md-9 col-lg-5 top-33px">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-fluid wow animated fadeIn header-logo">
                </a>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-6 col-lx-7 top-40px">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav">
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">Pricing <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">Features <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">FAQ <span class="sr-only">(current)</span></a>
                            </li>
                            <!-- <li class="nav-item {{Route::currentRouteName() === 'how-it-works' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('how-it-works') }}">how we works <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'contact-us' ? 'active' : ''}}">
                                <a class="nav-link" href="{{ route('contact-us') }}">contact <span class="sr-only">(current)</span></a>
                            </li> -->
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
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
            <img src="{{ asset('frontend/img/hand-phone-items.png') }}" alt="service" class="img-fluid wow animated fadeIn header-service">
            <div class="intro-text">
	            <div class="descrition">
	                <h3 class="text-white text-uppercase font-32">Recharge from anywhere in the world. Anytime.</h3>
	            </div>
	            <div class="row justify-content-center loginCheck ml-35px">
	                <form method="post" action="/" id="loginCheck" name="loginCheck">
	                    <p class="text-center">Enter Your Phone Number to begin</p>
	                    <input type="number" class="form-control font-20 m-h-btn" id="mobile_no" name="mobile" placeholder="Enter Your Mobile Number">
	                    <div id="res"></div>
	                    <a href="#" style="width: 100%;" class="background-pink btn text-uppercase px-5 py-3 mt-5px font-24 hvr-grow" onclick="submitForm();">Continue</a>
	                </form>
	            </div>
	        </div>
        </div>        
    </div>
</header>