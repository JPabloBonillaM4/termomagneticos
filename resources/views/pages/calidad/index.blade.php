@extends('index')
@section('title','calidad')
@section('content')
    <div class="parallax-medium section1">
        <div class="text-white h-100 d-flex align-items-center justify-content-center">
            <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">calidad de energía</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="row text-center">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">bancos de capacitores fijos</h2>
                    <div class="col-md-4 mt-3">
                        <div>
                            <h4 class="text-uppercase text-success">eks</h4>
                            <p>Conexión a clemas</p>
                        </div>
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-md-4 mt-3">
                        <div>
                            <h4 class="text-uppercase text-success">eki</h4>
                            <p>Coneción a ITM</p>
                        </div>
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-md-4 mt-3">
                        <div>
                            <h4 class="text-uppercase text-success">krf</h4>
                            <p>Con ITM y reactores de rechazo</p>
                        </div>
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row text-center">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">bancos de capacitores automáticos</h2>
                    <div class="col-md-3 mt-3">
                        <h4 class="text-uppercase text-success">ka</h4>
                        <p>Conexión a ITM</p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="text-uppercase text-success">kaz</h4>
                        <p>Coneción a zapatas</p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="text-uppercase text-success">kr</h4>
                        <p>Con ITM y reactores de rechazo</p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="text-uppercase text-success">krz</h4>
                        <p>Con zapatas y reactores de rechazo</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row text-center">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">banco de capacitores / conmutación por tiristores</h2>
                    <p class="text-center col-md-12">Procedimiento de desconexión suave y alta frecuencia</p>
                    <div class="col-md-6 mt-3">
                        <h4 class="text-uppercase text-success">krty</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">aplicaciones</h2>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Elevadores comerciales</a>
                            </li>
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Hornos eléctricos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Elevadores comerciales</a>
                            </li>
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Hornos eléctricos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Elevadores comerciales</a>
                            </li>
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Hornos eléctricos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-md-4 mt-4">
                    </div>
                    <div class="col-md-4 mt-4">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row my-5">
                    <p class="col-md-12 text-center font-weight-bold">Sistemas diseñados para la contaminación de armónicos en la red y reducir problemas de calidad de la energía</p>
                    <div class="col-md-12 mt-3">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">¿cuando usar filtros activos de armónicos?</h2>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Alto contenido de armónicos</a>
                            </li>
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Corrientesaltas en el neutro</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Compoensación de bajo F.P.</a>
                            </li>
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Desequilibrio de fases</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-2 d-flex justify-content-center">
                        <ul class="p-0 list-unstyled">
                            <li>
                                <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Efecto Flicker</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-md-4 mt-4">
                    </div>
                    <div class="col-md-4 mt-4">
                        <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 mb-3 display-5 font-weight-bold r2_mobile">calidad de energía</h2>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-12 row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/iec.png') }}" alt="" class="img-little">
                                </div>
                                <p class="font-weight-bold col-md-10 m-0">Norma de construcción IEC 61439</p>
                            </div>
                        </div>
                        <div class="mt-4 col-md-12">
                            <p class="font-weight-bold">Sistema 3F, 4H, 60Hz en 230V & 480V</p>
                            <ul class="list-unstyled pl-3">
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Tensión de operación un: 230V AC & 480V AC</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Sobretensión continua (24Hrs): 260V AC & 525V AC</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> 8 horas al día: 290V AC & 580 AC</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> 30 minutos al día: 300V & 600V AC</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Máxima tensión permanente: 800V AC & 600V AC</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Vida útil: 130,000 horas</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Máxima temperatura: 60° C</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Perdidas disipación de calor: 0.25-0.4W/KVAr</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Gabinete: acero al carbón</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Grado de protección IP31</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Servicio interior</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 col-md-12">
                            <p class="font-weight-bold">Regulador de reactiva</p>
                            <ul class="list-unstyled pl-3">
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Regulador inteligente de energía activa</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Medición: 1 fase, kW, kVA, kvar, V, I,THD-I, THD-V y Cos PHI</a>
                                </li>
                                <li>
                                    <a class="text-muted d-block" href="javascript:void(0)"><i class="fas fa-angle-right text-muted"></i> Un relevador para alarma programable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-12 row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/iso.png') }}" alt="" class="img-little">
                                </div>
                                <p class="font-weight-bold col-md-10 m-0">Norma de construcción IEC 61439</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4">
                                <p class="font-weight-bold">Capacior</p>
                                <p class="text-muted">Capacior trifásico  de potencia tipo seco fabricado de polipropileno metalizado  con dieléctrico  aislante en gas inerte(N2), elevado al alto vacio, protección interna de sobre-presión  y resistencia  de descarga, (libre de PBC). CONEXIÓN  interna DELTA.</p>
                            </div>
                            <div class="mt-4">
                                <p class="font-weight-bold">Reactor</p>
                                <p class="text-muted">Reactor trifácico  desintonizados al 7% y al 14% para una frecuencia  resonante  de 227 Hz y 137 Hz, fabricando con núcleo de hierro, impregnado al vacío con resina poliéster clase f, awitch de temperatura en los devanados  de cobre a 125°C. enfriamiento por aire.</p>
                            </div>
                            <div class="mt-4">
                                <p class="font-weight-bold">Contactor</p>
                                <p class="text-muted">Especiales para cargas capacitivas</p>
                            </div>
                            <div class="mt-4">
                                <p class="font-weight-bold">Tiristor</p>
                                <p class="text-muted">Conmutación controlada por microprocesador</p>
                                <p class="text-muted">Sin piezas de desgaste</p>
                                <p class="text-muted">Mantenimiento libre</p>
                                <p class="text-muted">Conexión mejorada, tiempo de reacción 20ms</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection