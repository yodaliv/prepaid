@extends('layouts.app')

@section('content')
<section id="contact" class="contact">
    <div class="container">
        <div class="faith-support-channel">
            <div class="faith">
                <h3 class="mb-3 font-24-bold">Faith</h3>
                <div class="faith-content">
                    <img src="{{ asset('frontend/img/avatar.png') }}" alt="logo" class="">
                    <div class="faith-content-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim in urna lacus, non in. Cras id amet id convallis diam, purus cursus. 
                    </div>
                </div>
                <div class="faith-content">                    
                    <div class="faith-content-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim in urna lacus, non in. Cras id amet id convallis diam, purus cursus. 
                    </div>
                    <img src="{{ asset('frontend/img/avatar.png') }}" alt="logo" class="">
                </div>
                <div class="faith-content">
                    <img src="{{ asset('frontend/img/avatar.png') }}" alt="logo" class="">
                    <div class="faith-content-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim in urna lacus, non in. Cras id amet id convallis diam, purus cursus. 
                    </div>
                </div>
                <div class="faith-content">                    
                    <a href="#" class="contact-support">Contact Support</a>
                </div>
            </div>
            <div class="support-channel">
                <div class="support-description">
                    <h3>Here at Prepaid,</h3>
                    <div class="support-text">
                        we care about, serving you. 
                        Enjoy our customer service and have your issues resolved anytime - day and night.
                    </div>
                </div>
                <div class="support-description">
                    <h3>Support Channels</h3>
                    <div class="support-text">
                        Choose from our available support channels
                    </div>
                </div>
                <div class="socials">
                    <div class="social-media">
                        <img src="{{ asset('frontend/img/whatsapp.png') }}" alt="logo" class="">
                        <h3>Whatsapp</h3>
                        <div class="support-text">Feel more connected as you relate to BuyPower like you would your best Buddy.</div>
                        <div class="chat-now">
                            <a href="#">Chat Now</a>
                        </div>                        
                    </div>  
                    <div class="social-media">
                        <img src="{{ asset('frontend/img/facebook.png') }}" alt="logo" class="">
                        <h3>Facebook</h3>
                        <div class="support-text">Get in touch even while you are catching up with your friends on Facebook.</div>
                        <div class="chat-now">
                            <a href="#">Chat Now</a>
                        </div>  
                    </div> 
                    <div class="social-media">
                        <img src="{{ asset('frontend/img/livechat.png') }}" alt="logo" class="">
                        <h3>Live Chat</h3>
                        <div class="support-text">Keep an eye out for our live chat bubble. We’re always available to meet your support needs.</div>
                        <div class="chat-now">
                            <a href="#">Chat Now</a>
                        </div>  
                    </div>           
                </div>
            </div>
        </div>
        <div class="get-in-touch-call">
            <div class="get-in-touch">
                Get in touch with Support
            </div>
            <div class="call">
                <a href="#" class="call-now">Call Now (909-353-3333-1)</a>
            </div>
        </div>
    </div>
</section>
@endsection
