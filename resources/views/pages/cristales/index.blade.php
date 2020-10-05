@extends('index')
@section('title','cristales')
@section('content')
<div class="parallax-medium section1">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">cristales</p>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <p class="text-center col-md-12 mt-3 font-weight-bold">Hospital</p>
        <div class="col-md-12 mb-5 mt-3">
            <div class="cases-gallery-1 row w-75 m-auto">
                <a href="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
                <a href="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="col-md-4 mb-4">
                    <img src="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="img-fluid img-gallery" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection