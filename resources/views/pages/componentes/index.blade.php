@extends('index')
@section('title','componentes')
@section('content')
    <div class="parallax titulo_componentes">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
            <p class="text-white text-uppercase text-center title adjust_title container r2_mobile">componentes</p>
            <a data-scroll href="#inicio" class="arrow_ancle">
                <div class="arrow bounce mt-5 mobile_arrow">
                    <span class="fa fa-arrow-down fa-2x"></span>
                </div>
            </a>
        </div>
    </div>
    <div class="parallax-simple background_componentes" id="inicio">
        <div class="background-shadow py-5">
            <div class="pt-5 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/logo-white_2.png') }}" class="rounded-lg" alt="" style="max-width: 250px;">
            </div>        
            <div class="container pb-5">
                <div class="row">
                    @forelse ($components as $component)
                        <div class="col-md-4 text-center mt-5">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark showComponent" data-route="{{ route('componentes.show',$component->id) }}">
                                <div class="animationScale">
                                    <img src="{{ asset($component->imagen) }}" class="rounded-img" alt="img_componente">
                                </div>
                                <p class="text-uppercase font-weight-bold mt-3 text-white">{{ $component->nombre }}</p>
                            </a>
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
            </div>
        </div>
    </div>

@include('pages.componentes.show')
@endsection