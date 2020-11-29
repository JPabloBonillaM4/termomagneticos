@extends('index')
@section('title','Quienes somos')
@section('content')
    <div class="parallax section2" id="quienes_somos">
        <div class="h-100 dis-flex flex-column justify-content-center align-items-center background-shadow" style="margin-top: -5rem;">
            <div class="dis-flex justify-content-around w-100 align-items-center columnFlex">
                <img src="{{ asset('images/eaton-logo-1.png') }}" class="hide_on_mobile" alt="logo 3" style="max-width: 250px;">
                <h2 class="text-white text-uppercase display-5 title_2 text-center">¿quienes somos?</h2>
                <img src="{{ asset('images/logo-png-1.png') }}" class="hide_on_mobile" alt="logo 2" style="max-width: 250px;">
            </div>
            <div>
                <h4 class="text-white text-uppercase text-center col-md-6 m-auto r1_mobile line_mobile">empresa mexicana proveedores de servicios y productos especializados para el control de energía eléctrica y de las radiaciones</h4>
                @include('pages.menus.home-menu')
            </div>
        </div>
    </div>
@endsection