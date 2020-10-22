@extends('index')
@section('title','puertas')
@section('content')
<div class="parallax-medium section1">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-4 font-weight-bold r2_mobile text-center">puertas</p>
    </div>
</div>
<div class="parallax-simple background_puertas">
    <div class="background-shadow">
        <div class="container text-white">
            <div class="row">
                <h2 class="text-uppercase text-center col-md-12 mt-5 mb-4 display-5 font-weight-bold r2_mobile">últimos proyectos</h2>
                <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <h5 class="text-uppercase text-center">centro oncológico de saltillo, saltillo coahuila</h5>
                    <ul class="list-group list-group-flush col-md-6 pt-2">
                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Medicina nuclear</li>
                    </ul>
                </div>
                <div class="col-md-10 mx-auto my-5">
                    <div class="cases-gallery-1 row">
                        <a href="{{ asset('images/puertas/centro_ontologico_1.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/centro_ontologico_1.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/centro_ontologico_2.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/centro_ontologico_2.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/centro_ontologico_3.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/centro_ontologico_3.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/centro_ontologico_4.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/centro_ontologico_4.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <h5 class="text-uppercase text-center">centro oncológico hospital central militar, cdmx</h5>
                    <ul class="list-group list-group-flush col-md-6 pt-2">
                        <li class="list-group-item pl-2 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                    </ul>
                </div>
                <div class="col-md-10 mx-auto my-5">
                    <div class="cases-gallery-2 row">
                        <a href="{{ asset('images/puertas/ontologico_militar_1.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_militar_1.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/ontologico_militar_2.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_militar_2.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/ontologico_militar_3.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_militar_3.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/ontologico_militar_4.jpg') }}" class="col-md-3 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_militar_4.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <h5 class="text-uppercase text-center">centro oncológico hospital juárez de méxico, cdmx</h5>
                    <ul class="list-group list-group-flush col-md-6 pt-2">
                        <li class="list-group-item pl-0 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                    </ul>
                </div>
                <div class="col-md-10 mx-auto my-5">
                    <div class="cases-gallery-3 row">
                        <a href="{{ asset('images/puertas/ontologico_juarez_1.jpg') }}" class="col-md-4 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_juarez_1.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/ontologico_juarez_2.jpg') }}" class="col-md-4 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_juarez_2.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                        <a href="{{ asset('images/puertas/ontologico_juarez_3.jpg') }}" class="col-md-4 mb-4">
                            <img src="{{ asset('images/puertas/ontologico_juarez_3.jpg') }}" class="img-fluid img-gallery" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection