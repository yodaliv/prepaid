@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3">
                <div class="image-1-container">
                    <img src="{{ asset('frontend/img/works-image-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="image-2-container">
                    <img src="{{ asset('frontend/img/works-image-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="image-3-container">
                    <img src="{{ asset('frontend/img/works-image-3.png') }}" class="img-fluid" alt="">
                </div>
            </div>           
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="mobile-no intro-container">
                    <img src="{{ asset('frontend/img/phone-no.png') }}" class="img-fluid" alt="">
                    <a href="#">Enter your Mobile No</a>
                </div>
                <div class="select-service intro-container">
                    <img src="{{ asset('frontend/img/service.png') }}" class="img-fluid" alt="">    
                    <a href="#">Select Service</a>
                </div>
                <div class="enter-details intro-container">
                    <img src="{{ asset('frontend/img/details.png') }}" class="img-fluid" alt="">
                    <a href="#">Enter Details</a>
                </div>
                <div class="make-payment intro-container">
                    <img src="{{ asset('frontend/img/payment.png') }}" class="img-fluid" alt="">
                    <a href="#">Make Payment</a>
                </div>
                <div class="receipt intro-container">
                    <img src="{{ asset('frontend/img/receipt.png') }}" class="img-fluid" alt="">
                    <a href="#">Receipt</a>
                </div>                
            </div>
        </div>
    </div>
</section>
@endsection
