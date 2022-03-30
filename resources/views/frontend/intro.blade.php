@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <img src="{{ asset('frontend/img/how-it-works-test.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-1.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Enter your Mobile No</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-2.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Select Service</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-3.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Enter Details</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-4.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Make Payment</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/how-we-works-right-icon-4.png') }}" alt="" class="img-fluid my-3">
                    </div>
                    <div class="col-9 justify-content-center">
                        <div class="h-100 align-items-center d-flex text-left">
                            <p class="color-primary">Receipt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
