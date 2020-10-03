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
                
                    default:
                        break;
                }

                $('#modalComponent').modal('show');
            }
        });
    })

    // SIMPLE-LIGHT.BOX
    // CASOS DE ÉXITO
    $('.cases-gallery-1 a').simpleLightbox();
    $('.cases-gallery-2 a').simpleLightbox();
    $('.cases-gallery-3 a').simpleLightbox();
    $('.cases-gallery-4 a').simpleLightbox();
})();