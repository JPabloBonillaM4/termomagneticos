<div class="menu-float">
    <a href="javascript:void(0)" title="Calendario" data-toggle="modal" data-target="#modal_cita">
        <i class="fas fa-calendar-alt"></i>
        <span>Citas</span>
    </a>
    <a href="{{ url('contacto#cotizacion') }}" data-scroll title="Calendario">
        <i class="fas fa-file-alt"></i>
        <span>Cotización</span>
    </a>
    <a target="_blank" href="https://api.whatsapp.com/send?phone=522223850413&text=hola,%20estoy%20interesado%20en%20...">
        <i class="fab fa-whatsapp"></i>
        <span>Whatsapp</span>
    </a>
</div>

<div class="modal fade" id="modal_cita" tabindex="-1" aria-labelledby="modal_citaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_citaLabel">Reservar cita en línea</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sendEmailCite') }}" method="POST" id="form_cite">
                @csrf
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold text-dark text-2" id="cite_text">Seleccione una fecha</label>
                        <input class="d-block datepickerSingle form-control" placeholder="Click aquí para elegir fecha..." type="text" name="date_cite" id="date_cite" autocomplete="off" data-route="{{ route('getCites') }}">
                    </div>
                    <div class="mt-3" id="next_step" style="display: none;">
                        <div class="form-group col-md-12">
                            <label class="font-weight-bold text-dark text-2" id="cite_text">Hora</label>
                            <div class="row container">
                                @foreach ($times_cite as $time) 
                                    <div class="form-check col-md-3 checkboxCitesTime" id="index_{{ $time }}">
                                        <input class="form-check-input" type="radio" name="time_cite" id="time_cite_{{ $loop->index + 1 }}" value="{{ $time }}">
                                        <label class="form-check-label" for="time_cite_{{ $loop->index + 1 }}">
                                            {{ $time }}
                                        </label>
                                    </div>
                                @endforeach
                                <label class="font-weight-bold text-dark text-2 mt-5" id="cite_text">Llenar información de contacto</label>
                                <div class="form-group col-md-12 p-0">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" maxlength="100" class="form-control" id="nombre_cita" name="nombre_cita" aria-describedby="nameHelp" placeholder="Escriba su nombre completo" required>
                                </div>
                                <div class="form-group col-md-12 p-0">
                                    <label for="correo">Correo</label>
                                    <input type="email" maxlength="100" class="form-control" id="correo_cita" name="correo_cita" aria-describedby="nameHelp" placeholder="Escriba su correo para contactarnos con usted" required>
                                </div>
                                <div class="form-group col-md-12 p-0">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" maxlength="10" class="form-control" id="telefono_cita" name="telefono_cita" aria-describedby="nameHelp" placeholder="Escriba su teléfono completo" required>
                                </div>
                                <div class="form-group col-md-12 p-0">
                                    <label for="motivo">Motivo de la cita</label>
                                    <textarea class="form-control" maxlength="250" id="motivo" name="motivo" rows="3" placeholder="Descripción del motivo para agendar su cita" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btn_reagendar" style="display: none;">Seleccionar otra fecha</button>
                    <button type="submit" class="btn btn-success" id="btn_agendar" style="display: none;">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>