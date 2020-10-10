<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-4 sticky-top">
    <div class="col-lg-3 d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" style="max-width: 150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse col-lg-9" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item d-flex justify-content-center mr-3 py-3">
                <div class="dropdown">
                    <a class="linehover nav-link text-uppercase text-dark t-13" 
                    href="{{ route('/') }}">¿quienes somos?</a>
                </div>
            </li>
            <li class="nav-item d-flex justify-content-center mr-3 py-3">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13">venta componentes</a>
                    <div class="dropdown-content t-13">
                        <a href="{{ route('componentes.index') }}" class="text-uppercase">componentes</a>
                        <a href="{{ route('tableros_distribucion') }}" class="text-uppercase">control y distribución</a>
                        <a href="{{ route('calidad_energía') }}" class="text-uppercase">Calidad de la energía</a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-flex justify-content-center mr-3 py-3">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13">ingeniería eléctrica</a>
                    <div class="dropdown-content t-13">
                        <a href="{{ route('construccion') }}" class="text-uppercase">contrucción</a>
                        <a href="{{ route('casos-exito') }}" class="text-uppercase">casos de éxito</a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-flex justify-content-center mr-3 py-3">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="linehover nav-link text-uppercase text-dark t-13">física de radiaciones</a>
                    <div class="dropdown-content t-13">
                        <a href="{{ route('blindaje') }}" class="text-uppercase">blindaje</a>
                        <a href="{{ route('cristales') }}" class="text-uppercase">cristales</a>
                        <a href="{{ route('puertas') }}" class="text-uppercase">puertas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-flex justify-content-center mr-3 py-3">
                <div class="dropdown">
                    <a class="linehover nav-link text-uppercase text-dark t-13" href="{{ route('contacto') }}">contacto</a>
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
</nav>