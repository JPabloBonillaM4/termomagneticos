@extends('index')
@section('title','blindaje')
@section('content')
    <div class="parallax-simple titulo_blindaje">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
                <span class="card-contact p-2">blindajes</span>
            </p>
            <div class="container mt-2">
                {{-- <h2 class="text-uppercase text-white text-center col-md-12 pt-5 display-5 font-weight-bold r2_mobile">proyectos</h2> --}}
                @include('layouts.menu-circle-projects')
            </div>
        </div>
    </div>
    @include('pages.menus.radiaciones-menu')
    {{-- <div class="parallax-simple section_cases" id="inicio">
        <div class="background-shadow">
            
        </div>
    </div> --}}
{{-- @include('layouts.menu-projects') --}}
@endsection