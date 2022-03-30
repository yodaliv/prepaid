<footer id="footer-styling" class="mt-3 background-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-fluid wow animated fadeIn footer-logo">
                </a>
                <ul class="list-unstyled pt-3 border-top">
                    <li><a class="font-16-week" href="">2022 © Prepaid NG</a></li>
                    <li><a class="font-16-week" href="">Telsnet Comserve LTD</a></li>
                    <li><a class="font-16-week" href="">All Right Reserved</a></li>
                </ul>
                <ul class="list-unstyled">
                    <li class="list-inline-item">
                        <img src="{{ asset('frontend/img/facebook-social-icon.png') }}" alt="facebook" class="img-fluid home-social-icon  wow animated fadeInUp">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('frontend/img/twitter-social-icon.png') }}" alt="twitter" class="img-fluid home-social-icon  wow animated fadeInUp">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('frontend/img/gmail-social-icon.png') }}" alt="" class="img-fluid home-social-icon  wow animated fadeInUp">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('frontend/img/instgram-social-icon.png') }}" alt="" class="img-fluid home-social-icon  wow animated fadeInUp">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('frontend/img/whatsapp-social-icon.png') }}" alt="" class="img-fluid home-social-icon  wow animated fadeInUp">
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 lg-mt-50px md-mt-124px sm-mt-50px">
                <h3 class="lg-font-20 color-white">Solution</h3>
                <ul class="list-unstyled pt-3 border-top">
                    <li><a class="font-16-week" href="">Prepaid Electricity</a></li>
                    <li><a class="font-16-week" href="">Air time</a></li>
                    <li><a class="font-16-week" href="">Data</a></li>
                    <li><a class="font-16-week" href="">Cable TV</a></li>
                    <li><a class="font-16-week" href="">Gift Card</a></li>
                    <li><a class="font-16-week" href="">Crypto</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 lg-mt-50px md-mt-50px">
                <h3 class="lg-font-20 color-white">Customer Care</h3>
                <ul class="list-unstyled pt-3 border-top">
                    <li><a class="font-16-week" href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li><a class="font-16-week" href="{{ route('how-it-works') }}">How It Works</a></li>
                    <li><a class="font-16-week" href="{{ route('home') }}">FAQ</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 lg-mt-50px md-mt-50px">
                <h3 class="lg-font-20 color-white">Legal</h3>
                <ul class="list-unstyled pt-3 border-top">
                    <li><a class="font-16-week" href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a class="font-16-week" href="{{ route('policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>