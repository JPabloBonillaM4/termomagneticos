@extends('index')
@section('title','puertas')
@section('content')
<div class="parallax-simple section1">
    <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        <p class="text-white text-uppercase text-center title mt-5 container r2_mobile">puertas</p>
        <div class="container text-white">
            <h2 class="text-uppercase text-center col-md-12 pt-5 mb-4 display-5 font-weight-bold r2_mobile">últimos proyectos</h2>
            @include('layouts.menu-circle-projects')
        </div>
    </div>
</div>
{{-- <div class="parallax-simple background_puertas" id="inicio">
    <div class="background-shadow">
        
    </div>
</div> --}}
{{-- @include('layouts.menu-projects') --}}
@endsection