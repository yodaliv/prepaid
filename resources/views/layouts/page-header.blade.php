<header class="page-header background-primary">
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-9 col-sm-9 col-md-9 col-lg-5 py-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-fluid wow animated fadeIn header-logo">
                </a>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-6 col-lx-7 lg-pt-40px">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav">
                            <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style color-white" href="{{ route('home') }}">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'pricing' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style color-white" href="{{ route('pricing') }}">Pricing <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style color-white" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'features' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style color-white" href="{{ route('features') }}">Features <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Route::currentRouteName() === 'faq' ? 'active' : ''}}">
                                <a class="nav-link nav-menu-style color-white" href="{{ route('faq') }}">FAQ <span class="sr-only">(current)</span></a>
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
        </div>
    </div>
</header>