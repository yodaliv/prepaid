@extends('frontend.payment')
<title>Prepaid | Mobile</title>
@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Buy Airtime.
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="get" action="{{ route('order') }}" id="order" name="order">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" id="network" name="network" required autocomplete="network" autofocus >
                                <option value="">Select Network</option>
                                <option value="MTN">MTN</option>
                                <option value="Etisalat">Etisalat</option>
                                <option value="Airtel">Airtel</option>
                                <option value="Smile">Smile</option>
                                <option value="Spectranet">Spectranet</option>
                            </select>
                            @error('network')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('mobile_num') is-invalid @enderror" name="mobile_num" id="mobile_num" value="{{ old('mobile_num') }}" required autocomplete="mobile_num" autofocus placeholder="Mobile Number">

                            @error('mobile_num')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus placeholder="Amount">

                            @error('amount')
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
                    <input type="hidden" name="servicetype" value="phone">
                    <div class="row justify-content-center mt-5">
                    <button type="submit" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px" >Continue to Recharge</button>
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