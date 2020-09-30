@extends('index')
@section('content')
    <div class="parallax section1">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <div>
                <h2 class="text-white text-uppercase text-center title">termomagnéticos y control de radiaciones</h2>
            </div>
        </div>
    </div>
    <div class="parallax section2">
        <div class="h-100 dis-flex flex-column justify-content-center align-items-center background-shadow">
            <div class="mb-4 dis-flex justify-content-around w-100 align-items-center columnFlex">
                <img src="{{ asset('images/logo-white_2.png') }}" class="mb-4 hide_on_mobile" alt="logo 3" style="max-width: 250px;">
                <h2 class="text-white text-uppercase display-5 title_2 mb-4 text-center">¿quienes somos?</h2>
                <img src="{{ asset('images/logo-white.jpg') }}" class="hide_on_mobile" alt="logo 2" style="max-width: 250px;">
            </div>
            <div>
                <h4 class="text-white text-uppercase text-center col-md-6 m-auto r1_mobile line_mobile">empresa mexicana proveedores de servicios y productos especializados para el control de energía eléctrica y de las radiaciones</h4>
            </div>
        </div>
    </div>
    <div class="parallax section3">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <div class="mb-4 dis-flex justify-content-around w-100 align-items-center columnFlex">
                <h2 class="text-white text-uppercase display-5 title_2 mb-4">filosofía</h2>
            </div>
            <div>
                <h4 class="text-white text-uppercase text-center col-md-8 m-auto r1_mobile line_mobile">nuestro compromiso es brindar soluciones integrales en energía, durante la instalación y puesta en marcha del sistema eléctrico, así como capacitación y el servicio especializado en las post-venta de los productos y soluciones manteniendo una comunicación técnica directa y constante</h4>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="col-md-12">
            <p class="display-4 text-center mb-4">Algunos de nuestros clientes</p>
        </div>
        <div class="col-md-12">
            <div class="container px-5 w-75">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/volkswagen_logo.jpg') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/sons_logo.jpg') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/walmart_logo.png') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/modelo_logo.jpg') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/sep_logo.png') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/saltillo_logo.png') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/audi_logo.jpg') }}" class="img_client" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/laquinta_logo.jpg') }}" class="img_client" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection