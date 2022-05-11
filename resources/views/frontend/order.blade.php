@extends('frontend.payment')
<title>Prepaid | Order Screen</title>
@section('content')
<section id="contact" class="py-2 container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center table-responsive-sm col-md-7">
                <table class="table border-collapse ">
                    <tbody style="text-align:left">
                        <tr>
                            <td style="font-weight:bold">REVIEW YOUR ORDER</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Vend Amount</td>
                            <td>₦ {{number_format($vend_amount, 0, '.', ',')}}</td>
                        </tr>
                        <tr>
                            <td>Service Charge</td>
                            <td>₦ {{number_format($service_charge, 0, '.', ',')}}</td>
                        </tr>
                        <tr>
                            <td>Gateway Charge</td>
                            <td>₦ {{number_format($gateway_charge, 0, '.', ',')}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Meter Number</td>
                            <td>{{$meter_no}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$name}}</td>
                        </tr>
                        <tr>
                            <td>Meter Type</td>
                            <td>{{$meter_type}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{$phone}}</td>
                        </tr>
                        <tr>
                            <td>Outstanding</td>
                            <td>{{$outstanding}}</td>
                        </tr>
                        <tr>
                            <td>Adress</td>
                            <td>{{$adress}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                Totle<br>₦ {{$summary}}
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-lg btn-continue" style="background: #0D9587; color:white" onclick="payment();" >PAY ₦ {{number_format($summary, 0, '.', ',')}}</button></td>
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
    
@section('scripts')
    <script>
        function payment() {
            $.ajax({
                type: "POST",
                cache: false,
                url : "{{route('payment')}}",
                data: {
                    _token:"{{ csrf_token() }}",
                    amount:{{$summary}},
                    payment_options:"card",
                    description:"description",
                    logo:"logo",
                    title:"title",
                    country:"{{$state}}",
                    currency:"",
                    email:"{{$email}}",
                    firstname:"{{$name}}",
                    lastname:"",
                    phonenumber:"{{$phone}}",
                    metertype:"{{$meter_type}}",
                    meterno:"{{$meter_no}}",
                },
                success: function(data) {
                    location.replace("{{ route('trans_detail') }}")
                },
                failure: function(data) {
                    alert(data);
                }
            });
        }
        function testHTTP() {
            $.ajax({
                type: "POST",
                cache: false,
                url : "https://api.kvg.com.ng/auth/demo",
                data: {
                    username:"d6296183c52b_demo",
                    password:'rg8kV1zpG0+KqFpS2*&r7^'
                },
                success: function(data) {
                    console.log(data);
                },
                failure: function(data) {
                    alert(data);
                }
            });
        }
    </script>
@endsection