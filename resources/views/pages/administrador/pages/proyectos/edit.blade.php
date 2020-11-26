<div class="modal fade" id="editProject" tabindex="-1" role="dialog" aria-labelledby="editProjectLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content change-modal-color">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectLabel">Editar proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-register" method="POST" modal-id="editProject" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <!-- Nombre -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text adjusting-append-icons"><i class="fab fa-elementor"></i></span>
                        </div>
                        <input type="text" class="form-control" id="title" name="title" data-name="nombre(s)" placeholder="Titulo del proyecto" data-required="true">
                    </div>
                    <!-- Categoría -->
                    <div class="input-group mb-3" style="color: #495057;">
                        <div class="input-group-prepend">
                            <span class="input-group-text adjusting-append-icons"><i class="fas fa-globe"></i></span>
                        </div>
                        <select class="form-control select2" data-placeholder="Seleccione un modulo" name="subcategory_id" id="subcategory_id" data-name="modulo" data-required="true">
                            <option value=""></option>
                            @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Fotos -->
                    <p class="text-muted">Seleccione las nuevas imágenes para el proyecto</p>
                    <div class="input-group mb-3">
                        <input type="file" name="images[]" multiple accept="image/*">
                    </div>
                    {{-- ID --}}
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="route" name="route">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary spinEfect d-flex align-items-center">
                        <span class="spinner-border spinner-border-sm mr-1 d-none" role="status" aria-hidden="true"></span>
                        <span id="button-text">Editar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>