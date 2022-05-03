@extends('frontend.payment')
<title>Prepaid | Admin</title>
@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex flex-column align-items-center table-responsive-sm">
                <table class="table border-collapse ">
                    <thead>                    
                        <tr>
                            <td>Your Transaction is sucessfully</td>
                            <td></td>
                            <td>3d...........7F4eof79487</td>
                            <td><button type="button" class="btn btn-outline-light">Print Receipt</button></td>
                        </tr>                    
                    </thead>
                    <tbody>
                        <tr>
                            <table style="margin-top: 0px;">
                                <tbody style="vertical-align: unset;">
                                    <tr>
                            <td>
                            <div >
                                <div>
                                <div class="enter-details intro-container">
                                        <a href="{{ route('profile') }}">Profile</a>
                                    </div>
                                    <div class="make-payment intro-container">
                                        <a href="#">Account Balance</a>
                                    </div>
                                    <div class="receipt intro-container">
                                        <a href="{{ route('transaction-history') }}">Transaction History</a>
                                    </div> 
                                    <div class="enter-details intro-container">
                                        <a href="{{ route('profile') }}">Mycards</a>
                                    </div>
                                    <div class="make-payment intro-container">
                                        <a href="#">Request Utility Bill</a>
                                    </div>
                                    <div class="receipt intro-container">
                                        <a href="{{ route('transaction-history') }}">Change Password</a>
                                    </div> 
                                </div>                                                                         
                            </td>
                            <td>
                                <table style="margin-left: 70;">
                                <tbody style="text-align:left">
                                <tr>
                                    <td style="font-weight:bold">Order details</td>
                                    <td></td>
                                    <td style="font-weight:bold">Respones</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>reference</td>
                                    <td>Ds453 7F4eof79487</td>
                                    <td>response</td>
                                    <td>Ds453 7F4eof79487</td>
                                </tr>
                                <tr>
                                    <td>paid at</td>
                                    <td>49.6kwh</td>
                                    <td>date</td>
                                    <td>28/03/2022-23.47.10</td>
                                </tr>
                                <tr>
                                    <td>taken</td>
                                    <td>$200.000</td>
                                    <td>vend amount</td>
                                    <td>$200.000</td>
                                </tr>
                                <tr>
                                    <td>service charge</td>
                                    <td>$2.000</td>
                                    <td>gateway chare</td>
                                    <td>$2.000</td>
                                </tr>
                                <tr>
                                    <td>discount</td>
                                    <td>$0.000</td>
                                    <td>debt</td>
                                    <td>$0.000</td>
                                </tr>
                                <tr>
                                    <td>total amount</td>
                                    <td>$500.000</td>
                                    <td>taken</td>
                                    <td>$500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-lg" style="background: #0D9587; color:white">Reoder</button>
                                    </td>
                                <tr>
                                </tbody>
                                </table>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection