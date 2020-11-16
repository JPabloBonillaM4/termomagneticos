@extends('pages.administrador.index')
@section('title','Termomagnéticos | Categorias')
@section('contenido')
@section('content-header','LISTADO DE CATEGORIAS')
@section('content-header-extra')
    <small>Aquí podrás realizar los ajustes necesarios para las categorias registradas</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header row justify-content-between align-items-center">
        <div class="col-md-6">
            <h3 class="card-title">Admistración de categorias</h3>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('subcategories.create') }}" class="btn btn-success">Nueva categoría &nbsp;<i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body table-overflow">
        <table class="dataTable table table-bordered table-striped change-table over-auto-datatable">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">Nombre</th>
                    <th class="align-middle">Módulo</th>
                    <th class="align-middle">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subcategories as $subcategorie)
                    <tr class="text-center">
                        <td class="align-middle" style="width: 15%;">{{ $subcategorie->name }}</td>
                        <td class="align-middle" style="width: 10%;">{{ $subcategorie->categorie->name }}</td>
                        <td class="align-middle" style="width: 10%;">
                            <button class="openModalAndGetValues btn btn-rounded btn-outline-info mt-1" data-modal="editSubcategory" data-route="{{ route('subcategories.edit', $subcategorie->id) }}" title="Editar categoría">
                                <i class="far fa-edit"></i>
                            </button>
                            <button class="deleteRegister btn btn-rounded btn-outline-danger mt-1" data-modal="deleteRegister" data-route="{{ route('subcategories.destroy', $subcategorie->id) }}" data-id="{{ $subcategorie->id }}" title="Eliminar categoría">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('pages.administrador.pages.subcategorias.edit')
@endsection