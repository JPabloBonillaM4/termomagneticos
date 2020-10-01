@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-medium section1">
        <div class="text-white h-100 d-flex align-items-center justify-content-center">
            <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">proyectos específica media y baja tensión</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">elementa</h2>
            <div class="col-md-12 my-5">
                <div class="energy-gallery-1 row">
                    <a href="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/elementa_2.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/elementa_3.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/elementa_4.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">facultad de psicología buap</h2>
            <div class="col-md-12 my-5">
                <div class="energy-gallery-2 row">
                    <a href="{{ asset('images/casos-exito/buap_1.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/buap_1.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/buap_2.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/buap_2.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/buap_3.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/buap_3.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/buap_4.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/buap_4.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">oficinas y naves cantabrico</h2>
            <div class="col-md-12 my-5">
                <div class="energy-gallery-3 row">
                    <a href="{{ asset('images/casos-exito/cantabrico_1.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/cantabrico_1.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/cantabrico_2.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/cantabrico_2.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/cantabrico_3.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/cantabrico_3.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                    <a href="{{ asset('images/casos-exito/cantabrico_4.jpg') }}" class="col-md-3">
                        <img src="{{ asset('images/casos-exito/cantabrico_4.jpg') }}" class="img-fluid img-gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection