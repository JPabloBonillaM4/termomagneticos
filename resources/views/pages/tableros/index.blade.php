@extends('index')
@section('title','tableros')
@section('content')
    <div class="parallax-medium section1">
        <div class="text-white h-100 d-flex align-items-center justify-content-center">
            <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">control y distribución</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="parallax-intermediate section_distribution">
                    <h2 class="text-uppercase text-center col-md-12 mt-5 display-4 font-weight-bold r2_mobile">corriente de empleo hasta 1250 A</h2>
                    <div class="col-md-12">
                        <div>
                            <h4 class="text-uppercase font-weight-bold text-success">beneficios</h4>
                        </div>
                        <div class="row">
                            <ul class="list-group list-group-flush col-md-6 pt-2">
                                <li class="list-group-item"><i class="fas fa-angle-right text-muted mr-3"></i> El sistema reduce el tiempo de instalación</li>
                                <li class="list-group-item"><i class="fas fa-angle-right text-muted mr-3"></i> Incrementa la flexibilidad modular</li>
                                <li class="list-group-item"><i class="fas fa-angle-right text-muted mr-3"></i> Montaje</li>
                                <li class="list-group-item"><i class="fas fa-angle-right text-muted mr-3"></i> Cubiertas para protección contra contactos accidentales</li>
                            </ul>
                            <div class="col-md-6 pt-2 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/section_3.jpg') }}" alt="" class="img-fluid img-size" />
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-uppercase text-center col-md-12 my-5 display-4 font-weight-bold r2_mobile">Aplicaciones</h2>
                <div class="col-md-12">
                    <div class="row text-center">
                        <div class="col-md-3 mt-2">
                            <a class="text-success aplication" href="javascript:void(0)">
                                <i class="fas fa-angle-right text-muted mr-3"></i> Sector comercial
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a class="text-success aplication" href="javascript:void(0)">
                                <i class="fas fa-angle-right text-muted mr-3"></i> Farmacéutico
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a class="text-success aplication" href="javascript:void(0)">
                                <i class="fas fa-angle-right text-muted mr-3"></i> Automotriz
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a class="text-success aplication" href="javascript:void(0)">
                                <i class="fas fa-angle-right text-muted mr-3"></i> Alimentos
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3 mb-5">
                        <img src="{{ asset('images/control_distribucion_energia/aplicaciones.jpg') }}" class="col-md-6 img-fluid mt-2" alt="">
                        <img src="{{ asset('images/control_distribucion_energia/aplicaciones_1.jpg') }}" class="col-md-6 img-fluid mt-2" alt="">
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <h3 class="text-center">Policarbonato de alto impacto IP 66</h3>
                    <div class="row mt-3 mb-5">
                        <img src="{{ asset('images/control_distribucion_energia/policarbonato_1.jpg') }}" class="col-md-6 img-fluid mt-2" alt="">
                        <img src="{{ asset('images/control_distribucion_energia/policarbonato_2.jpg') }}" class="col-md-6 img-fluid mt-2" alt="">
                    </div>
                    <div class="row">
                        <h4 class="col-md-12 text-center mt-3 mb-5">Flexible, confiable y seguro</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="text-justify text-muted">
                                    <p>Unidad extraíble sin la interrupción del proceso.</p>
                                    <p>Mecanismo de interlock para modo seguro de operación / desconexión / posición de pruebas.</p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ asset('images/section_3.jpg') }}" class="img-fluid mt-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3 pb-5">
                    <div class="row">
                        <div class="col-md-7 mt-5 mobile_center">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('images/iec.png') }}" alt="" class="img-little">
                                </div>
                                <p class="font-weight-bold col-md-10 m-0">Norma de construcción IEC 61439</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">Grados de protección</span>
                                        <span class="col-md-8">IP31, IP54 / IP55</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Test de impacto
                                        </span>
                                        <span class="col-md-8">IK10</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Humedad relativa
                                        </span>
                                        <span class="col-md-8">-5% hasta 40%</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Tensión de aislamiento
                                        </span>
                                        <span class="col-md-8">1000 V</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Tensión de servicio
                                        </span>
                                        <span class="col-md-8">690 V</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Frecuencia
                                        </span>
                                        <span class="col-md-8">60 Hz</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Capacidad de bus
                                        </span>
                                        <span class="col-md-8">5000 A</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Intensidad de corta duración
                                        </span>
                                        <span class="col-md-8">Hasta 100 kA / 1s</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Material
                                        </span>
                                        <span class="col-md-8">Acero al carbón</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Espesores de lámina
                                        </span>
                                        <span class="col-md-8">Marco y puerta 2mm / Tapas 1.5mm</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Color
                                        </span>
                                        <span class="col-md-8">RAL 7035</span>
                                    </div>
                                    <div class="row my-2">
                                        <span class="col-md-4 font-weight-bold">
                                            Coeficiente sísmico
                                        </span>
                                        <span class="col-md-8">0.25g / 0.5g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mt-5 mobile_center">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ asset('images/iso.png') }}" alt="" class="img-little">
                                </div>
                                <p class="font-weight-bold col-md-9 m-0">Proceso de integración certificado</p>
                            </div>
                            <div class="my-3">
                                <p class="mt-4">Grado de segregación</p>
                                <div class="row align-items-center mt-5 mb-3">
                                    <div class="col-md-3">
                                        <img src="{{ asset('images/control_distribucion_energia/forma_1.png') }}" alt="" class="img-medium-little">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="font-weight-bold m-0">Forma 1</p>
                                        <p class="m-0">Sin segregración interna</p>
                                    </div>
                                </div>
                                <div class="row align-items-center my-3">
                                    <div class="col-md-3">
                                        <img src="{{ asset('images/control_distribucion_energia/forma_2.png') }}" alt="" class="img-medium-little">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="font-weight-bold m-0">Forma 2b</p>
                                        <p class="m-0">Terminales separadas del bus</p>
                                    </div>
                                </div>
                                <div class="row align-items-center my-3">
                                    <div class="col-md-3">
                                        <img src="{{ asset('images/control_distribucion_energia/forma_3.png') }}" alt="" class="img-medium-little">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="font-weight-bold m-0">Forma 3b</p>
                                        <p class="m-0">Unidades separadas y terminales separadas del bus</p>
                                    </div>
                                </div>
                                <div class="row align-items-center my-3">
                                    <div class="col-md-3">
                                        <img src="{{ asset('images/control_distribucion_energia/forma_4.png') }}" alt="" class="img-medium-little">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="font-weight-bold m-0">Forma 4b</p>
                                        <p class="m-0">Unidades y terminales en distinto compartimiento</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <h2 class="text-uppercase text-center col-md-12 my-5 pt-5 display-4 font-weight-bold r2_mobile">Modelo de negocio</h2>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="{{ asset('images/control_distribucion_energia/modelo_1.jpg') }}" alt="" class="img-medium-little">
                            </div>
                            <p class="text-uppercase text-center mt-3">usuario final</p>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="{{ asset('images/control_distribucion_energia/modelo_2.jpg') }}" alt="" class="img-medium-little">
                            </div>
                            <p class="text-center mt-3">
                                <span class="text-uppercase">especificador</span>
                                <span>- Establece necesidades del cliente -</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="{{ asset('images/control_distribucion_energia/modelo_3.jpg') }}" alt="" class="img-medium-little">
                            </div>
                            <p class="text-center mt-3">
                                <span class="text-uppercase">panel builder</span>
                                <span>- Verificación de rutina -</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="{{ asset('images/control_distribucion_energia/modelo_4.jpg') }}" alt="" class="img-medium-little">
                            </div>
                            <p class="text-center mt-3">
                                <span class="text-uppercase">fabricante original</span>
                                <span>- Diseño verificado -</span>
                            </p>
                        </div>
                    </div>
                    <h2 class="text-uppercase text-center col-md-12 my-5 pt-5 display-4 font-weight-bold r2_mobile">Solución Panel Builder</h2>
                </div>
            </div>
        </div>
    </div>
@endsection