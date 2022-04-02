@extends('frontend.payment')

@section('content')
<section id="contact" class="py-2 container">
    <div class="row justify-content-center">
        <div class="col-md-12">         
            <div class="transaction-history">
                <form method="POST" action="{{ route('register') }}" class="d-flex justify-content-between">                    
                    <div class="search-content">
                        <input type="text" class="form-control" name="amount" id="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus placeholder="Search here">                           
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
        <div class="col-md-12">
            <table class="table border-collapse">
                <thead>                    
                    <tr>
                        <td>Data</td>
                        <td>Order No</td>
                        <td>Customer ID</td>
                        <td>Amount</td>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                    <tr>
                        <td>28/03/2022 - 23.47.10</td>
                        <td>3d...........7F4eof79487</td>
                        <td>jamaila 7F4eof79487</td>
                        <td>$500.55</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection