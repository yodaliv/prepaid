<header class="header-login-bg">
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-9 col-sm-9 col-md-9 col-lg-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-fluid wow animated fadeIn" style="width: 35%;">
                </a>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-8 col-lx-8">
                <nav class="navbar navbar-expand-lg navbar-dark montserrat-bold  wow animated fadeIn">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav text-uppercase">
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'how-it-works' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style" href="{{ route('how-it-works') }}">how we works <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'contact-us' ? 'active' : ''}}">
                                <a class="nav-link" href="{{ route('contact-us') }}">contact <span class="sr-only">(current)</span></a>
                            </li>
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
        </div>
    </div>
    <div class="container intro-text">
        <div class="row">
            <div class="offset-md-4"></div>
            <div class="col-md-8">
                <!--<h1 class="text-white text-uppercase montserrat-extrabold wow animated bounceIn">Recharge from anywhere</h1>-->
                <!--<h1 class="text-white text-uppercase montserrat-extrabold mb-4 wow animated bounceIn">in the world. Anytime.</h1>-->
                <!--<a href="#" class="btn header-btn-1 px-4 mr-2 montserrat-bold wow animated fadeInUp">get started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>-->
                <!--<a href="#" class="btn header-btn-2 montserrat-bold wow animated fadeInUp">login</a>-->
            </div>
        </div>
    </div>
</header>