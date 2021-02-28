@extends('index')
@section('title','componentes')
@section('content')
<div class="parallax-simple background_componentes">
    <div class="background-shadow-2 h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
            <span class="card-contact p-2">Catálogos</span>
        </p>
        <div class="container mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="text-center text-white">
                        <th>Archivo</th>
                        <th>Nombre</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Catálogo 1 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 1
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['calidad']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 2 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 2
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['clavijas']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 3 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 3
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['finder']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 4 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 4
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['moeller']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 5 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 5
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['componentes']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 6 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 6
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['energia']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 7 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 7
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['vitae']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                    {{-- Catálogo 8 --}}
                    <tr class="text-center text-white">
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>
                            Catálogo 8
                        </td>
                        <td>
                            <a href="{{ route('downloadFile',['proyectos']) }}" class="btn btn-primary">Descargar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 