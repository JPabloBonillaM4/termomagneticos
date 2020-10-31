@extends('index')
@section('title','cristales')
@section('content')
<div class="parallax section1">
    <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">cristales</p>
        <a data-scroll href="#inicio" class="arrow_ancle">
            <div class="arrow bounce mt-5 mobile_arrow">
                <span class="fa fa-arrow-down fa-2x"></span>
            </div>
        </a>
    </div>
</div>
<div class="container" id="inicio">
    <div class="row text-center">
        <p class="text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">Hospital</p>
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