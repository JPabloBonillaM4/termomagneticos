{{-- <div class="parallax-medium section1">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-4 font-weight-bold r2_mobile text-center">{{ $component->nombre }}</p>
    </div>
</div>
<div class="container">
    <div class="row"> --}}
        {{-- <textarea name="editor1"></textarea> --}}
        {{-- <div class="d-flex justify-content-center col-md-12 py-5">
            <div id="componentImages" class="carousel slide sizeCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#componentImages" data-slide-to="0" class="active"></li>
                    <li data-target="#componentImages" data-slide-to="1"></li>
                    <li data-target="#componentImages" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#componentImages" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#componentImages" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        <div class="pt-2">
            {!! $component->descripcion !!}
        </div>
    </div>
</div> --}}

<div class="modal fade" id="modalComponent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalComponentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header section1 text-white">
                <h5 class="modal-title" id="modalComponentLabel"><span id="component_name" class="text-uppercase"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <p class="text-justify" id="component_description"></p>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
                <div id="carouselComponentImages" class="carousel slide" data-ride="carousel" style="max-width: 400px;max-height: 200px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/section_1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section_2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section_3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselComponentImages" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselComponentImages" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>