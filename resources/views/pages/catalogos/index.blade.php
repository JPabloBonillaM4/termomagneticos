@extends('index')
@section('title','componentes')
@section('content')
<div class="parallax-simple background_componentes">
    <div class="background-shadow-2 h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        {{-- <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
            <span class="card-contact p-2">Descargas</span>
        </p> --}}
        <div class="container my-5">
            <div class="row container mt-3">
                {{-- Catálogo 1 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Calidad de la energía</h5>
                    <div class="cases-gallery-1 text-center">
                        <a href="{{ asset('images/catalogos/catalogo_1/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_1/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_1/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_1/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_1/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_1/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_1/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['calidad']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
                {{-- Catálogo 2 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Finder</h5>
                    <div class="cases-gallery-2 text-center">
                        <a href="{{ asset('images/catalogos/catalogo_2/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0007.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0007.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0008.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0008.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0009.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0009.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0010.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0010.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_2/0011.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_2/0011.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['clavijas']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
                {{-- Catálogo 3 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Eaton y Moeller</h5>
                    <div class="cases-gallery-4 text-center">
                        <a href="{{ asset('images/catalogos/catalogo_4/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0007.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0007.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0008.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0008.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0009.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0009.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0010.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0010.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0011.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0011.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0012.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0012.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0013.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0013.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0014.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0014.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_4/0015.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_4/0015.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['moeller']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
            </div>
            <div class="row container my-5">
                {{-- Catálogo 4 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Componentes</h5>
                    <div class="cases-gallery-5 text-center">
                        <a href="{{ asset('images/catalogos/catalogo_5/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_5/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_5/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_5/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_5/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_5/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_5/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['componentes']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
                {{-- Catálogo 5 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Control y distribución</h5>
                    <div class="text-center cases-gallery-6">
                        <a href="{{ asset('images/catalogos/catalogo_6/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_6/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_6/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_6/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_6/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_6/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_6/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['energia']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
                {{-- Catálogo 6 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - IDE</h5>
                    <div class="cases-gallery-3 text-center">
                        <a href="{{ asset('images/catalogos/catalogo_3/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0001.jpg') }}" style="height: 385px;" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0007.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0007.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0008.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0008.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0009.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0009.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0010.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0010.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0011.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0011.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0012.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0012.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0013.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0013.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0014.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0014.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0015.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0015.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_3/0016.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_3/0016.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['finder']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
            </div>
            <div class="row container my-5">
                {{-- Catálogo 7 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">Catálogo - Proyectos</h5>
                    <div class="text-center cases-gallery-8">
                        <a href="{{ asset('images/catalogos/catalogo_8/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_8/0007.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_8/0007.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['proyectos']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>
                {{-- Catálogo 8 --}}
                <div class="col-md-4">
                    <h5 class="text-white w-100 text-center">CV Empresarial</h5>
                    <div class="text-center cases-gallery-7">
                        <a href="{{ asset('images/catalogos/catalogo_7/0001.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0001.jpg') }}" class="card-img-top img-pdf" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0002.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0002.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0003.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0003.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0004.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0004.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0005.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0005.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0006.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0006.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0007.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0007.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                        <a href="{{ asset('images/catalogos/catalogo_7/0008.jpg') }}">
                            <img src="{{ asset('images/catalogos/catalogo_7/0008.jpg') }}" class="card-img-top img-pdf d-none" alt="img_componente">
                        </a>
                    </div>
                    <a href="{{ route('downloadFile',['vitae']) }}" class="btn btn-primary w-100" style="color: white !important;">Descargar</a>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection 