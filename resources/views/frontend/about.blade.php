@extends('layouts.app')

@section('content')
<section id="about" class="py-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="color-black font-24">Who We Are</h3>
                <p class="font-16-week color-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
        </div>
        <div class="row pt-5">
             <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="{{ asset('frontend/img/english-words.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="color-black font-24">Our Mission</h3>
                <p class="font-16-week color-black">Our Mission Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
           
        </div>
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="color-black font-24">Our Approach</h3>
                <p class="font-16-week color-black">Our Mission Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="{{ asset('frontend/img/plan-controll.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
        </div>
        <h3 class="color-black text-center pt-5 font-24">Our Solutions</h3>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/lamp-turn-on.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Prepaid Electricity</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/telephone.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Air Time</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/man-tablet.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Data</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/remote-controller.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Cable TV</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/present-pink.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Gift Card</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/bitcoin-black.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
                <p class="color-black text-center font-16 pt-3">Crypto</p>
            </div>
        </div>
    </div>
</section>
@endsection
