@extends('index')
@section('title','Ingeniería eléctrica')
@section('content')
    <div class="parallax titulo_ingenieria">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title container r2_mobile">ingeniería eléctrica</p>
            @include('pages.menus.ingenieria-menu')
        </div>
    </div>
@endsection