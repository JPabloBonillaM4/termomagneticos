<div class="modal fade" id="editImagesProject" tabindex="-1" role="dialog" aria-labelledby="editImagesProjectLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editImagesProjectLabel">Editar imágenes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height: 25rem;">
                {{-- Imagenes del proyecto --}}
                <table class="table table-bordered table-striped change-table over-auto-datatable" id="images_project_table">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle">Imagen</th>
                            <th class="align-middle">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                {{-- ID --}}
                <input type="hidden" id="id_images" name="id_images">
                <input type="hidden" id="route_images" name="route_images">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>