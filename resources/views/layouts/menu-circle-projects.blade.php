<div class="row pb-5">
    @forelse ($proyectos as $proyecto)
        <div class="col-md-4 text-center mt-5">
            <a href="javascript:void(0)" class="text-decoration-none text-dark modal-project" data-modal="{{ $proyecto->id }}">
                <div class="animationScale">
                    <img src="{{ asset($proyecto->images->first()->image_url) }}" class="rounded-img" alt="img_componente">
                </div>
                <p class="text-uppercase font-weight-bold mt-3 text-white">{{ $proyecto->title }}</p>
            </a>
        </div>
        <div class="modal fade" id="{{ $proyecto->id }}" data-keyboard="false" tabindex="-1" aria-labelledby="{{ $proyecto->id }}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-header section1 text-white">
                        <h5 class="modal-title" id="{{ $proyecto->id }}Label"><span class="text-uppercase">{{ $proyecto->title }}</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1;text-shadow: 0 0 black;">
                            <span aria-hidden="true" class="text-white">Cerrar</span>
                        </button>
                    </div>
                    <div class="modal-body bg-light p-0">
                        <div class="container p-0 overflow-x-hidden">
                            <div class="col-md-12 text-dark">
                                <ul class="list-group list-group-flush col-md-12 pt-2">
                                    @if($proyecto->title == 'centro oncológico hospital juárez de méxico, cdmx')
                                        <li class="list-group-item pl-0 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                                    @elseif($proyecto->title == 'centro oncológico hospital central militar, cdmx')
                                        <li class="list-group-item pl-2 bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                                    @elseif($proyecto->title == 'centro oncológico de saltillo, saltillo coahuila')
                                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Aceleración lineal</li>
                                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Braquiterapia alta tasa de dosis</li>
                                        <li class="list-group-item bg-transparent"><i class="fas fa-angle-right text-muted mr-3"></i> Puerta de acceso Medicina nuclear</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-md-12 my-5">
                                <div class="cases-gallery-4 row">
                                    @foreach ($proyecto->images as $imagen)
                                        <a href="{{ asset($imagen->image_url) }}" class="col-md-4 mb-4">
                                            <img src="{{ asset($imagen->image_url) }}" class="img-fluid img-gallery" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12 pt-5">
            <div class="alert alert-warning text-center" role="alert">
                Sin productos disponibles
            </div>
        </div>
    @endforelse
</div>