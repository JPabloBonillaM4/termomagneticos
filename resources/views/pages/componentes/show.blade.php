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
                <div class="container">
                    {{-- 1.- Protección electromagnética --}}
                    <div class="hide-section" id="componente_1">
                        <div class="row text-center">
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                        </div>
                        <div class="text-justify container my-5">
                            <h5>Circuit-breakers IZM up to 6300 A Switch-disconnectors up to 6300A</h5>
                            <p class="text-muted">Con la nueva serie IZM, EATON presenta una oferta completa de interruptores automáticos de aire (ACB) hasta 6300 A, cinco tamaños de construcción permiten seleccionar el swith más económico para cada proyecto.</p>
                            <p class="text-muted">La nueva estrella son los interruptores automáticos IZMX16. Este concepto innovadorpermite la contrucción económica de dos interruptores automáticos con un ancho de campo de 600mm.</p>
                            <p class="text-muted">No hay mayor rendimiento en un espacio tan pequeño.</p>

                            <h5>Dispositivos básicos IZM</h5>
                            <p class="text-muted">Capacidad de conmutación 440 V AC, Icu = Ics de 42 - 100kA +++ 3 o 4 polos +++ Disparadores electrónicos para protección del sistema, protección selectiva y universal, protección universal con medida de potencia +++ Corriente de operación nominal de 630-6300 A +++ Tensión nominal de funcionamiento Ue 1100 V para IZM32 ...3200-1100V.</p>

                            <h5>Completos accesorios de montaje fijo</h5>
                            <p class="text-muted">Operador de motor IZM ... M ... +++ Disparador de derivación IZM ... ST +++ Cierre real IZM ...- SR ... ++++ Subtensión real IZM ...- UV ... +++ Auxiliar contacto IZM ...- AS ... +++ Conmutador de enclavamiento IZM ... LCS ... +++ Conmutador auxiliar de bloqueo IZM ...- OTS +++ Enclavamientos mecánicos.</p>

                            <h5>Novedad mundial ARMS: mayor seguridad para el personal de mantenimiento</h5>
                            <p class="text-muted">Si hay un arco accidental, el sistema ARMS (Sistema de Mantenimiento de Reducción de Arcflash).</p>
                            <p class="text-muted">Se apaga más rápido que un dispositivo de disparo por cortocircuito. En relación con IZM, los componentes adicionales del sistema de protección de arco accidental ARCON proporcionan una protección incremental contra el arco accidental.</p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('images/componentes/componente-1.jpg') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                    </div>
                    {{-- 2.- mcb´s y equipos de control --}}
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
                        <div class="text-justify container my-5">
                            {{-- <h5>Circuit-breakers IZM up to 6300 A Switch-disconnectors up to 6300A</h5> --}}
                            <p class="text-muted">La calidad probada, las aprobaciones y la clasificación de envío representan la funcionalidad y la seguridad adecuadas para los mercados mundiales con interruptores automáticos industriales en miniatura. además de una amplia gama de dispositivos de corriente residual, LV h.b.c. Se suministran bases de fusibles e interruptores-seccionadores de fusibles.</p>
                            
                            <h5>Interruptores automáticos FAZ</h5>
                            <p class="text-muted">Solo altura 80 mm +++ Montaje y desmontaje sin desmontaje del carril +++ Terminal doble confort elevador / garra +++ Terminal con protección de enchufe trasero.</p>
                            
                            <h5>Devici de corriente residual digital</h5>
                            <p class="text-muted">Información preventiva +++ Advertencia antes de disparo +++ Contacto auxiliar integrado +++ Pantalla para disparo de falta a tierra.</p>
                            
                            <h5>Fusible de base</h5>
                            <p class="text-muted">Integrar cubiertas termianales +++ Terminales dobles.</p>

                            <h5>Interruptor fusible cilíndrico - seccionadores</h5>
                            <p class="text-muted">Con función de flash en el fusible disparado +++ se puede sellar.</p>

                            <h5>Fusible-seccionadores (vacío) C10-FD</h5>
                            <p class="text-muted">Protección de cable para generador fotovoltaico +++ Señales de indicación de disparo disparado fusible: 50-400V: intermitente, 400- 1000V: luz continua +++ Tensión de corriente nominal 1000V DC +++ Para insertos de fusibles cilíndricos en aplicaciones fotovoltaicas +++ Selable.</p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('images/componentes/componente-2.gif') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                    </div>
                    {{-- 3.- protección electromagnética --}}
                    <div class="hide-section" id="componente_3">
                        <div class="row mb-4">
                            <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                        <div class="text-justify container my-5">
                            <h5>Control seguro de energía, conmutación y control en entornos industriales, edificios y maquinaria</h5>
                            <p class="text-muted">Construcción: el concepto de protección innovador junto con las funciones de diagnóstico y comunicación lo hacen posible.</p>
                            <p class="text-muted">El surtido de disyuntores de circuitos NZM ofrece una interfaz para el sistema de comunicación smartwire-darwin.</p>
                            
                            <h5>Serie de modelos NZM1- NZM4</h5>
                            <p class="text-muted">Solo cuatro interruptores compactos cubren todas las aplicaciones +++ 3 y 4 polos +++ Montaje flexible mediante grupos de funciones modulares +++ Corriente nominal completa hasta 50 C de temperatura ambiente +++ Adecuado para ude en todo el mundo.</p>
                            
                            <h5>Manijas giratorias de acoplamiento de puerta</h5>
                            <p class="text-muted">Amplia gama de variantes para cada aplicación +++ todas las aplicaciones tienen una plantilla de perforación idéntica +++ Centrado automático +++ Soporte del eje para años de seguridad operativa +++ Instalación en la pared lateral para una instalación del interruptor principal que ahorra espacio.</p>

                            <h5>Contactos auxiliares estándar, contactos auxiliares del indicador de disparo del programa del dispositivo de comando Eaton</h5>
                            <p class="text-muted">Las piezas idénticas con un estampado favorable del programa Titan reducen la variedad de tipos y el mantenimiento de existencias +++ Instalación desde el frente a la misma posición +++ El fácil enganche reduce los costos de ensamblaje.</p>

                            <h5>Operadores remotos</h5>
                            <p class="text-muted">Concepto de funciones unificadas para todas las variantes +++ Pequeños retardos de cierre de 60-100 ms +++ Se puede bloquear y sellar para proporcionar seguridad.</p>

                            <h5>Software de diagnóstico NZM-XPC-SOFT</h5>
                            <p class="text-muted">Diagnóstico en caso de avería +++ Puesta en marcha sin errores +++ Análisis de carga en funcionamiento.</p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('images/componentes/componente-3.jpg') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                    </div>
                    {{-- 4.- contactores y guardamotores --}}
                    <div class="hide-section" id="componente_4">
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
                        <div class="text-justify container my-5">
                            <p class="text-muted">Machinery and installation  downtimes should be kept as possible. The PKZ fuseless motor- protective circuit-breakers combine short-circuit and overload protection in one device, allowing fast restart rediness.PKZM01, PKZM01 PKZM4 and PKE have  the  same  accessorie.Combines easily with DILM contactors and DS7 soft starters.</p>
                            <p class="text-muted">Connecting PKE to SmartWire-Darwin facilitates high data trasparency.</p>
                            
                            <h5>PKZM01(up to 16) motor-protective circuit-breaker with pushbuttons</h5>
                            <p class="text-muted">Motor-protective  circuit-breaker in housing for protection  types IP65 +++ Integrated  EMERGENCY STOP  and EMERGENCY  OFF pushbuttons reduce wiring.</p>
                            
                            <h5>PKZM0(up to 32 A) and PKZM4 (up to 65 A) motor-protective circuit-breakers with rotary handlea</h5>
                            <p class="text-muted">Short-circuit proof up to at least 50 kA for easy engineering +++ Trip-indicating auxiliary contact enables remote diagnosis +++ High safety through application as main switch or repair  and maintenance  switch +++ ATEX approval for protection of EEx e motors up to 65 A.</p>

                            <h5>PKE(up to 65 A) motor-protective circuit-breakers with electronic wide-range overload protection</h5>
                            <p class="text-muted">High flexibility though plug-in trip block +++ Wide current setting  ranges  enable only five trip blocks up to 65 A +++ Precise and extremely long-term stable characteristic curves+++ individual spply through integrated  current converter +++ ATEX approval for protection of  EEx e motors up to 65 A +++ Adjustable tripping classes.</p>

                            <h5>DC string circuit- breakers PKZ-SOL and DC switch-disconnectors  P-SOL(up to 63)for installations </h5>
                            <p class="text-muted">High string circuit-breaker flexibilility due to wide current range +++ Enclosed awitch-disconnector  for  external mounting(IP65)+++ Remote shutdiwn through optional seconday voltage and shunt trip +++ Voltage up to 1000V DC +++ TüV certified.</p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('images/componentes/componente-4.png') }}" class="col-md-12 img-fluid" alt="">
                        </div>
                    </div>
                    {{-- 5.- arrancadores para motores --}}
                    <div class="hide-section" id="componente_5">
                        <div class="row text-center">
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('images/casos-exito/elementa_1.jpg') }}" class="img-fluid img-gallery" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- 6.- tabladores de distribución alumbrado/contactos --}}
                    <div class="hide-section" id="componente_6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>