@extends('index')
@section('title','blindaje')
@section('content')
    <div class="parallax-simple titulo_blindaje">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title mt-5 container r2_mobile">blindajes</p>
            <div class="container">
                <h2 class="text-uppercase text-white text-center col-md-12 pt-5 display-5 font-weight-bold r2_mobile">proyectos</h2>
                @include('layouts.menu-circle-projects')
                @include('pages.menus.radiaciones-menu')
            </div>
        </div>
    </div>
    {{-- <div class="parallax-simple section_cases" id="inicio">
        <div class="background-shadow">
            
        </div>
    </div> --}}
{{-- @include('layouts.menu-projects') --}}
@endsection