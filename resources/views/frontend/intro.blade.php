@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <h1 class="text-capitalize color-primary mb-5 wow fadeIn animated text-center">HOW IT WORKS</h1>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-lx-7">
                <img src="{{ asset('frontend/img/how-it-works-test.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-lx-5">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-1.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Select Your Country</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-2.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Enter Phone Number</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-3.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Enter Phone Number</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-4.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Complete Payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
