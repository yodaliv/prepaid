@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <h3 class="color-black text-center pt-4 font-24">Our Solutions</h3>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="icon-wrapper">
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/lamp-large.png') }}" alt="logo" class="img-fluid wow animated fadeIn">                            
                        </div>
                        <div class="feature-image-text">Prepaid Electricity</div>
                    </div>
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/phone-large.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                        </div>
                        <div class="feature-image-text">Air Time</div>
                    </div>
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/display1.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                        </div>
                        <div class="feature-image-text">Data</div>
                    </div>                    
                </div>
                <div class="icon-wrapper">
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/cable1.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                        </div>
                        <div class="feature-image-text">Cable Tv</div>
                    </div>
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/present1.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                        </div>
                        <div class="feature-image-text">Gift Card</div>
                    </div>
                    <div>
                        <div class="background-primary feature-items">
                            <img src="{{ asset('frontend/img/crypto1.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                        </div>
                        <div class="feature-image-text">Crypto</div>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div>
                    <img src="">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div>
                    <img src="">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div>
                    <img src="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
