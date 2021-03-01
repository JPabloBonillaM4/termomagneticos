@extends('index')
@section('title','componentes')
@section('content')
<div class="parallax-simple background_componentes">
    <div class="background-shadow-2 h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        {{-- <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
            <span class="card-contact p-2">Catálogos</span>
        </p> --}}
        <div class="container mt-4">
            <div class="row slick-menu container">
                {{-- Catálogo 1 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_1/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 1</h5>
                            <a href="{{ route('downloadFile',['calidad']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 2 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_2/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 2</h5>
                            <a href="{{ route('downloadFile',['clavijas']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 3 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_3/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 3</h5>
                            <a href="{{ route('downloadFile',['finder']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 4 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_4/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 4</h5>
                            <a href="{{ route('downloadFile',['moeller']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 5 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_5/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 5</h5>
                            <a href="{{ route('downloadFile',['componentes']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 6 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_6/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 6</h5>
                            <a href="{{ route('downloadFile',['energia']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 7 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_7/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 7</h5>
                            <a href="{{ route('downloadFile',['vitae']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
                {{-- Catálogo 8 --}}
                <div class="col-md-4 text-center mt-2 p-3">
                    <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                        <div class="animationScale d-flex justify-content-center">
                            <img src="{{ asset('images/catalogos/catalogo_8/0001.jpg') }}" class="card-img-top img-gallery-2" alt="img_componente">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title container">Catálogo 8</h5>
                            <a href="{{ route('downloadFile',['proyectos']) }}" class="btn btn-primary" style="color: white !important;">Descargar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white my-5">
                <button class="btn btn-primary prev">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection 