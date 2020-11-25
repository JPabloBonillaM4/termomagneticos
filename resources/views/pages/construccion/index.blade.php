@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-simple titulo_contruccion">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="mt-5 text-white text-uppercase text-center title container r2_mobile">construcción sistemas media y baja tensión</p>
            <div class="container text-white mt-5">
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
                @include('pages.menus.ingenieria-menu')
            </div>
        </div>
    </div>
    {{-- <div class="parallax-simple background_contruccion" id="inicio">
        <div class="background-shadow">
            
        </div>
    </div> --}}
{{-- @include('layouts.menu-projects') --}}
@endsection