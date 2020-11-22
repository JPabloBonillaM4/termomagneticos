<div class="modal fade" id="editSubcategory" tabindex="-1" role="dialog" aria-labelledby="editSubcategoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content change-modal-color">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubcategoryLabel">Editar categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-register" method="POST" modal-id="editSubcategory">
                <div class="modal-body">
                    @csrf
                    <!-- Nombre -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text adjusting-append-icons"><i class="fab fa-elementor"></i></span>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" data-name="nombre(s)" placeholder="Nombre de la categoria" data-required="true">
                    </div>
                    <!-- Categoría -->
                    <div class="input-group mb-3" style="color: #495057;">
                        <div class="input-group-prepend">
                            <span class="input-group-text adjusting-append-icons"><i class="fas fa-globe"></i></span>
                        </div>
                        <select class="form-control select2" data-placeholder="Categoría" name="categorie_id" id="categorie_id" data-name="categoría" data-required="true">
                            <option value=""></option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
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