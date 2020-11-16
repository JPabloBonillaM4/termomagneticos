@extends('pages.administrador.index')
@section('title','Termomagnéticos | Citas')
@section('contenido')
@section('content-header','LISTADO DE CITAS')
@section('content-header-extra')
    <small>Aquí podrás realizar los ajustes necesarios para las citas registradas</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header row justify-content-between align-items-center">
        <div class="col-md-6">
            <h3 class="card-title">Admistración de citas</h3>
        </div>
        {{-- <div class="col-md-12 d-flex justify-content-end">
            <a href="#" class="btn btn-success">Nuevo jugador &nbsp;<i class="fa fa-plus"></i></a>
        </div> --}}
    </div>
    <div class="card-body table-overflow">
        <table class="dataTable table table-bordered table-striped change-table over-auto-datatable">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">Fecha</th>
                    <th class="align-middle">Hora</th>
                    <th class="align-middle">Solicitante</th>
                    <th class="align-middle">Email</th>
                    <th class="align-middle">Teléfono</th>
                    <th class="align-middle">Motivo</th>
                    <th class="align-middle">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cites as $cite)
                    <tr class="text-center">
                        <td class="align-middle" style="width: 5%;">{{ $cite->date }}</td>
                        <td class="align-middle" style="width: 5%;">{{ $cite->time }}</td>
                        <td class="align-middle" style="width: 15%;">{{ $cite->name }}</td>
                        <td class="align-middle" style="width: 10%;">{{ $cite->email }}</td>
                        <td class="align-middle" style="width: 5%;">{{ $cite->phone }}</td>
                        <td class="align-middle" style="width: 25%;">{{ $cite->description }}</td>
                        <td class="align-middle" style="width: 10%;">
                            <button class="deleteRegister btn btn-rounded btn-outline-danger mt-1" data-modal="deleteRegister" data-route="{{ route('cites.destroy', $cite->id) }}" data-id="{{ $cite->id }}" title="Eliminar jugador">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection