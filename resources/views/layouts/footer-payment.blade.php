<footer id="footer-styling" class="mt-3 background-primary" style="bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 mt-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-fluid wow animated fadeIn footer-logo">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-4 mt-5">
            <ul class="list-unstyled pt-3">
                    <li><a class="font-16-week color-white color-white" >2022 © Prepaid NG|Telsnet Comserve LTD</a></li>
                    <li><a class="font-16-week color-white" >All Right Reserved</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 mt-5">
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-4 mt-5">
                <ul class="list-unstyled pt-3">
                    <li><a class="font-16-week color-white color-white" href="{{route('terms')}}">Terms&Conditions</a></li>
                    <li><a class="font-16-week color-white" href="{{route('policy')}}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>