@extends('index')
@section('content')
    <div class="parallax section1">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <h1 class="text-white text-uppercase text-center title adjust_title container">termomagnéticos y control de radiaciones S.A de C.V</h1>
            {{-- <a data-scroll href="#quienes_somos" class="arrow_ancle">
                <div class="arrow bounce mt-5 mobile_arrow">
                    <span class="fa fa-arrow-down fa-2x"></span>
                </div>
            </a> --}}
            @include('pages.menus.home-menu')
        </div>
    </div>
@endsection