<div class="home_menu hide_on_mobile">
    <div class="row justify-content-center text_contents">
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('quienes_somos') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">¿quienes somos?</p>
            </a>
        </div>
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('filosofia') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">filosofía</p>
            </a>
        </div>
        <div class="col-md-4 text-center object_img">
            <a href="{{ route('clientes') }}" class="text-decoration-none text-dark my-2">
                <i class="fas fa-arrow-up"></i>
                <p class="text-uppercase font-weight-bold m-0">Algunos de nuestros clientes</p>
            </a>
        </div>
    </div>
    <div class="row justify-content-center contents_img">
        <div class="col-md-4 p-0 img_content" style="background-image: url('{{ asset('images/seccion_inicio/section_2.jpg') }}')">
            <a href="{{ route('quienes_somos') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 img_content p-0" style="background-image: url('{{ asset('images/seccion_inicio/section_3.jpg') }}')">
            <a href="{{ route('filosofia') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 img_content p-0" style="background-image: url('{{ asset('images/seccion_inicio/volkswagen_logo.jpg') }}')">
            <a href="{{ route('clientes') }}" class="text-decoration-none text-dark">
                <div class="especial_background">
                    <p>Ver sección</p>
                </div>
            </a>
        </div>
    </div>
</div>