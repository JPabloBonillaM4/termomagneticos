<div>
    <p>Nombre del solicitante: "{{ $datos->nombre_cita }}"</p>
    <p>No. de contacto : "{{ $datos->telefono_cita }}"</p>
    <p>Correo electrónico: "{{ $datos->correo_cita }}"</p>
    <p>Fecha: "{{ $datos->date_cite }}"</p>
    <p>Hora: "{{ $datos->time_cite }}"</p><br />
    <p><b>MOTIVO</b></p>
    <P>{{ $datos->motivo }}</p>
</div>