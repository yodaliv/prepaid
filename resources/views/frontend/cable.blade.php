@extends('frontend.payment')
<title>Prepaid | Cable TV</title>
@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Pay And Activate Your Subscription
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="get" action="{{ route('order') }}" id="order" name="order">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" id="provider" required autocomplete="provider" autofocus >
                                <option value="">Select a provider</option>
                                <option value="dstv">DSTV</option>
                                <option value="gotv">GoTV</option>
                                <option value="startimes">Startimes</option>
                            </select>
                            @error('provider')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" id="package" required autocomplete="package" autofocus >
                                <option value="">Select a package</option>
                                <option value="">package1</option>
                                <option value="">package2</option>
                            </select>
                            @error('package')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('card_num') is-invalid @enderror" name="card_num" id="card_num" value="{{ old('card_num') }}" required autocomplete="card_num" autofocus placeholder="Enter Smartcard No.">

                            @error('card_num')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('phone1') is-invalid @enderror" name="phone1" id="phone1" value="{{ old('phone1') }}" required autocomplete="phone1" autofocus placeholder="Phone">

                            @error('phone1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email(Optional)">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" name="phone" value="{{ $phone }}">
                    <input type="hidden" name="servicetype" value="cable">
                    <div class="row justify-content-center mt-5">
                    <button type="submit" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px" >Continue to Activate</button>
                    </div>
                </form>
            </div>                                                                                  
        </div>
        <div class="col-md-4">
            <div style="margin-top: 100px;">
                <div class="enter-details intro-container">
                    <img src="{{ asset('frontend/img/profile3.png') }}" class="img-fluid" alt="">
                    <a href="{{ route('profile') }}">Profile</a>
                </div>
                <div class="make-payment intro-container">
                    <img src="{{ asset('frontend/img/balance.png') }}" class="img-fluid" alt="">
                    <a href="#">Account Balance</a>
                </div>
                <div class="receipt intro-container">
                    <img src="{{ asset('frontend/img/tranjaction.png') }}" class="img-fluid" alt="">
                    <a href="{{ route('transaction-history') }}">Transaction History</a>
                </div> 
            </div>                                                                         
        </div>
    </div>
</section>
@endsection