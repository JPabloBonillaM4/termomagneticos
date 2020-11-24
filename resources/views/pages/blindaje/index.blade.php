@extends('index')
@section('title','blindaje')
@section('content')
    <div class="parallax-medium titulo_blindaje">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">blindajes</p>
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
                <h2 class="text-uppercase text-white text-center col-md-12 pt-5 display-5 font-weight-bold r2_mobile">proyectos</h2>
                {{-- @foreach ($proyectos as $proyecto)
                    <div class="row text-center" id="{{ $proyecto->id }}"
                        <p class="text-uppercase text-center col-md-12 mt-3 font-weight-bold">{{ $proyecto->title }}</p>
                        <div class="col-md-12 mb-5 mt-3">
                            <div class="cases-gallery-1 row m-auto">
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