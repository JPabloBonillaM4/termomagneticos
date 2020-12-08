@extends('index')
@section('title','cristales')
@section('content')
<div class="parallax-simple section1">
    <div class="h-100 d-flex flex-column justify-content-center align-items-center background-shadow">
        <p class="text-white text-uppercase text-center title mt-3 container r2_mobile">
            <span class="card-contact p-2">cristales</span>
        </p>
        <div class="container mt-3">
            @include('layouts.menu-circle-projects')
        </div>
    </div>
</div>
@include('pages.menus.radiaciones-menu')
{{-- <div class="parallax-simple section_cases" id="inicio">
    <div class="background-shadow">
        
    </div>
</div> --}}
{{-- @include('layouts.menu-projects') --}}
@endsection