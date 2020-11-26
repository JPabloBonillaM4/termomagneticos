<div class="modal fade" id="reactiveRegister" tabindex="-1" role="dialog" aria-labelledby="reactiveRegisterLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content change-modal-color">
            <div class="modal-header">
                <h5 class="modal-title" id="reactiveRegisterLabel">Reactivar proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="reactive-register" method="POST" modal-id="reactiveRegister">
                <div class="modal-body">
                    @csrf
                    <p>¿Está seguro que desea realizar la reactivación?</p>
                    {{-- ID --}}
                    <input type="hidden" id="id_reactive" name="id_reactive">
                    <input type="hidden" id="route_reactive" name="route_reactive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary spinEfect d-flex align-items-center">
                        <span class="spinner-border spinner-border-sm mr-1 d-none" role="status" aria-hidden="true"></span>
                        <span id="button-text">Reactivar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>