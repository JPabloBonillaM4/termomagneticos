@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-medium titulo_contruccion">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">construcción sistemas media y baja tensión</p>
            {{-- <a data-scroll href="#inicio" class="arrow_ancle">
                <div class="arrow bounce mt-5 mobile_arrow">
                    <span class="fa fa-arrow-down fa-2x"></span>
                </div>
            </a> --}}
        </div>
    </div>
    <div class="parallax-simple background_contruccion" id="inicio">
        <div class="background-shadow">
            <div class="container text-white">
                <div class="row text-center">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">energías limpias y sustentables</h2>
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
            </div>
        </div>
    </div>
@endsection