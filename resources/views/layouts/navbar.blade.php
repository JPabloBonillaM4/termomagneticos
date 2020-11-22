<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-4 sticky-top">
    <div class="container">
        <div class="col-lg-3 d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('images/logo-png-1.png') }}" alt="logo" style="max-width: 200px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse col-lg-9" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == '/') active-option @endif" href="{{ route('/') }}">¿quiénes somos?</a>
                        <div class="dropdown-content t-13">
                            <a data-scroll href="{{ route('/').'#quienes_somos' }}" class="text-uppercase">Nosotros</a>
                            <a data-scroll href="{{ route('/').'#filosofia' }}" class="text-uppercase">Filosofía</a>
                            <a data-scroll href="{{ route('/').'#clientes' }}" class="text-uppercase">Clientes</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'componentes.index' || $actual_route == 'tableros_distribucion' || $actual_route == 'calidad_energía') active-option @endif">venta componentes</a>
                        <div class="dropdown-content t-13">
                            <a href="{{ route('componentes.index') }}" class="text-uppercase @if($actual_route == 'componentes.index') font-weight-bold text-dark @endif">componentes</a>
                            <a href="{{ route('tableros_distribucion') }}" class="text-uppercase @if($actual_route == 'tableros_distribucion') font-weight-bold text-dark @endif">control y distribución</a>
                            <a href="{{ route('calidad_energía') }}" class="text-uppercase @if($actual_route == 'calidad_energía') font-weight-bold text-dark @endif">Calidad de la energía</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'construccion' || $actual_route == 'casos-exito') active-option @endif">ingeniería eléctrica</a>
                        <div class="dropdown-content t-13">
                            {{-- <a href="{{ route('construccion') }}" class="text-uppercase @if($actual_route == 'construccion') font-weight-bold text-dark @endif">contrucción</a>
                            <a href="{{ route('casos-exito') }}" class="text-uppercase @if($actual_route == 'casos-exito') font-weight-bold text-dark @endif">casos de éxito</a> --}}
                            @foreach($categories as $category)
                                @if($category->id == 1)
                                    @foreach($category->subcategories as $subcategory)
                                        <a 
                                        href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" 
                                        class="text-uppercase @if($actual_route == 'construccion')@endif">
                                            {{ $subcategory->name }}
                                        </a>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'blindaje' || $actual_route == 'cristales' || $actual_route == 'puertas') active-option @endif">física de radiaciones</a>
                        <div class="dropdown-content t-13">
                            {{-- <a href="{{ route('blindaje') }}" class="text-uppercase @if($actual_route == 'blindaje') font-weight-bold text-dark @endif">blindaje</a>
                            <a href="{{ route('cristales') }}" class="text-uppercase @if($actual_route == 'cristales') font-weight-bold text-dark @endif">cristales</a>
                            <a href="{{ route('puertas') }}" class="text-uppercase @if($actual_route == 'puertas') font-weight-bold text-dark @endif">puertas</a> --}}
                            @foreach($categories as $category)
                                @if($category->id == 2)
                                    @foreach($category->subcategories as $subcategory)
                                        <a 
                                        href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif" 
                                        class="text-uppercase @if($actual_route == 'blindaje')@endif">
                                            {{ $subcategory->name }}
                                        </a>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="nav-item d-flex justify-content-center mr-3 py-3">
                    <div class="dropdown">
                        <a class="linehover nav-link text-uppercase text-dark t-13 active-option-fixed-x @if($actual_route == 'contacto') active-option @endif" href="{{ route('contacto') }}">contacto</a>
                    </div>
                </li>
                {{-- @if (Route::has('login'))
                    @auth
                        <li class="nav-item d-flex justify-content-center py-3">
                            <div class="dropdown">
                                <a class="linehover nav-link text-uppercase text-dark t-13" href="{{ url('/') }}">Inicio</a>
                            </div>
                        </li>
                    @else
                        @if (Route::has('register'))
                            <li class="nav-item d-flex justify-content-center py-3">
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13">Acceso</a>
                                    <div class="dropdown-content t-13">
                                        <a href="{{ route('login') }}" class="text-uppercase">Iniciar sesión</a>
                                        <a href="{{ route('register') }}" class="text-uppercase">Registrarse</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endauth
                @endif --}}
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