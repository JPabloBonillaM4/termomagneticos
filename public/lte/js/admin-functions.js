(() => {
    // GENERAL FUNCTION TO SAVE FORM DATA
    $(document).on('submit','#new-register', function(event) {
        event.preventDefault();
        let dataObtainded = saveData($(this));
        if(dataObtainded !== undefined){
            loadButton();
            dataObtainded.then(response => {
                loadButton();
                if(!response.error){
                    swal({
                        title: "¡EXITO!",
                        text: response.message,
                        icon: "success",
                    }).then(() => {
                        $(`#${$(this).attr('id')}`).trigger("reset");
                        if(typeof response.redirectTo !== 'undefined'){
                            window.location.href = `${window.location.origin}/${response.redirectTo}`
                        }
                    });
                } else {
                    swal({
                        title: "¡ERROR!",
                        text: response.message,
                        icon: "error",
                    });
                }
            });
        }
    });
    // GENERAL FUNCTION TO EDIT FORM DATA
    $(document).on('submit','#edit-register', function(event) {
        event.preventDefault();
        let dataObtainded = editData($(this));
        if(dataObtainded !== undefined){
            loadButton();
            dataObtainded.then(response => {
                loadButton();
                if(!response.error){
                    swal({
                        title: "¡EXITO!",
                        text: response.message,
                        icon: "success",
                    }).then(() => {
                        $(`#${$(this).attr('modal-id')}`).modal('hide');
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "¡ERROR!",
                        text: response.message,
                        icon: "error",
                    });
                }
            });
        }
    });
    // GENERAL FUNCTION TO DELETE REGISTER
    $(document).on('submit','#delete-register', function(event){
        event.preventDefault();
        let dataObtainded = deleteRegister($(this));
        if(dataObtainded !== undefined){
            loadButton();
            dataObtainded.then(response => {
                loadButton();
                if(!response.error){
                    swal({
                        title: "¡EXITO!",
                        text: response.message,
                        icon: "success",
                    }).then(() => {
                        $(`#${$(this).attr('modal-id')}`).modal('hide');
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "¡ERROR!",
                        text: response.message,
                        icon: "error",
                    });
                }
            });
        }
    });
    // GENERAL FUNCTION TO REACTIVE REGISTER
    $(document).on('submit','#reactive-register', function(event){
        event.preventDefault();
        let dataObtainded = reactiveRegister($(this));
        if(dataObtainded !== undefined){
            loadButton();
            dataObtainded.then(response => {
                loadButton();
                if(!response.error){
                    swal({
                        title: "¡EXITO!",
                        text: response.message,
                        icon: "success",
                    }).then(() => {
                        $(`#${$(this).attr('modal-id')}`).modal('hide');
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "¡ERROR!",
                        text: response.message,
                        icon: "error",
                    });
                }
            });
        }
    });
    // OPEN EDIT IMAGES MODAL
    $(document).on('click','.editImages',function(){
        let route        = $(this).attr('data-route'),
            modal        = $(this).attr('data-modal'),
            route_delete = $(this).attr('data-delete');
        conexionController(route,'GET').then(response => {
            if(!response.error){
                $('#id_images').val(response.project.id);
                $('#route_images').val(route_delete);
                let images = response.project.images;
                $('#images_project_table').dataTable().fnDestroy();
                let tabla  = $('#images_project_table').DataTable({
                    "ordering" : false,
                    "language" : {
                        "sProcessing"        : "Procesando...",
                        "sLengthMenu"        : "Mostrar _MENU_ registros",
                        "sZeroRecords"       : "No se encontraron resultados",
                        "sEmptyTable"        : "Ningún dato disponible",
                        "sInfo"              : "Registros del _START_ al _END_ (_TOTAL_ registros)",
                        "sInfoEmpty"         : "0 Registros",
                        "sInfoFiltered"      : "- (filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix"       : "",
                        "sSearch"            : '<span class="fa fa-search"></span>',
                        "sSearchPlaceholder" : "Buscar",
                        "sUrl"               : "",
                        "sInfoThousands"     :  ",",
                        "sLoadingRecords"    : "Cargando...",
                        "oPaginate"          : {
                            "sFirst"    : "Primero",
                            "sLast"     : "Último",
                            "sNext"     : "Siguiente",
                            "sPrevious" : "Anterior"
                        },
                        "oAria"              : {
                            "sSortAscending"  : ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending" : ": Activar para ordenar la columna de manera descendente"
                        }
                    },
                    "lengthMenu" : [[5,10,25,50,-1],["5","10","25","50","Todos"]],
                    "fixedColumns": true
                });
                tabla.clear().draw();
                images.forEach(element => {
                    rowsCss = tabla.row.add([
                        `
                            <img src="${window.location.origin}/${element.image_url}" width="100" height="100" class="img-fluid" alt="img_proyecto">
                        `,
                        `
                            <button type="button" class="btn btn-danger spinEfect deleteImageRegister" data-id="${element.id}">
                                <span class="spinner-border spinner-border-sm mr-1 d-none" role="status" aria-hidden="true"></span>
                                <span id="button-text">
                                    <i class="fas fa-times-circle"></i>
                                </span>
                            </button>
                        `
                    ]).draw().node();
                    $(rowsCss).css({"text-align":'center',"vertical-align":'middle !important'});
                });
                $(`#${modal}`).modal('show')
            } else {
                swal({
                    title : "¡ERROR!",
                    text  : response.message,
                    icon  : "error"
                })
            }
        })
    })
    $(document).on('click','.deleteImageRegister',function(){
        let route = $('#route_images').val() + '/' + $(this).data('id');
        swal({
            title: "Eliminar imagen del proyecto",
            text: `¿Está seguro que desea eliminar esta imagen?`,
            icon: "warning",
            buttons: ['Cancelar','Si, eliminar'],
        })
        .then((isChange) => {
            if (isChange) {
                conexionController(route,'POST').then(response => {
                    console.log(response);
                    if(!response.error){
                        swal({
                            title: "¡EXITO!",
                            text: response.message,
                            icon: "success",
                        }).then(() => {
                            $(this).parents('tr').remove()
                        });
                    } else {
                        swal({
                            title: "¡ERROR!",
                            text: response.message,
                            icon: "error",
                        });
                    }
                });
            }
        });
    })
    // CAMBIAR ESTATUS DE TORNEO
    $(document).on('click','.changeStatusTournament', function(){
        let data  = new FormData(),
            route = $(this).attr('data-route'),
            status = $(this).attr('data-text');
        data.append('id',$(this).attr('data-id'));
        data.append('status',$(this).attr('data-status'));

        swal({
            title: "Cambio de estatus al torneo",
            text: `¿Está seguro que desea ${status} el torneo?`,
            icon: "warning",
            buttons: ['Cancelar','Si, cambiar'],
        })
        .then((isChange) => {
            if (isChange) {
                conexionController(route,'POST',data).then(response => {
                    if(!response.error){
                        swal({
                            title: "¡EXITO!",
                            text: response.message,
                            icon: "success",
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        swal({
                            title: "¡ERROR!",
                            text: response.message,
                            icon: "error",
                        });
                    }
                });
            }
        });
    });
    // MOSTRAR Y ELIMINAR LOGS
    $(document).on('click','.logRead',function(event) {
        event.preventDefault();
        let data  = new FormData();
        data.append('id',$(this).attr('data-id'));
        conexionController(window.location.origin + '/InactiveLog','POST',data).then(response => {
            if(!response.error){
                let updateTotalLogs = parseInt($('#totalNotRead').text()) - 1;
                $('#totalNotRead').text(updateTotalLogs);
                $(this).parents('.logDetail').slideUp('1000');
                setTimeout(() => {
                    $(this).parents('.logDetail').remove();
                }, 1000);
                if(updateTotalLogs == 0){
                    $('#log-box').html(`
                        <div class="container my-2">
                            <div class="alert alert-warning text-center m-0" role="alert" style="background: rgba(255,193,7,0.5);">
                                Ninguna notificación
                            </div>
                        </div>
                    `);
                }
            }
        });
    });
    // DELETE ALL LOGS
    $('#deleteAllLogs').click(function(event){
        event.preventDefault();
        conexionController(window.location.origin + '/InactiveAllLog','POST').then(response => {
            if(!response.error){
                $('.logDetail').slideUp('1000');
                setTimeout(() => {
                    $('.logDetail').remove();
                }, 1000);
                $('#totalNotRead').text('0');
                $('#log-box').html(`
                    <div class="container my-2">
                        <div class="alert alert-warning text-center m-0" role="alert" style="background: rgba(255,193,7,0.5);">
                            Ninguna notificación
                        </div>
                    </div>
                `);
                $('.dropdown-item').remove();
                showAlert('',response.message,'green')
            } else {
                showAlert('ERROR',response.message,'red')
            }
        });
    });
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });
    $('#deleteAllLogs').click(function (e) {
        e.stopPropagation();
    });
    // MODAL IMG
    $(document).on('click', '.modal-img', function (e) {
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        $('#set-img').attr('src',$(this).attr('src'));
        $('#set-img').attr('src',$(this).attr('src'));
        document.getElementById("modal-img").style.display   = "block";;
        let captionText       = document.getElementById("caption");
        captionText.innerHTML = $(this).attr('alt');
        let span              = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            document.getElementById("modal-img").style.display = "none";
        }
    });
    // FUNCTION TO DELETE USER PARTICIPATION BY TOURNAMENT
    $(document).on('click','.deleteUserTournament', function(){
        let data  = new FormData();
        data.append('id',$(this).attr('data-id'));
        data.append('tournament_id',$(this).attr('data-tournament'));
        swal({
            title: "Eliminación de torneo",
            text: `¿Está seguro que desea eliminar la participación a este usuario del torneo?`,
            icon: "warning",
            buttons: ['Cancelar','Si, eliminar'],
        })
        .then((isChange) => {
            if (isChange) {
                conexionController($(this).attr('data-route'), 'POST',data).then(response => {
                    if(!response.error){
                        swal({
                            title: "¡EXITO!",
                            text: response.message,
                            icon: "success",
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        swal({
                            title: "¡ERROR!",
                            text: response.message,
                            icon: "error",
                        });
                    }
                });
            }
        });
    });

    // FUNCTION TO SET CHAMPION BY TOURNAMENT
    $(document).on('click','.setChampion', function(){
        let data  = new FormData();
        data.append('id',$(this).attr('data-id'));
        data.append('player',$(this).attr('data-player'));
        swal({
            title: "Asignar victoria de torneo",
            text: `¿Está seguro que desea asignar a este usuario la victoria del torneo?`,
            icon: "warning",
            buttons: ['Cancelar','Si, ¡VICTORIOSO!'],
        })
        .then((isChange) => {
            if (isChange) {
                conexionController($(this).attr('data-route'), 'POST',data).then(response => {
                    if(!response.error){
                        swal({
                            title: "¡EXITO!",
                            text: response.message,
                            icon: "success",
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        swal({
                            title: "¡ERROR!",
                            text: response.message,
                            icon: "error",
                        });
                    }
                });
            }
        });
    });
    // DOWNLOAD EXCEL BY TOURNAMENT
    $('#excel-cite-download').click(function(){
        window.location.href = `${window.location.origin}/excel-cites`;
    });
})();