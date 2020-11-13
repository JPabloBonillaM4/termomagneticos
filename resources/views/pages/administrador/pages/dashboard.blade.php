@extends('pages.administrador.index')
@section('title','Termomagnéticos | Administrador')
@section('contenido')
@section('content-header','DASHBOARD')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex flex-column">
            <div class="row">
                {{-- COMPONENTES --}}
                <div class="col-12 col-sm-4 col-md-4">
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
                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box mb-3 change-card">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-archive"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Categorías</span>
                            {{-- <span class="info-box-number">{{ $data->players->count() }}</span> --}}
                        </div>
                    </div>
                </div>
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                {{-- SUBCATEGORÍAS --}}
                <div class="col-12 col-sm-4 col-md-4">
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