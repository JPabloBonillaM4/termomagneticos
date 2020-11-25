@extends('index')
@section('title','Filosofia')
@section('content')
    <div class="parallax-simple section3" id="filosofia">
        <div class="h-100 dis-flex flex-column justify-content-center align-items-center background-shadow">
            <div class="dis-flex justify-content-around w-100 align-items-center columnFlex mb-4">
                <h2 class="text-white text-uppercase display-5 title_2 text-center my-4">filosofía</h2>
            </div>
            <div>
                <h4 class="text-white text-uppercase text-center col-md-6 m-auto r1_mobile line_mobile">nuestro compromiso es brindar soluciones integrales en energía, durante la instalación y puesta en marcha del sistema eléctrico.<br />
                Así como capacitación y el servicio especializado en las post-venta de los productos y soluciones manteniendo una comunicación técnica directa y constante</h4>
                @include('pages.menus.home-menu')
            </div>
        </div>
    </div>
@endsection