@extends('pages.administrador.index')
@section('title','Termomagnéticos | Agregar Categoria')
@section('contenido')
@section('content-header','NUEVA CATEGORIA')
@section('content-header-extra')
    <small>Aquí podrás registrar una nueva categoria</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header">
        <h3 class="card-title">Agregar nueva categoria</h3>
    </div>
    <form class="form-horizontal" method="POST" action="{{ route('subcategories.store') }}" id="new-register" style="display: contents;" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <!-- Nombre -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text adjusting-append-icons"><i class="fab fa-elementor"></i></span>
                </div>
                <input type="text" class="form-control" id="name" name="name" data-name="nombre(s)" placeholder="Nombre de la categoria" data-required="true">
            </div>
            <!-- Categoría -->
            <div class="input-group mb-3" style="color: #495057;">
                <div class="input-group-prepend">
                    <span class="input-group-text adjusting-append-icons"><i class="fas fa-globe"></i></span>
                </div>
                <select class="form-control select2" data-placeholder="Categoría" name="categorie_id" id="categorie_id" data-name="categoría" data-required="true">
                    <option value=""></option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <div class="btn-group">
                <button type="button" class="btn btn-info resetForm">Limpiar</button>
                <button type="submit" class="btn btn-success spinEfect d-flex align-items-center">
                    <span class="spinner-border spinner-border-sm mr-1 d-none" role="status" aria-hidden="true"></span>
                    <span id="button-text">Agregar</span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection