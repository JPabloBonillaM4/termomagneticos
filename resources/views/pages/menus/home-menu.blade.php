<div class="container mb-5">
    <div class="row justify-content-center">
        {{-- @if($actual_route != 'quienes_somos') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('quienes_somos') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/seccion_inicio/section_2.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">¿quienes somos?</p>
                </a>
            </div>
        {{-- @endif --}}
        {{-- @if($actual_route != 'filosofia') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('filosofia') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/seccion_inicio/section_3.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">filosofía</p>
                </a>
            </div>
        {{-- @endif --}}
        {{-- @if($actual_route != 'clientes') --}}
            <div class="col-md-4 text-center mt-5">
                <a href="{{ route('clientes') }}" class="text-decoration-none text-dark">
                    <div class="animationScale">
                        <img src="{{ asset('images/seccion_inicio/volkswagen_logo.jpg') }}" class="rounded-img" alt="img_componente">
                    </div>
                    <p class="text-uppercase font-weight-bold mt-3 text-white">Algunos de nuestros clientes</p>
                </a>
            </div>
        {{-- @endif --}}
    </div>
</div>