@if($actual_route != 'login')
    <div class="p-5 text-center text-muted" style="position: relative;">
        <div class="text-center">
            <a class="text-dark" href="{{ route('login') }}"><i class="fas fa-cogs"></i></a>
        </div>
        <p class="text-uppercase">termomagnéticos y control de radiaciones s.a de c.v</p>
        <small class="d-block"><strong>Termomagnéticos</strong> © 2020 Todos los derechos reservados </small>
        <small class="d-block my-3">
            <a href="{{ route('aviso_privacidad') }}">Aviso de privacidad</a>
        </small>
        @if ($actual_route == 'calidad_energía' || $actual_route == 'tableros_distribucion')
            <div class="arrow_up bounce hide_on_mobile mb-5">
                <a data-scroll href="#"><i class="fas fa-arrow-up"></i></a>
            </div>
        @endif
    </div>
@endif