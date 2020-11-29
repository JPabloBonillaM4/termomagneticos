{{-- <div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center mt-5">
            <a href="{{ route('componentes.index') }}" class="text-decoration-none text-dark">
                <div class="animationScale">
                    <img src="{{ asset('images/seccion_inicio/section_2.jpg') }}" class="rounded-img" alt="img_componente">
                </div>
                <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">componentes eaton</p>
            </a>
        </div>
        <div class="col-md-4 text-center mt-5">
            <a href="{{ route('tableros_distribucion') }}" class="text-decoration-none text-dark">
                <div class="animationScale">
                    <img src="{{ asset('images/control_distribucion_energia/titulo_control_distribucion.jpg') }}" class="rounded-img" alt="img_componente">
                </div>
                <p class="text-uppercase font-weight-bold mt-3 @if($actual_route != 'clientes') text-white @endif">control y distribución</p>
            </a>
        </div>
        <div class="col-md-4 text-center mt-5">
            <a href="{{ route('calidad_energía') }}" class="text-decoration-none text-dark">
                <div class="animationScale">
                    <img src="{{ asset('images/calidad_energia/titulo_calidad_energia.jpg') }}" class="rounded-img" alt="img_componente">
                </div>
                <p class="text-uppercase font-weight-bold mt-3 text-white">Calidad de la energía</p>
            </a>
        </div>
    </div>
</div> --}}
<div class="home_menu hide_on_mobile">
    <div class="row justify-content-center text_contents">
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('componentes.index') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">componentes eaton</p>
            </a>
        </div>
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('tableros_distribucion') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">control y distribución</p>
            </a>
        </div>
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('calidad_energía') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">Calidad de la energía</p>
            </a>
        </div>
    </div>
    <div class="row justify-content-center contents_img">
        <div class="col-md-4 p-0 img_content" style="background-image: url('{{ asset('images/componentes/background_componentes.jpg') }}')">
            <a href="{{ route('componentes.index') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 img_content p-0" style="background-image: url('{{ asset('images/control_distribucion_energia/titulo_control_distribucion.jpg') }}')">
            <a href="{{ route('tableros_distribucion') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 img_content p-0" style="background-image: url('{{ asset('images/calidad_energia/titulo_calidad_energia.jpg') }}')">
            <a href="{{ route('calidad_energía') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
    </div>
</div>