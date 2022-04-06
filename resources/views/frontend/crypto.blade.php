@extends('frontend.payment')

@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Buy/Sell Crypto
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="POST" action="{{ route('register') }}">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" name="service" id="service">
                                <option value="">Select Service(Buy/Sell)</option>
                            </select>
                            @error('service')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" name="cointype" id="cointype">
                                <option value="">If Buy Selection Coin Type(BTC/ETH/USDT)</option>
                                <option value="postpaid">Postpaid</option>
                                <option value="prepaid">Prepaid</option>
                            </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus placeholder="Enter Amount">

                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Enter Receiving Address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('name') }}" required autocomplete="email" autofocus placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <a href="#" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px">Continue to Recharge</a>
                    </div>
                </form>
            </div>                                                                                  
        </div>
        <div class="col-md-4">
            <div style="margin-top: 60px;">
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