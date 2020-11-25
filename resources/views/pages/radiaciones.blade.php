@extends('index')
@section('title','Física de radiaciones')
@section('content')
    <div class="parallax titulo_tableros">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title container r2_mobile">física de radiaciones</p>
            @include('pages.menus.radiaciones-menu')
        </div>
    </div>
@endsection