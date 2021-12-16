@if($employee)
    <div wire:ignore.self class="modal fade" id="employeeStatus" tabindex="-1" role="dialog"
        aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block mb-0 block-themed block-transparent">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Solicitação {{ $employee->datSol }}</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <div class="col-12">
                                <textarea class="form-control" wire:model='msgRet' rows="6" placeholder="Anotações.."></textarea>
                            </div>
                        </div>
                        {{ $minutos }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click='recordStatus' class="btn btn-alt-success">Atualizar</button>
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endif
