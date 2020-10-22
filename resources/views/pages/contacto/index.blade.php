@extends('index')
@section('title','contacto')
@section('content')
<div class="parallax-medium titulo_contacto">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-4 font-weight-bold r2_mobile text-center">contacto</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 m-auto py-5">
            <h2>OMH - Termomagnéticos Y Control de Radiaciones</h2>
            <h4 class="text-center my-5 pb-5 display-5">Has contacto con alguno de nuestros representantes</h2>
            <div class="row border border-primary">
                <div class="col-md-6 border-right border-primary text-center py-5">
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://www.google.com.mx/maps/place/Termomagneticos+Y+Control+De+Radiaciones,+S.A.+De+C.V./@19.0633196,-98.2011452,17z/data=!3m1!4b1!4m5!3m4!1s0x85cfc1178837c02d:0x44331205ab9f06c4!8m2!3d19.0633196!4d-98.1989565">
                            <i class="fas fa-map-marker-alt icon-resize mr-2"></i> 
                            <span>25 Poniente 4307-4 Col. Belisario Dominguez  puebla puebla</span>
                            <small>C.P. 72180</small>
                        </a>
                    </p>
                    <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a href="tel:2222576165">
                            <i class="fas fa-phone icon-resize mr-2"></i> 
                            <span>Tel. (222) 257 6165</span>
                        </a>
                    </p>
                    <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a href="tel:2361069914">
                            <i class="fas fa-phone icon-resize mr-2"></i> 
                            <span>Tel. (222) 257 6198</span> Aqui test
                        </a>
                    </p>
                    {{-- <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=522222576165&text=hola,%20estoy%20interesado%20en%20...">
                            <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(222) 257 6165</span>
                        </a>
                    </p> --}}
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="mailto:termo_prom@hotmail.com">
                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>termo_prom@hotmail.com</span>
                        </a>
                    </p>
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="mailto:ventas.termo@hotmail.com">
                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>ventas.termo@hotmail.com</span>
                        </a>
                    </p>
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://www.facebook.com/Termomagneticos-y-Control-de-Radiaciones-135359068254318/">
                            <i class="fab fa-facebook-square icon-resize mr-2"></i> <span>Facebook</span>
                        </a>
                    </p>
                </div>
                <div class="col-md-6 text-center py-5">
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://www.google.com.mx/maps/place/Termomagneticos+Y+Control+De+Radiaciones,+S.A.+De+C.V./@19.0633196,-98.2011452,17z/data=!3m1!4b1!4m5!3m4!1s0x85cfc1178837c02d:0x44331205ab9f06c4!8m2!3d19.0633196!4d-98.1989565">
                            <i class="fas fa-map-marker-alt icon-resize mr-2"></i> 
                            <span>BLVD Venustiano Carranza 4525-A, Col. Virreyes Residencial Saltillo Coahuila</span>
                            <small>C.P. 25230</small>
                        </a>
                    </p>
                    <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a href="tel:8442872742">
                            <i class="fas fa-phone icon-resize mr-2"></i> 
                            <span>Tel. (844) 287 2742</span>
                        </a>
                    </p>
                    <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=528444062626&text=hola,%20estoy%20interesado%20en%20...">
                            <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(844) 406 2626</span>
                        </a>
                    </p>
                    <p class="mt-3 d-flex align-items-center justify-content-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=522223211742&text=hola,%20estoy%20interesado%20en%20...">
                            <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(222) 321 1742</span>
                        </a>
                    </p>
                    <p class="d-flex align-items-center justify-content-center">
                        <a target="_blank" href="mailto:termomagneticosdelnorte@hotmail.com">
                            <i class="fas fa-envelope icon-resize mr-2"></i> <span>termomagneticosdelnorte@hotmail.com</span>
                        </a>
                    </p>
                    {{-- <small>termomagneticosdelnorte@hotmail.com</small> --}}
                </div>
                <div class="col-md-12">
                    <div class="font-weight-bold border-primary border-top p-4 text-center">
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
<div class="row my-5 background_cotizacion background-simple" id="cotizacion">
    <div class="background-shadow col-md-12 py-5 text-white">
        <h3 class="text-center my-5 display-5">Cotización</h3>
        <p class="text-center">
            <i>Por favor introduce tus datos y te responderemos tan pronto nos sea posible</i>
        </p>
        <form action="{{ route('sendEmailCotizacion') }}" method="POST" class="col-md-8 m-auto pb-5">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nameHelp" placeholder="Escriba su nombre" required>
                {{-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control onlyNumeric" maxlength="10" id="telefono" name="telefono" aria-describedby="telHelp" placeholder="Escriba su número de contacto" required>
                {{-- <small id="telHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Escriba su correo electrónico" required>
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="cotización">¿Qué desea cotizar?</label>
                <textarea class="form-control" id="cotizacion" name="cotizacion" rows="3" placeholder="Listado o descripción de su pedido" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>
        </form>
    </div>
</div>
@endsection