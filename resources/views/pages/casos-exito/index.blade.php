@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-medium titulo_casos_exito">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">proyectos específica media y baja tensión</p>
            {{-- <a data-scroll href="#inicio" class="arrow_ancle">
                <div class="arrow bounce mt-5 mobile_arrow">
                    <span class="fa fa-arrow-down fa-2x"></span>
                </div>
            </a> --}}
        </div>
    </div>
    <div class="parallax-simple section_cases" id="inicio">
        <div class="background-shadow">
            <div class="container">
                <div class="row text-center">
                    <h2 class="text-white text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">elementa</h2>
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
                    <h2 class="text-white text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">facultad de psicología buap</h2>
                    <div class="col-md-12 my-5">
                        <div class="cases-gallery-2 row">
                            <a href="{{ asset('images/casos-exito/buap_1.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/buap_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/buap_2.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/buap_2.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/buap_3.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/buap_3.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/buap_4.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/buap_4.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <h2 class="text-white text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">oficinas y naves cantabrico</h2>
                    <div class="col-md-12 my-5">
                        <div class="cases-gallery-3 row">
                            <a href="{{ asset('images/casos-exito/cantabrico_1.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cantabrico_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cantabrico_2.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cantabrico_2.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cantabrico_3.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cantabrico_3.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cantabrico_4.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cantabrico_4.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <h2 class="text-white text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">almacén con oficinas cervezas modelo en hermosillo</h2>
                    <div class="col-md-12 my-5">
                        <div class="cases-gallery-4 row">
                            <a href="{{ asset('images/casos-exito/cervezeras_1.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_2.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_2.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_3.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_3.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_4.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_4.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_5.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_5.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_6.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_6.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_7.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_7.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_8.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_8.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_9.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_9.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_10.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_10.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_11.jpeg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_11.jpeg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_12.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_12.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_13.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_13.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_14.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_14.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_15.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_15.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_16.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_16.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_17.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_17.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_18.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_18.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_19.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_19.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_20.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_20.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_21.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_21.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_22.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_22.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_23.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_23.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_24.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_24.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>

                            <a href="{{ asset('images/casos-exito/cervezeras_25.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_25.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_26.jpg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_26.jpg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                            <a href="{{ asset('images/casos-exito/cervezeras_27.jpeg') }}" class="col-md-3 mb-4">
                                <img src="{{ asset('images/casos-exito/cervezeras_27.jpeg') }}" class="img-fluid img-gallery" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection