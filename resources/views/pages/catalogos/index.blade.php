@extends('index')
@section('title','componentes')
@section('content')
<div class="parallax-simple background_componentes">
    <div class="background-shadow-2 h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        {{-- <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
            <span class="card-contact p-2">Descargas</span>
        </p> --}}
        <div class="container mt-4">
            {{-- Catálogo 1 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 1</h3>
                <a href="{{ route('downloadFile',['calidad']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-1 container mt-3 cases-gallery-1">
                <a href="{{ asset('images/catalogos/catalogo_1/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_1/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_1/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_1/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_1/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_1/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_1/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-1">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-1">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 2 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 2</h3>
                <a href="{{ route('downloadFile',['clavijas']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-2 container mt-3 cases-gallery-2">
                <a href="{{ asset('images/catalogos/catalogo_2/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0007.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0007.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0008.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0008.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0009.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0009.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0010.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0010.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_2/0011.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_2/0011.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-2">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-2">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 3 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 3</h3>
                <a href="{{ route('downloadFile',['finder']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-3 container mt-3 cases-gallery-3">
                <a href="{{ asset('images/catalogos/catalogo_3/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0007.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0007.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0008.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0008.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0009.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0009.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0010.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0010.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0011.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0011.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0012.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0012.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0013.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0013.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0014.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0014.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0015.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0015.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_3/0016.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_3/0016.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-3">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-3">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 4 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 4</h3>
                <a href="{{ route('downloadFile',['moeller']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-4 container mt-3 cases-gallery-4">
                <a href="{{ asset('images/catalogos/catalogo_4/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0007.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0007.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0008.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0008.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0009.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0009.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0010.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0010.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0011.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0011.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0012.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0012.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0013.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0013.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0014.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0014.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_4/0015.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_4/0015.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-4">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-4">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 5 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 5</h3>
                <a href="{{ route('downloadFile',['componentes']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-5 container mt-3 cases-gallery-5">
                <a href="{{ asset('images/catalogos/catalogo_5/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_5/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_5/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_5/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_5/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_5/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_5/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-5">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-5">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 6 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 6</h3>
                <a href="{{ route('downloadFile',['energia']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-6 container mt-3 cases-gallery-6">
                <a href="{{ asset('images/catalogos/catalogo_6/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_6/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_6/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_6/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_6/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_6/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_6/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-6">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-6">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 7 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 7</h3>
                <a href="{{ route('downloadFile',['vitae']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-7 container mt-3 cases-gallery-7">
                <a href="{{ asset('images/catalogos/catalogo_7/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0007.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0007.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_7/0008.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_7/0008.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-7">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-7">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
            {{-- Catálogo 8 --}}
            <div class="row">
                <h3 class="text-white col-md-2">Catálogo 8</h3>
                <a href="{{ route('downloadFile',['proyectos']) }}" class="btn btn-primary col-md-2" style="color: white !important;">Descargar</a>
            </div>
            <div class="row slick-menu-pdf-8 container mt-3 cases-gallery-8">
                <a href="{{ asset('images/catalogos/catalogo_8/0001.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0002.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0002.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0003.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0003.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0004.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0004.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0005.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0005.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0006.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0006.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
                <a href="{{ asset('images/catalogos/catalogo_8/0007.jpg') }}">
                    <img src="{{ asset('images/catalogos/catalogo_8/0007.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                </a>
            </div>
            <div class="text-center text-white my-3">
                <button class="btn btn-primary prev-8">
                    <i class="fas fa-arrow-circle-left"></i>
                </button>
                <button class="btn btn-primary next-8">
                    <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection 