@extends('pages.administrador.index')
@section('title','Termomagnéticos | Cotizaciones')
@section('contenido')
@section('content-header','LISTADO DE COTIZACIONES')
@section('content-header-extra')
    <small>Aquí podrás realizar los ajustes necesarios para las cotizaciones registradas</small>
@endsection
<div class="card change-card m-0">
    <div class="card-header row justify-content-between align-items-center">
        <div class="col-md-6">
            <h3 class="card-title">Admistración de cotizaciones</h3>
        </div>
        {{-- <div class="col-md-12 d-flex justify-content-end">
            <a href="#" class="btn btn-success">Nuevo jugador &nbsp;<i class="fa fa-plus"></i></a>
        </div> --}}
    </div>
    <div class="card-body table-overflow">
        <table class="dataTable table table-bordered table-striped change-table over-auto-datatable">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">Solicitante</th>
                    <th class="align-middle">Email</th>
                    <th class="align-middle">Teléfono</th>
                    <th class="align-middle">Cotización</th>
                    <th class="align-middle">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quotes as $quote)
                    <tr class="text-center">
                        <td class="align-middle" style="width: 15%;">{{ $quote->name }}</td>
                        <td class="align-middle" style="width: 10%;">{{ $quote->email }}</td>
                        <td class="align-middle" style="width: 5%;">{{ $quote->phone }}</td>
                        <td class="align-middle" style="width: 25%;">{{ $quote->description }}</td>
                        <td class="align-middle" style="width: 10%;">
                            <button class="deleteRegister btn btn-rounded btn-outline-danger mt-1" data-modal="deleteRegister" data-route="{{ route('quotes.destroy', $quote->id) }}" data-id="{{ $quote->id }}" title="Eliminar cotización">
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