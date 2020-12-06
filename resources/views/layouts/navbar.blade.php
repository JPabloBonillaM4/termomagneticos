<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-4 sticky-top">
    <div class="container">
        <div class="col-lg-3 d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('images/logo-png-1.png') }}" alt="logo" style="max-width: 150px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse col-lg-9 pl-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- INICIO --}}
                <li class="hide_on_mobile nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == '/' || $actual_route == 'quienes_somos' || $actual_route == 'filosofia' || $actual_route == 'clientes') active-option @endif" href="{{ route('/') }}">inicio</a>
                    </div>
                </li>
                <li class="show_on_mobile nav-item dropdown text-center text-uppercase">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inicio
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('/') }}">Home</a>
                        <a class="dropdown-item" href="{{ route('quienes_somos') }}">Nosotros</a>
                        <a class="dropdown-item" href="{{ route('filosofia') }}">Filosofía</a>
                        <a class="dropdown-item" href="{{ route('clientes') }}">Clientes</a>
                    </div>
                </li>
                {{-- COMPONENTES --}}
                <li class="hide_on_mobile nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="{{ route('componentes.index') }}" class="position-relative linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'componentes.index' || $actual_route == 'tableros_distribucion' || $actual_route == 'calidad_energía') active-option @endif">
                            <div>
                                <span>venta de componentes</span>
                                <img src="{{ asset('images/eaton-logo-1.png') }}" class="position-absolute rounded-lg card-contact adjust-img-navbar" alt="img_eaton">
                            </div>
                        </a>
                    </div>
                </li>
                <li class="show_on_mobile nav-item dropdown text-center text-uppercase">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        venta de componentes eaton
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('componentes.index') }}">componentes eaton</a>
                        <a class="dropdown-item" href="{{ route('tableros_distribucion') }}">control y distribución</a>
                        <a class="dropdown-item" href="{{ route('calidad_energía') }}">calidad_energía</a>
                    </div>
                </li>
                {{-- INGENIERÍA ELÉCTRICA --}}
                <li class="hide_on_mobile nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="{{ route('ingenieria') }}" class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'ingenieria'|| $actual_route == 'construccion' || $actual_route == 'casos-exito') active-option @endif">ingeniería eléctrica</a>
                    </div>
                </li>
                <li class="show_on_mobile nav-item dropdown text-center text-uppercase">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ingeniería eléctrica
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('ingenieria') }}">¿Qué es?</a>
                        @foreach($categories as $category)
                            @if($category->id == 1)
                                @foreach($category->subcategories as $subcategory)
                                    <a class="dropdown-item" href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif">
                                        {{ $subcategory->name }}
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </li>
                {{-- FISICA DE RADIACIONES --}}
                <li class="hide_on_mobile nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="{{ route('radiaciones') }}" class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'radiaciones' || $actual_route == 'blindaje' || $actual_route == 'cristales' || $actual_route == 'puertas') active-option @endif">física de radiaciones</a>
                    </div>
                </li>
                <li class="show_on_mobile nav-item dropdown text-center text-uppercase">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        física de radiaciones
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('radiaciones') }}">¿Qué es?</a>
                        @foreach($categories as $category)
                            @if($category->id == 2)
                                @foreach($category->subcategories as $subcategory)
                                    <a class="dropdown-item" href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif">
                                        {{ $subcategory->name }}
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </li>
                {{-- CONTACTO --}}
                <li class="hide_on_mobile nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'contacto') active-option @endif" href="{{ route('contacto') }}">contacto</a>
                    </div>
                </li>
                <li class="show_on_mobile nav-item text-center mb-5">
                    <a class="nav-link text-uppercase" href="{{ route('contacto') }}">contacto</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="numbers_nav">
        <p class="mt-3 d-flex align-items-center justify-content-center">
            <a href="tel:2222576165" class="text-primary">
                <i class="fas fa-phone-square"></i> 
                <span>Tel. (222) 257 6165</span>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="text-primary">|</span>
        </p>
        <p class="mt-3 d-flex align-items-center justify-content-center">
            <a href="tel:2222576198" class="text-primary">
                <i class="fas fa-phone-square"></i> 
                <span>Tel. (222) 257 6198</span>
            </a>
        </p>
    </div>
</nav>