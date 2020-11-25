<div class="container mb-5">
    <div class="row justify-content-center">
        {{-- @if($actual_route != 'componentes.index') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('componentes.index') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/seccion_inicio/section_2.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">componentes eaton</p>
                </a>
            </div>
        {{-- @endif --}}
        {{-- @if($actual_route != 'tableros_distribucion') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('tableros_distribucion') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/control_distribucion_energia/titulo_control_distribucion.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">control y distribución</p>
                </a>
            </div>
        {{-- @endif --}}
        {{-- @if($actual_route != 'calidad_energía') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('calidad_energía') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/calidad_energia/titulo_calidad_energia.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 text-white">Calidad de la energía</p>
                </a>
            </div>
        {{-- @endif --}}
    </div>
</div>