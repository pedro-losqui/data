<div wire:ignore.self class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block mb-0 block-themed block-transparent">
                <div class="block-header bg-warning" wire:loading.remove>
                    <h3 class="block-title">Alerta</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content" wire:loading.remove>
                    <div class="alert alert-warning alert-dismissable" role="alert">
                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Agendamento</h3>
                        <p class="mb-0">
                            Você tem certeza que marcar como agendado?
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer" wire:loading.remove>
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" wire:click="updateStatus" class="btn btn-alt-warning">
                    <i class="fa fa-check"></i> Confirmar
                </button>
            </div>
            <div class="col" wire:loading>
                <br>
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa fa-2x fa-cog fa-spin mr-3"></i>
                    <p class="mb-0">
                        Processando...
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


