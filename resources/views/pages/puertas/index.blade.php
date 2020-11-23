@extends('index')
@section('title','puertas')
@section('content')
<div class="parallax-medium section1">
    <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">puertas</p>
        {{-- <a data-scroll href="#inicio" class="arrow_ancle">
            <div class="arrow bounce mt-5 mobile_arrow">
                <span class="fa fa-arrow-down fa-2x"></span>
            </div>
        </a> --}}
    </div>
</div>
<div class="parallax-simple background_puertas" id="inicio">
    <div class="background-shadow">
        <div class="container text-white">
            <div class="row">
                <h2 class="text-uppercase text-center col-md-12 mt-5 mb-4 display-5 font-weight-bold r2_mobile">últimos proyectos</h2>
                @foreach ($proyectos as $proyecto)
                    <div id="{{ $proyecto->id }}">
                        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-uppercase text-center">{{ $proyecto->title }}</h5>
                            <ul class="list-group list-group-flush col-md-6 pt-2">
                                @if($proyecto->title == 'centro oncológico hospital juárez de méxico, cdmx')
                                    <li class="list-group-item pl-0 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                                @elseif($proyecto->title == 'centro oncológico hospital central militar, cdmx')
                                    <li class="list-group-item pl-2 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                                @elseif($proyecto->title == 'centro oncológico de saltillo, saltillo coahuila')
                                    <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                                    <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                                    <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Medicina nuclear</li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-10 mx-auto my-5">
                            <div class="cases-gallery-3 row">
                                @foreach ($proyecto->images as $imagen)
                                    <a href="{{ asset($imagen->image_url) }}" class="col-md-4 mb-4">
                                        <img src="{{ asset($imagen->image_url) }}" class="img-fluid img-gallery" alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('layouts.menu-projects')
@endsection