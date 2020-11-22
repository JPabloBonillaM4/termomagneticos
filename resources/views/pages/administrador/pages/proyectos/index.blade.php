@extends('pages.administrador.index')
@section('title','Termomagnéticos | Proyectos')
@section('contenido')
@section('content-header','LISTADO DE PROYECTOS')
@section('content-header-extra')
    <small>Aquí podrás realizar los ajustes necesarios para los proyectos registradas</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header row justify-content-between align-items-center">
        <div class="col-md-6">
            <h3 class="card-title">Admistración de proyectos</h3>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('projects.create') }}" class="btn btn-success">Nuevo Proyecto &nbsp;<i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body table-overflow">
        <table class="dataTable table table-bordered table-striped change-table over-auto-datatable">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">Titulo</th>
                    <th class="align-middle">Categoría</th>
                    <th class="align-middle">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr class="text-center">
                        <td class="align-middle" style="width: 45%;">{{ $project->title }}</td>
                        <td class="align-middle" style="width: 45%;">{{ $project->subcategory->first()->name }}</td>
                        <td class="align-middle" style="width: 10%;">
                            <button class="openModalAndGetValues btn btn-rounded btn-outline-info mt-1" data-modal="editProject" data-route="{{ route('projects.edit', $project->id) }}" title="Editar proyecto">
                                <i class="far fa-edit"></i>
                            </button>
                            <button class="deleteRegister btn btn-rounded btn-outline-danger mt-1" data-modal="deleteRegister" data-route="{{ route('projects.destroy', $project->id) }}" data-id="{{ $project->id }}" title="Eliminar proyecto">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('pages.administrador.pages.proyectos.edit')
@endsection