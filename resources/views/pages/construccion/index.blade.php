@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-medium section1">
        <div class="text-white h-100 d-flex align-items-center justify-content-center">
            <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">construcción sistema media y baja tensión</p>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">energías limpias y sustentables</h2>
            <div class="col-md-12 my-5">
                <div class="cases-gallery-1 row">
                    <a href="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">redes eléctricas</h2>
            <div class="col-md-12 my-5">
                <div class="cases-gallery-2 row">
                    <a href="{{ asset('images/construccion/construccion_1.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_1.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/construccion/construccion_2.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_2.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/construccion/construccion_3.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_3.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    
                    <a href="{{ asset('images/construccion/construccion_4.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_4.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/construccion/construccion_5.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_5.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/construccion/construccion_6.jpg') }}" class="col-md-3 mb-4">
                        <img src="{{ asset('images/construccion/construccion_6.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection