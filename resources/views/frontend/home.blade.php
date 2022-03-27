@extends('layouts.app')

@section('content')
<section id="home-section-1" class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-lx-4 home-left-bg-styling">
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-lx-8 px-4 bg-white">
            <div class="row">
                <div class="col-12 col-6 col-md-6 col-lg-6 col-lx-6">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-11">
                            <h3 class="text-dark mb-2 font-16 color-primary">Low Cost</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-6 col-md-6 col-lg-6 col-lx-6">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-11">
                            <h3 class="text-dark mb-2 font-16 color-primary">Super Fast</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-6 col-md-6 col-lg-6 col-lx-6">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-11">
                            <h3 class="text-dark mb-2 font-16 color-primary">Simple</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-6 col-md-6 col-lg-6 col-lx-6">
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-11">
                            <h3 class="text-dark mb-2 font-16 color-primary">Trusted</h3>
                            <p class="color-gray text-left  wow animated fadeIn">Integer feugiat eros ut sapien auctor porta. Nulla vitae dolor quis elit porttitor lacinia a a felis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-10 mt-4">
                    <ul class="list-unstyled text-center">
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
