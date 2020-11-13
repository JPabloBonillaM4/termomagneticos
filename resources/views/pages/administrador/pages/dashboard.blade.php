@extends('pages.administrador.index')
@section('title','Termomagnéticos | Administrador')
@section('contenido')
@section('content-header','DASHBOARD')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex flex-column">
            <div class="row">
                {{-- CITAS --}}
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box change-card">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Citas</span>
                            <span class="info-box-number">
                                @if($data->citas->count() > 0)
                                    {{ $data->citas->count() }}
                                @else
                                    Sin citas
                                @endif
                            </span>
                        </div>
                        @if($data->citas->count() > 0)
                            <a href="{{ route('cites.index') }}">
                                <button class="btn btn-primary h-100">Ver todas las citas</button>
                            </a>
                        @endif
                    </div>
                </div>
                {{-- COMPONENTES --}}
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box change-card">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-medal"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Componentes</span>
                            <span class="info-box-number">
                                {{-- @if($data->tournaments->count() > 0)
                                    {{ $data->tournaments->count() }}
                                @else
                                    Sin torneos
                                @endif --}}
                            </span>
                        </div>
                    </div>
                </div>
                {{-- CATEGORÍAS --}}
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3 change-card">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-archive"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Categorías</span>
                            {{-- <span class="info-box-number">{{ $data->players->count() }}</span> --}}
                        </div>
                    </div>
                </div>
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                {{-- SUBCATEGORÍAS --}}
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3 change-card">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-boxes"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Subcategorías</span>
                            {{-- <span class="info-box-number">{{ $data->players->count() }}</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection