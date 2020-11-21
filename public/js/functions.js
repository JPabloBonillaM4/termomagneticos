(()=>{
    // CKEDITOR.replace( 'editor1' );
    // OPEN MODAL FOR COMPONENTS
    $(document).on('click','.showComponent', function(){
        let route = $(this).data('route');
        $.ajax({
            "url"    : route,
            "type"   : "GET",
            "method" : "GET",
            "cache"  : false,
            success : function(response) {
                $('#modalComponent #component_name').text(response.nombre)
                // $('#modalComponent #component_description').text(response.descripcion);
                // CÓDIGO MOMENTÁNEO
                $('.hide-section').hide();
                switch (response.id) {
                    case 1:
                            $('#componente_1').show();
                        break;
                    case 2:
                            $('#componente_2').show();
                        break;
                    case 3:
                            $('#componente_3').show();
                        break;
                    case 4:
                            $('#componente_4').show();
                        break;
                    case 5:
                            $('#componente_5').show();
                        break;
                    case 6:
                            $('#componente_6').show();
                        break;
                    default:
                        break;
                }
                $('#modalComponent').modal('show');
            }
        });
    })
    // Solo números
    $('.onlyNumeric').on('input', function (event) { 
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    //MAPA
    if(document.getElementById('mapa')){
        let mapa = L.map('mapa').setView([19.0509849, -98.2359316], 17);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa);
        L.marker([19.0509849, -98.2359316]).addTo(mapa)
            .bindPopup('Ubicanos aquí')
            .openPopup()
            .bindTooltip("Termomagnéticos y control de radiaciones")
            .openTooltip();
    }
    // DATE PICKER
    let fecha_actual = new Date();
    $('.datepickerSingle').daterangepicker({ //single DatePicker
        "locale": {
            // format: 'DD/MM/YYYY hh:mm A'
            "format"      : 'YYYY/MM/DD',
            "daysOfWeek"  : ["Dom","Lun","Mar","Mier","Jue","Vie","Sáb"],
            "monthNames"  : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
            "applyLabel"  : "Confirmar fecha",
            "cancelLabel" : "Cancelar",
        },
        "autoUpdateInput"  : false, //disable default date
        "singleDatePicker" : true,
        "showDropdowns"    : true,
        "minDate"          : fecha_actual,
        "minYear"          : fecha_actual.getFullYear() - 1,
        "maxYear"          : fecha_actual.getFullYear() + 5,
        "opens"            : "right",
        "drops"            : "right",
        "alwaysShowCalendars" : true
    });
    $('.datepickerSingle').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY'));
        let route = $(this).data('route');
        $('.checkboxCitesTime input[type="radio"]').prop('checked',false);
        $.ajax({
            "url"    : route,
            "type"   : "GET",
            "method" : "GET",
            "cache"  : false,
            "data"   : { "date" : $(this).val() },
            success : function(response) {
                if(!response.error){
                    showToast('EXITO',response.message,'green');
                    if(response.citesRegistered.length > 0){
                        response.citesRegistered.forEach(element => {
                            document.getElementById(`index_${element}`).style.display = 'none';
                        });
                    } else if(response.citesRegistered.length == 0){
                        $('.checkboxCitesTime').show();
                    }
                    processCite();
                    $('#btn_agendar').show();
                } else {
                    showToast('ERROR',response.message,'red');
                    $('#cite_text').text('Seleccione una fecha');
                    $('#date_cite').val('');
                    $('#next_step').hide();
                    $('#btn_agendar').hide();
                    $('#btn_reagendar').hide();
                }
                
            }
        });
    });
    $('#btn_reagendar').on('click', function(){
        document.getElementById('form_cite').reset();
        $('#next_step').hide();
        $('#btn_agendar').hide();
        processCite();
    });
    function processCite(){
        if($('#date_cite').val() != ''){
            $('#cite_text').text('Fecha programada');
            $('#next_step').show();
            $('#btn_reagendar').show();
        } else {
            $('#cite_text').text('Seleccione una fecha');
            $('#btn_reagendar').hide();
        }
    }
    // $('#form_cite input').on('input', function(){
    //     enableButtonCite();
    // });
    // $('#form_cite textarea').on('input', function(){
    //     enableButtonCite();
    // });
    $('#form_cite').on('submit', function(event){
        checkData = enableButtonCite();
        if(checkData == false){
            event.preventDefault();
            return false;
        }
        $('#btn_agendar').attr('disabled', true);
        $('#btn_agendar span.spinner-border').removeClass('d-none');
        $('#btn_agendar span#text-submit').text('Agendando cita');
    });
    $('#form_cotizacion').on('submit', function(event){
        $('#btn_cotizacion').attr('disabled', true);
        $('#btn_cotizacion span.spinner-border').removeClass('d-none');
        $('#btn_cotizacion span#text-submit').text('Enviando cotización');
    });
    function enableButtonCite(){
        let data         = $('#form_cite').serializeArray();
        let radioChecked = existeInsideArray(data,'time_cite');
        for (const key in data) {
            if (data.hasOwnProperty(key)) {
                const element = data[key];
                if(element.value == '' || radioChecked == false){
                        showToast('ERROR','Favor de seleccionar una hora','red');
                        return false;
                    break;
                } else {
                    return true
                }
            }
        }
    }
    function existeInsideArray(arr, name)
    {
        let response = false;
        $.map(arr, function(value){
            if(value.name == name){ 
                response = true;
                return false;
            }
        });
        return response;
    }
    function showToast(title, message, color){
        iziToast.show({
            "title"    : title,
            "message"  : message,
            "color"    : color,
            "position" : "topRight"
        });
    }
    // SIMPLE-LIGHT.BOX
    // CASOS DE ÉXITO
    if($('.cases-gallery-1 a').length > 0)
        $('.cases-gallery-1 a').simpleLightbox();
    if($('.cases-gallery-2 a').length > 0)
        $('.cases-gallery-2 a').simpleLightbox();
    if($('.cases-gallery-3 a').length > 0)
        $('.cases-gallery-3 a').simpleLightbox();
    if($('.cases-gallery-4 a').length > 0)
        $('.cases-gallery-4 a').simpleLightbox();
    if($('.cases-gallery-5 a').length > 0)
        $('.cases-gallery-5 a').simpleLightbox();
    if($('.cases-gallery-6 a').length > 0)
        $('.cases-gallery-6 a').simpleLightbox();
    if($('.cases-gallery-7 a').length > 0)
        $('.cases-gallery-7 a').simpleLightbox();
    if($('.cases-gallery-8 a').length > 0)
        $('.cases-gallery-8 a').simpleLightbox();
    if($('.cases-gallery-9 a').length > 0)
        $('.cases-gallery-9 a').simpleLightbox();
})();