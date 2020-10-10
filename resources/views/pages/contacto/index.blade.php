@extends('index')
@section('title','contacto')
@section('content')
<div class="parallax-medium section1">
    <div class="text-white h-100 d-flex align-items-center justify-content-center">
        <p class="text-uppercase display-1 font-weight-bold r2_mobile text-center">contacto</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 m-auto py-5">
            <h4 class="text-center my-5">Has contacto con alguno de nuestros representantes</h2>
            <div class="row">
                <div class="col-md-4">
                    <p>BLVD Venustiano Carranza 4525-A</p>
                    <p>Col. Virreyes Residencial Saltillo Coahuila</p>
                    <p>C.P. 25230</p>
                    <p>Tel. 844 287 27 42</p>
                    <p>Cel 844 406 26 26</p>
                    <p>Cel: (222) 3 21 17 42</p>
                    <small>termomagneticosdelnorte@hotmail.com</small>
                </div>
                <div class="col-md-4 text-center">
                    <div class="font-weight-bold border-secondary border-top border-bottom p-4">
                        <p>Ubicanos</p>
                    </div>
                    <div class="p-5 border-bottom border-secondary">
                        <p>#MAP</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Termomagnéticos Y Control  de Radiaciones</p>
                    <small class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt icon-resize mr-2"></i> <span>25 Poniente 4307-4 Col. Belisario Dominguez  puebla puebla</span>
                    </small>
                    <small>C.P. 72180</small>
                    <p class="mt-3 d-flex align-items-center">
                        <i class="fab fa-whatsapp icon-resize mr-2"></i> <span>(222) 2 57 61 65</span>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="fas fa-envelope icon-resize mr-2"></i> <span>termo_prom@hotmail.com</span>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="fas fa-envelope icon-resize mr-2"></i> <span>ventas.termo@hotmail.com</span>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="fab fa-facebook-square icon-resize mr-2"></i> <span>Facebook</span>
                    </p>
                </div>
            </div>
            <div class="row my-5" id="cotizacion">
                <h3 class="text-center col-md-12">Cotización</h3>
                <form action="" class="col-md-8 m-auto">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp" placeholder="Escriba su nombre..." required>
                        {{-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control onlyNumeric" maxlength="10" id="telefono" aria-describedby="telHelp" placeholder="Escriba su número de contacto..." required>
                        {{-- <small id="telHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Escriba su correo electrónico..." required>
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="cotización">¿Qué desea cotizar?</label>
                        <textarea class="form-control" id="cotización" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection