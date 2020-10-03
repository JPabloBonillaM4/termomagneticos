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
                $('#modalComponent #component_description').text(response.descripcion);
                $('#modalComponent').modal('show');
            }
        });
    })

    // SIMPLE-LIGHT.BOX
    $('.energy-gallery-1 a').simpleLightbox();
    $('.energy-gallery-2 a').simpleLightbox();
    $('.energy-gallery-3 a').simpleLightbox();
    $('.energy-gallery-4 a').simpleLightbox();
})();