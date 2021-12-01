<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block mb-0 block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Riscos & Exames</h3>
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
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='physicist'  placeholder="Físico">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='chemical'  placeholder="Químico">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='biological'  placeholder="Biológico">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='ergonomic'  placeholder="Ergonômico">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='accident'  placeholder="Acidente">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='other'  placeholder="Outros">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-form-label">Setor / Função</label>
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='department'  placeholder="Setor">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-address-card-o"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" wire:model='post'  placeholder="Função">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-4">
                            <h4>Exames</h4>
                            <ul class="fa-ul">
                                @forelse($exams as $item)
                                    <li><i class="fa fa-check fa-li"></i>{{ $item }}</li>
                                @empty
                                    Sem exames
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" wire:model='exam' placeholder="Descrição...">
                                <div class="input-group-append">
                                    <button type="button" wire:click='putExams' class="input-group-text">
                                        <i class="fa fa-fw fa-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" wire:click='salve' class="btn btn-alt-success">
                    <i class="fa fa-check"></i> Salvar
                </button>
            </div>
        </div>
    </div>
</div>
