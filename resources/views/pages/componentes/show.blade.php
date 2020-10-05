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
                {{-- <p class="text-justify" id="component_description"></p> --}}

                {{-- CÓDIGO MOMENTÁNEO --}}
                {{-- 1.- Protección electromagnética --}}
                <div class="container">
                    <div class="hide-section" id="componente_1">
                        <div class="row text-center">
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                        </div>
                        <div class="text-justify container">
                            <h5>Circuit-breakers IZM up to 6300 A Switch-disconnectors up to 6300A</h5>
                            <p class="text-muted">Con la nueva serie IZM, EATON presenta una oferta completa de interruptores automáticos de aire (ACB) hasta 6300 A, cinco tamaños de construcción permiten seleccionar el swith más económico para cada proyecto.</p>
                            <p class="text-muted">La nueva estrella son los interruptores automáticos IZMX16. Este concepto innovadorpermite la contrucción económica de dos interruptores automáticos con un ancho de campo de 600mm.</p>
                            <p class="text-muted">No hay mayor rendimiento en un espacio tan pequeño.</p>
                        </div>
                        <div class="text-justify container">
                            <h5>Dispositivos básicos IZM</h5>
                            <p class="text-muted">Capacidad de conmutación 440 V AC, Icu = Ics de 42 - 100kA +++ 3 o 4 polos +++ Disparadores electrónicos para protección del sistema, protección selectiva y universal, protección universal con medida de potencia +++ Corriente de operación nominal de 630-6300 A +++ Tensión nominal de funcionamiento Ue 1100 V para IZM32 ...3200-1100V.</p>
                        </div>
                        <div class="text-justify container">
                            <h5>Completos accesorios de montaje fijo</h5>
                            <p class="text-muted">Operador de motor IZM ... M ... +++ Disparador de derivación IZM ... ST +++ Cierre real IZM ...- SR ... ++++ Subtensión real IZM ...- UV ... +++ Auxiliar contacto IZM ...- AS ... +++ Conmutador de enclavamiento IZM ... LCS ... +++ Conmutador auxiliar de bloqueo IZM ...- OTS +++ Enclavamientos mecánicos.</p>
                        </div>
                        <div class="text-justify container">
                            <h5>Novedad mundial ARMS: mayor seguridad para el personal de mantenimiento</h5>
                            <p class="text-muted">Si hay un arco accidental, el sistema ARMS (Sistema de Mantenimiento de Reducción de Arcflash).</p>
                            <p class="text-muted">Se apaga más rápido que un dispositivo de disparo por cortocircuito. En relación con IZM, los componentes adicionales del sistema de protección de arco accidental ARCON proporcionan una protección incremental contra el arco accidental.</p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('images/componentes/componente-1.jpg') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                    </div>
                </div>
                {{-- 2.- mcb´s y equipos de control --}}
                <div class="container">
                    <div class="hide-section" id="componente_2">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                        </div>
                        <div class="text-justify container">
                            {{-- <h5>Circuit-breakers IZM up to 6300 A Switch-disconnectors up to 6300A</h5> --}}
                            <p class="text-muted">La calidad probada, las aprobaciones y la clasificación de envío representan la funcionalidad y la seguridad adecuadas para los mercados mundiales con interruptores automáticos industriales en miniatura. además de una amplia gama de dispositivos de corriente residual, LV h.b.c. Se suministran bases de fusibles e interruptores-seccionadores de fusibles.</p>
                            <h5>Interruptores automáticos FAZ</h5>
                            <p class="text-muted">Solo altura 80 mm +++ Montaje y desmontaje sin desmontaje del carril +++ Terminal doble confort elevador / garra +++ Terminal con protección de enchufe trasero.</p>
                            <h5>Devici de corriente residual digital</h5>
                            <p class="text-muted">Información preventiva +++ Advertencia antes de disparo +++ Contacto auxiliar integrado +++ Pantalla para disparo de falta a tierra.</p>
                            <h5>Fusible de base</h5>
                            <p class="text-muted">Integrar cubiertas termianales +++ Terminales dobles.</p>
                        </div>
                    </div>
                </div>
                {{-- 3.- protección electromagnética --}}
                <div class="container">
                    <div class="hide-section" id="componente_1">

                    </div>
                </div>
                {{-- 4.- contactores y guardamotores --}}
                <div class="container">
                    <div class="hide-section" id="componente_1">

                    </div>
                </div>
                {{-- 5.- arrancadores para motores --}}
                <div class="container">
                    <div class="hide-section" id="componente_1">

                    </div>
                </div>
                {{-- 6.- tabladores de distribución alumbrado/contactos --}}
                <div class="container">
                    <div class="hide-section" id="componente_1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>