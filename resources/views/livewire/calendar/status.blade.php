<div wire:ignore.self class="modal fade" id="employeeStatus" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block mb-0 block-themed block-transparent">
                <div class="block-header bg-danger" wire:loading.remove>
                    <h3 class="block-title">Alerta</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content" wire:loading.remove>
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Alerta!</h3>
                        <p class="mb-0">
                            Você tem certeza que deseja liberar essa ASO?
                        </p>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="date" class="form-control" wire:model='datExe'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" wire:loading.remove>
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" wire:click="dipatchAso" class="btn btn-alt-danger">
                    <i class="fa fa-check"></i> Confirmar
                </button>
            </div>
            <div class="col" wire:loading wire:target="dipatchAso">
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


