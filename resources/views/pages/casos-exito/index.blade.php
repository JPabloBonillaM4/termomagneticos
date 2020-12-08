@extends('index')
@section('title','casos de éxito')
@section('content')
    <div class="parallax-simple titulo_casos_exito">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center mt-4 container r2_mobile title_section">
                <span class="card-contact p-2">proyectos específica media y baja tensión</span>
            </p>
            <div class="container mt-4">
                @include('layouts.menu-circle-projects')
            </div>
        </div>
    </div>
    @include('pages.menus.ingenieria-menu')
@endsection