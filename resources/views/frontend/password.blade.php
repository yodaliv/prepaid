@extends('frontend.payment')
<title>Prepaid | Password</title>
@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-capitalize font-24-bold mb-5 " style="visibility: visible; animation-name: fadeIn;">
                Profile
            </h3> 
            <div class="" id="electricity" role="tabpanel" aria-labelledby="electricity-tab">
                <form method="POST" action="{{ route('register') }}">
                <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="password" class="form-control @error('old') is-invalid @enderror" name="old" id="old" required autocomplete="old" autofocus placeholder="Enter currency password">

                            @error('old')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="password" class="form-control @error('new') is-invalid @enderror" name="new" id="new" required autocomplete="new" autofocus placeholder="Enter new password">

                            @error('new')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-lx-7">
                            <input type="password" class="form-control @error('confirm') is-invalid @enderror" name="confirm" id="confirm" required autocomplete="confirm" autofocus placeholder="Enter new password again">

                            @error('confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <button onclick="changePassword()" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px"> Change password </a>
                    </div>
                </form>
            </div>                                                                                  
        </div>
        <div class="col-md-4">
            <div style="margin-top: 70px;">
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
    <script>
        function changePassword(curPswd, newPswd) {
            if ($('#new').val() != $('#confirm').val()) {
                return;
            }
            $.ajax ({
                type: "POST",
                cache: false,
                url : "{{route('change-password')}}",
                data: {
                    _token:"{{ csrf_token() }}",
                    phone:"",
                    old: $('#old').val(),
                    new: $('#new').val(),
                    confirm: $('#confirm').val()
                },
                success: function(data) {
                    location.replace("{{ route('trans_detail') }}")
                },
                failure: function(data) {
                    alert(data);
                }

            });
        }
    </script>
</section>
@endsection