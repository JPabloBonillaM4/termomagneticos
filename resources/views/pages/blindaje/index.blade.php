@extends('index')
@section('title','tableros')
@section('content')
<div class="parallax-medium section1">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-4 font-weight-bold r2_mobile text-center">blindajes</p>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <h2 class="text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">proyectos</h2>
        <p class="text-uppercase text-center col-md-12 mt-3 font-weight-bold">hospital</p>
        <div class="col-md-12 mb-5 mt-3">
            <div class="cases-gallery-1 row m-auto">
                <a href="{{ asset('images/blindaje/blindaje_1.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_1.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_2.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_2.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_3.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_3.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_4.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_4.webp') }}" class="img-fluid img-gallery" alt="">
                </a>

                <a href="{{ asset('images/blindaje/blindaje_5.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_5.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_6.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_6.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_7.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_7.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_8.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_8.webp') }}" class="img-fluid img-gallery" alt="">
                </a>

                <a href="{{ asset('images/blindaje/blindaje_9.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_9.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_10.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_10.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_11.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_11.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_12.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_12.webp') }}" class="img-fluid img-gallery" alt="">
                </a>

                <a href="{{ asset('images/blindaje/blindaje_13.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_13.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_14.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_14.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_15.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_15.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/blindaje/blindaje_16.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_16.webp') }}" class="img-fluid img-gallery" alt="">
                </a>

                <a href="{{ asset('images/blindaje/blindaje_17.webp') }}" class="col-md-3 mb-4">
                    <img src="{{ asset('images/blindaje/blindaje_17.webp') }}" class="img-fluid img-gallery" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection