@extends('index')
@section('title','componentes')
@section('content')
    <div class="parallax-medium section1">
        <div class="text-white h-100 d-flex align-items-center justify-content-center">
            <p class="text-uppercase display-1 font-weight-bold r2_mobile">componentes</p>
        </div>
    </div>
    <div class="pt-5 d-flex justify-content-center align-items-center">
        <img src="{{ asset('images/logo-white_2.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            @forelse ($components as $component)
                <div class="col-md-4 text-center mt-5">
                    <a href="javascript:void(0)" class="text-decoration-none text-dark showComponent" data-route="{{ route('componentes.show',$component->id) }}">
                        <div class="animationScale">
                            <img src="{{ asset('images/logo-white_2.png') }}" class="rounded-img" alt="img_componente">
                        </div>
                        <p class="text-uppercase font-weight-bold mt-3">{{ $component->nombre }}</p>
                    </a>
                </div>
            @empty
                <div class="col-md-12 pt-5">
                    <div class="alert alert-warning text-center" role="alert">
                        Sin productos disponibles
                    </div>
                </div>
            @endforelse
            <div class="d-flex align-items-center justify-content-center col-md-12">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    @if($components->count() > 0)
                        <p>{{ $components->render() }}</p>
                        <div class="alert alert-primary text-center" role="alert">
                            Componentes disponibles: {{ $components->total() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@include('pages.componentes.show')
@endsection