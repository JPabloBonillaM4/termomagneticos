@extends('index')
@section('title','Quienes somos')
@section('content')
    <div class="py-4 row" id="clientes">
        <div class="col-md-12">
            <p class="display-4 text-center">Algunos de nuestros clientes</p>
        </div>
        <div class="col-md-12 pb-5 mb-5">
            <div class="container w-75">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/volkswagen_logo.jpg') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/sons_logo.jpg') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/walmart_logo.png') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/modelo_logo.jpg') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/sep_logo.png') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/saltillo_logo.png') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/audi_logo.jpg') }}" class="img_client img-effect" alt="">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="{{ asset('images/seccion_inicio/laquinta_logo.jpg') }}" class="img_client img-effect" alt="">
                    </div>
                </div>
            </div>
        </div>
        @include('pages.menus.home-menu')
    </div>
@endsection