@extends('pages.administrador.index')
@section('title','Termomagnéticos | Agregar proyecto')
@section('contenido')
@section('content-header','NUEVO PROYECTO')
@section('content-header-extra')
    <small>Aquí podrás registrar un nuevo proyecto</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header">
        <h3 class="card-title">Agregar nuevo proyecto</h3>
    </div>
    <form class="form-horizontal" method="POST" action="{{ route('projects.store') }}" id="new-register" style="display: contents;" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <!-- Nombre -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text adjusting-append-icons"><i class="fab fa-elementor"></i></span>
                </div>
                <input type="text" class="form-control" id="title" name="title" data-name="nombre(s)" placeholder="Titulo del proyecto" data-required="true">
            </div>
            <!-- Categoría -->
            <div class="input-group mb-3" style="color: #495057;">
                <div class="input-group-prepend">
                    <span class="input-group-text adjusting-append-icons"><i class="fas fa-globe"></i></span>
                </div>
                <select class="form-control select2" data-placeholder="Seleccione un modulo" name="categorie_id" id="categorie_id" data-name="modulo" data-required="true">
                    <option value=""></option>
                    @foreach($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Fotos -->
            <p class="text-muted">Seleccione las imágenes para el proyecto</p>
            <div class="input-group mb-3">
                <input type="file" name="images[]" multiple id="imagesFilesProject" accept="image/*">
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