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
                            <select class="form-control" id="provider">
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
                            <select class="form-control" id="package">
                                <option value="">Select a package</option>
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
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone">

                            @error('phone')
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