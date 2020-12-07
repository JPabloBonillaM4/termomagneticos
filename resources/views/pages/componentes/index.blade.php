@extends('index')
@section('title','componentes')
@section('content')
    {{-- <div class="parallax-medium titulo_componentes">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">componentes</p>
        </div>
    </div> --}}
    <div class="parallax-simple background_componentes" id="inicio">
        <div class="background-shadow pb-5" style="background-color: rgba(0,0,0, 0.5);">
            {{-- <div class="pt-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/eaton-logo-1.png') }}" class="rounded-lg card-contact" alt="" style="max-width: 180px;">
            </div>         --}}
            <div class="container pb-5">
                <div class="row slick-menu container">
                    @forelse ($components as $component)
                        {{-- <div class="col-md-4 text-center mt-5">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark showComponent" data-route="{{ route('componentes.show',$component->id) }}">
                                <div class="animationScale">
                                    <img src="{{ asset($component->imagen) }}" class="rounded-img" alt="img_componente">
                                </div>
                                <p class="text-uppercase font-weight-bold mt-3 text-white">{{ $component->nombre }}</p>
                            </a>
                        </div> --}}
                        <div class="col-md-4 text-center mt-5 p-3">
                            <div class="card card-contact pt-2" style="width: 18rem; height: 18rem;">
                                <div class="animationScale d-flex justify-content-center">
                                    <img src="{{ asset($component->imagen) }}" class="card-img-top img-gallery-2" alt="img_componente">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title container">{{ $component->nombre }}</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                    <button class="btn btn-primary showComponent" data-route="{{ route('componentes.show',$component->id) }}">Ver componente</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 pt-5">
                            <div class="alert alert-warning text-center" role="alert">
                                Sin productos disponibles
                            </div>
                        </div>
                    @endforelse
                    {{-- <div class="d-flex align-items-center justify-content-center col-md-12">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            @if($components->count() > 0)
                                <p>{{ $components->render() }}</p>
                                <div class="alert alert-primary text-center" role="alert">
                                    Componentes disponibles: {{ $components->total() }}
                                </div>
                            @endif
                        </div>
                    </div> --}}
                </div>
                <div class="text-center text-white">
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
    @include('pages.menus.components-menu')

@include('pages.componentes.show')
@endsection