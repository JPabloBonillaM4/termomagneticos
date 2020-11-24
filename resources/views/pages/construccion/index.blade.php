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
                {{-- @foreach ($proyectos as $proyecto)
                    <div class="row text-center" id="{{ $proyecto->id }}">
                        <h2 class="text-uppercase text-center col-md-12 mt-5 display-5 font-weight-bold r2_mobile">{{ $proyecto->title }}</h2>
                        <div class="col-md-12 my-5">
                            <div class="cases-gallery-4 row">
                                @foreach ($proyecto->images as $imagen)
                                    <a href="{{ asset($imagen->image_url) }}" class="col-md-3 mb-4">
                                        <img src="{{ asset($imagen->image_url) }}" class="img-fluid img-gallery" alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                @include('layouts.menu-circle-projects')
            </div>
        </div>
    </div>
{{-- @include('layouts.menu-projects') --}}
@endsection