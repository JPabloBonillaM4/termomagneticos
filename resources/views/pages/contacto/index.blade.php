@extends('index')
@section('title','contacto')
@section('content')
<div class="parallax-simple titulo_contacto_2">
    <div class="h-100 d-flex flex-column justify-content-center align-items-center" style="background-color: rgba(0,0,0, 0.5);">
        <h4 class="left-corner card-contact"><i>Termomagnéticos y Control de Radiaciones S.A de C.V</i></h4>
        <p class="mt-5 pt-3 text-white text-uppercase text-center title container r2_mobile margin-top-mobile">contáctanos</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto pb-5 text-white">
                    {{-- <h4 class="text-center my-5 pb-5 display-5">Has contacto con alguno de nuestros representantes</h4> --}}
                    <div class="row">
                        <div class="col-md-6 border-right border-white text-center py-3 px-5 card-contact">
                            <h3 class="text-center mb-3 text-uppercase">oficina central</h3>
                            <p class="d-flex align-items-center justify-content-center mt-5">
                                <a class="text-white" target="_blank" href="https://www.google.com.mx/maps/place/Av+25+Pte+4307,+Reforma,+Puebla,+Pue./@19.0508183,-98.2368377,18.32z/data=!4m5!3m4!1s0x85cfc727642caa89:0x288a047ba4ed9019!8m2!3d19.0509849!4d-98.2359316">
                                    <i class="fas fa-map-marker-alt icon-resize mr-2"></i> 
                                    <span>25 Poniente 4307-A Col. Belisario Dominguez  Puebla Puebla</span>
                                    <small>C.P. 72180</small>
                                </a>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="d-flex align-items-center justify-content-center">
                                        <a href="tel:2222576165" class="text-white">
                                            <i class="fas fa-phone icon-resize mr-2"></i> 
                                            <span>Tel. (222) 257 6165</span>
                                        </a>
                                    </p>
                                    <p class="mt-3 d-flex align-items-center justify-content-center">
                                        <a href="tel:2222576198" class="text-white">
                                            <i class="fas fa-phone icon-resize mr-2"></i> 
                                            <span>Tel. (222) 257 6198</span>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="d-flex align-items-center justify-content-center">
                                        <a target="_blank" href="mailto:termo_prom@hotmail.com" class="text-white">
                                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>termo_prom@hotmail.com</span>
                                        </a>
                                    </p>
                                    <p class="d-flex align-items-center justify-content-center">
                                        <a target="_blank" href="mailto:ventas.termo@hotmail.com" class="text-white">
                                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>ventas.termo@hotmail.com</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center py-3 card-contact px-5">
                            <h3 class="text-center mb-3 text-uppercase">sucursal del norte saltillo coahuila</h3>
                            <p class="d-flex align-items-center justify-content-center">
                                <a class="text-white" target="_blank" href="https://www.google.com.mx/maps/place/Blvd.+Venustiano+Carranza+4525,+Virreyes+Residencial,+25230+Saltillo,+Coah./@25.4629554,-100.9839822,17z/data=!3m1!4b1!4m5!3m4!1s0x86886d355c7d7f47:0x91888c63123a7203!8m2!3d25.4629554!4d-100.9817935">
                                    <i class="fas fa-map-marker-alt icon-resize mr-2"></i> 
                                    <span>BLVD Venustiano Carranza 4525-A, Col. Virreyes Residencial Saltillo Coahuila</span>
                                    <small>C.P. 25230</small>
                                </a>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mt-3 d-flex align-items-center justify-content-center">
                                        <a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=528444062626&text=hola,%20estoy%20interesado%20en%20...">
                                            <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(844) 406 2626</span>
                                        </a>
                                    </p>
                                    <p class="mt-3 d-flex align-items-center justify-content-center">
                                        <a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=522223211742&text=hola,%20estoy%20interesado%20en%20...">
                                            <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(222) 321 1742</span>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mt-3 d-flex align-items-center justify-content-center">
                                        <a class="text-white" href="tel:8442872742">
                                            <i class="fas fa-phone icon-resize mr-2"></i> 
                                            <span>Tel. (844) 287 2742</span>
                                        </a>
                                    </p>
                                    <p class="d-flex align-items-center justify-content-center">
                                        <a class="text-white" target="_blank" href="mailto:termomagneticosdelnorte@hotmail.com">
                                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>termomagneticosdelnorte@hotmail.com</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            {{-- <small>termomagneticosdelnorte@hotmail.com</small> --}}
                        </div>
                        <div class="col-md-12 card-contact">
                            <div class="font-weight-bold border-white border-top p-4 text-center">
                                <p>Ubicanos</p>
                            </div>
                            <div class="pb-5" id="leafletmap">
                                <div id="mapa" class="mapa"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="background-simple background_contacto" id="inicio">
    <div class="background-shadow">
        
    </div>
</div> --}}
{{-- <div class="mb-5 background_cotizacion background-simple" id="cotizacion">
    <div class="background-shadow col-md-12 py-5 text-white">
        <h3 class="text-center my-5 display-5">Cotización</h3>
        <p class="text-center">
            <i>Por favor introduce tus datos y te responderemos tan pronto nos sea posible</i>
        </p>
        <form action="{{ route('sendEmailCotizacion') }}" method="POST" class="col-md-8 m-auto pb-5" id="form_cotizacion">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" maxlength="100" id="nombre" name="nombre" aria-describedby="nameHelp" placeholder="Escriba su nombre" required>
                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control onlyNumeric" maxlength="10" id="telefono" name="telefono" aria-describedby="telHelp" placeholder="Escriba su número de contacto" required>
                <small id="telHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" maxlength="100" name="email" aria-describedby="emailHelp" placeholder="Escriba su correo electrónico" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="cotización">¿Qué desea cotizar?</label>
                <textarea class="form-control" id="cotizacion" maxlength="250" name="cotizacion" rows="3" placeholder="Listado o descripción de su pedido" required></textarea>
            </div>
            <button id="btn_cotizacion" type="submit" class="btn btn-primary w-100 mt-3">
                <span class="spinner-border spinner-border-sm mr-1 d-none" role="status" aria-hidden="true"></span>
                <span id="text-submit">Enviar</span>
            </button>
        </form>
    </div>
</div> --}}
@endsection