@extends('pages.administrador.index')
@section('title','Termomagnéticos | Administrador')
@section('contenido')
@section('content-header','PANEL PRINCIPAL')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex flex-column">
            <div class="row">
                {{-- CITAS --}}
                <div class="col-12 col-sm-6 col-md-12">
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
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="info-box change-card">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comment-dollar"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Cotizaciones</span>
                            <span class="info-box-number">
                                @if($data->quotes->count() > 0)
                                    {{ $data->quotes->count() }}
                                @else
                                    Sin cotizaciones
                                @endif
                            </span>
                        </div>
                        @if($data->quotes->count() > 0)
                            <a href="{{ route('quotes.index') }}">
                                <button class="btn btn-primary h-100">Ver todas las cotizaciones</button>
                            </a>
                        @endif
                    </div>
                </div>
                {{-- CATEGORÍAS --}}
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="info-box mb-3 change-card">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-archive"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Proyectos</span>
                            @if($data->projects->count() > 0)
                                {{ $data->projects->count() }}
                            @else
                                Sin proyectos
                            @endif
                        </div>
                        <a href="{{ route('projects.index') }}">
                            <button class="btn btn-primary h-100">Ver todos los proyectos</button>
                        </a>
                    </div>
                </div>
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                {{-- SUBCATEGORÍAS --}}
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="info-box mb-3 change-card">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-boxes"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Categorías (Proyectos)</span>
                            @if($data->subcategories->count() > 0)
                                {{ $data->subcategories->count() }}
                            @else
                                Sin categorias
                            @endif
                        </div>
                        @if($data->subcategories->count() > 0)
                            <a href="{{ route('subcategories.index') }}">
                                <button class="btn btn-primary h-100">Ver todos las categorías</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection