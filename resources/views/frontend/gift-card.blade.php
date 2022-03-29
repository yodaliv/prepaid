@extends('frontend.payment')

@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Pay And Activate Your Subscription
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="POST" action="{{ route('register') }}">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" name="service" id="service">
                                <option value="">Select Service</option>
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email(Optional)">

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
    </div>
</section>
@endsection