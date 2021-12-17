<div wire:ignore.self class="modal fade" id="employeeStatus" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block mb-0 block-themed block-transparent">
                <div class="block-header bg-info">
                    <h3 class="block-title">Atualização de status</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-sticky-note"></i>
                                    </span>
                                </div>
                                <textarea class="form-control" wire:model='msgRet' rows="8" placeholder="Anotações.."
                                    maxlength="300"></textarea>
                            </div>
                            <hr>
                            @if($employee)
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            <i class="fa fa-history fa-fw mr-5 text-muted"></i> Histórico
                                        </h3>
                                    </div>
                                    <hr>
                                    @foreach($employee->moviments as $item)
                                            <p class="mb-5">
                                                <strong>{{ $item->created_at->diffForHumans() }}</strong>
                                            </p>
                                            <p class="text-muted">
                                                <strong>Anotações:</strong> {{ $item->msgRet }}
                                            </p>
                                    @endforeach
                                    <hr>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" wire:click="recordStatus" class="btn btn-alt-success">
                    <i class="fa fa-check"></i> Salvar
                </button>
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
