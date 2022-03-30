@extends('layouts.app')

@section('content')
<section id="home-section-1" class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
            <div class="phone-wrapper sm-align-center">
                <div class="phone-body">
                    <div class="speaker-hole"></div>
                    <div class="phone-screen"></div>
                    <div class="home-button"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 px-4 bg-white">
            <div class="row sm-mt-20px ">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-1 md-display-none">
                        </div>
                        <div class="col-11 border sm-magin-auto">
                            <h3 class="text-dark mb-2 font-16 color-primary pt-3">Low Cost</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 xs-mt-20px">
                    <div class="row">
                        <div class="col-1 md-display-none">
                        </div>
                        <div class="col-11 border sm-magin-auto">
                            <h3 class="text-dark mb-2 font-16 color-primary pt-3">Super Fast</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-1 md-display-none">
                        </div>
                        <div class="col-11 border sm-magin-auto">
                            <h3 class="text-dark mb-2 font-16 color-primary pt-3">Simple</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 xs-mt-20px">
                    <div class="row">
                        <div class="col-1 md-display-none">
                        </div>
                        <div class="col-11 border sm-magin-auto">
                            <h3 class="text-dark mb-2 font-16 color-primary pt-3">Trusted</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 ml-3">
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><img src="{{ asset('frontend/img/partner-1.jpeg') }}" alt="partners"
                                                          class="img-fluid home-social-icon  wow animated fadeInUp"></li>
                        <li class="list-inline-item"><img src="{{ asset('frontend/img/partner-2.jpeg') }}" alt="partners"
                                                          class="img-fluid home-social-icon  wow animated fadeInUp"></li>
                        <li class="list-inline-item"><img src="{{ asset('frontend/img/partner-3.jpeg') }}" alt="partners"
                                                          class="img-fluid home-social-icon  wow animated fadeInUp"></li>
                        <li class="list-inline-item"><img src="{{ asset('frontend/img/partner-4.jpeg') }}" alt="partners" class="img-fluid home-social-icon  wow animated fadeInUp"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
