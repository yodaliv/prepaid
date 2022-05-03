@extends('frontend.payment')
<title>Prepaid | Transaction History</title>
@section('content')
<section id="contact" class="py-2 container">  
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="enter-details intro-container ">
                <img src="{{ asset('frontend/img/profile3.png') }}" class="img-fluid" alt="">
                <a href="{{ route('profile') }}">Profile</a>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="make-payment intro-container ">
                <img src="{{ asset('frontend/img/balance.png') }}" class="img-fluid" alt="">
                <a href="#">Account Balance</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="receipt intro-container ">
                <img src="{{ asset('frontend/img/tranjaction.png') }}" class="img-fluid" alt="">
                <a href="{{ route('transaction-history') }}">Transaction History</a>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center">
        <div class="transaction-history col-md-12">
            <form method="POST" action="{{ route('register') }}" class="d-flex justify-content-between">                    
                <div class="search-content">
                    <input type="text" class="form-control" name="search" id="search" value="{{ old('search') }}" required autocomplete="search" autofocus placeholder="Search here">                           
                </div>                     
                <div class="search-btn">
                    <a href="#" class="background-primary text-capitalize btn font-16 text-white px-4 py-3 border-radius-5px">
                        <i class="fa fa-search"></i>
                        Search
                    </a>
                </div>
            </form>
        </div>
    </div>  
    <div class="row justify-content-center">
        <div class="col-md-12 table-responsive-sm">
            <table class="table border-collapse">
                <thead>                    
                    <tr>
                        <td>Type</td>
                        <td>Time & Date</td>
                        <td>Order Number</td>
                        <td>Details</td>
                        <td>Amount</td>
                        <td>Receipt</td>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                        <td><i class="fa fa-download" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-arrow-right"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection