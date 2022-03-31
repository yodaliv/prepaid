@extends('layouts.app')

@section('content')
<section id="about" class="py-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="color-black">Who We Are</h3>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
        </div>
        <h3 class="color-black text-center pt-5">Our Solutions</h3>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{ asset('frontend/img/five-peoples.png') }}" alt="logo" class="img-fluid wow animated fadeIn">
            </div>
        </div>
    </div>
</section>
@endsection
