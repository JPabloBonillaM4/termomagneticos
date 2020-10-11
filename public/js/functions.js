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
        let mapa = L.map('mapa').setView([19.0633196, -98.1989565], 17);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa);
        L.marker([19.0633196, -98.1989565]).addTo(mapa)
            .bindPopup('Ubicanos aquí')
            .openPopup()
            .bindTooltip("Termomagnéticos y control de radiaciones")
            .openTooltip();
    }

    // SIMPLE-LIGHT.BOX
    // CASOS DE ÉXITO
    $('.cases-gallery-1 a').simpleLightbox();
    $('.cases-gallery-2 a').simpleLightbox();
    $('.cases-gallery-3 a').simpleLightbox();
    $('.cases-gallery-4 a').simpleLightbox();
    $('.cases-gallery-5 a').simpleLightbox();
    $('.cases-gallery-6 a').simpleLightbox();
    $('.cases-gallery-7 a').simpleLightbox();
    $('.cases-gallery-8 a').simpleLightbox();

})();