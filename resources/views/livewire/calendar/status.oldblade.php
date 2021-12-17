<div wire:ignore.self class="modal fade" id="employeeStatus" tabindex="-1" role="dialog"
    aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block mb-0 block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Status</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">

                    <div class="form-group row">
                        <div class="col-12">
                            <textarea class="form-control" wire:model='msgRet' rows="6" placeholder="Anotações.." maxlength="300"></textarea>
                        </div>
                    </div>
                </div>

                <div class="block-content block-content-full">
                    {{-- @foreach ($status as $item)
                        <p class="mb-5">
                            <strong>2019-07-25</strong> to <strong>2019-08-25</strong>
                        </p>
                        <p class="text-muted">
                            {{ $item->msgRet }}
                        </p>
                    @endforeach --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click='recordStatus' class="btn btn-alt-success">Atualizar</button>
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
            </div>
            <div class="col" wire:loading wire:target="recordStatus">
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
