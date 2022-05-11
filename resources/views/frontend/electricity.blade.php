@extends('frontend.payment')
<title>Prepaid | Electricity</title>
@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Buy Prepaid Electric Token or Pay Postpaid Bills.
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="get" action="{{ route('order') }}" id="order" name="order">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control" name="state" id="state" required autocomplete="state" autofocus >
                                <option value="">Select your state</option>
                                <option value="Abuja FCT">Abuja FCT</option>
                                <option value="Nassarawa">Nassarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Kogi">Kogi</option>
                                {{-- <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwa ibom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option> --}}
                            </select>
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <select class="form-control  @error('metertype') is-invalid @enderror" name="metertype" id="metertype" required autocomplete="metertype" autofocus >
                                <option value="">Select your meter type</option>
                                <option value="postpaid">Postpaid</option>
                                <option value="prepaid">Prepaid</option>
                            </select>
                            @error('metertype')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="text" class="form-control @error('meter_num') is-invalid @enderror" name="meter_num" id="meter_num" value="{{ old('meter_num') }}" required autocomplete="meter_num" autofocus placeholder="Enter Meter Number">

                            @error('meter_num')
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Enter Email(Optional)">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" name="phone" value="{{ $phone }}">
                    <input type="hidden" name="servicetype" value="electricity">
                    <div class="row justify-content-center mt-5">
                    <button type="submit" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px" >Continue to Recharge</button>
                    </div>
                </form>
            </div>                                                                                  
        </div>
        <div class="col-md-5">
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