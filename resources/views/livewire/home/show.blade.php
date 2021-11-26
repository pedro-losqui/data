@if($employee)
    <div wire:ignore.self class="modal fade" id="employeeModal" tabindex="-1" role="dialog"
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
                            <div class="col-6">
                                <p class="h6">Empresa</p>
                                <address>
                                    <strong>Código:</strong> <br>
                                    <mark>{{ $employee->empSoc }}</mark><br>
                                    <strong>Nome:</strong><br>
                                    <mark>{{ $employee->nomFilial }}</mark><br>
                                    <strong>CNPJ:</strong><br>
                                    <mark>{{ $employee->cnpjFilial }}</mark>
                                </address>
                            </div>
                            <div class="col-6">
                                <p class="h6">Posto de serviço</p>
                                <address>
                                    <strong>Nome:</strong><br>
                                    <mark>{{ $employee->nomRateio }}</mark><br>
                                    <strong>CNPJ:</strong><br>
                                    <mark>{{ $employee->cnpjPosto }}</mark>
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-6">
                                <p class="h6">Funcionário</p>
                                <address>
                                    <strong>Nome:</strong> <br>
                                    <mark>{{ $employee->nomColaborador }}</mark><br>
                                    <strong>Sexo:</strong><br>
                                    <mark>{{ $employee->sexColaborador }}</mark><br>
                                    <hr>
                                    <strong>Data de admissão:</strong><br>
                                    <mark>{{ $employee->dataAdm }}</mark>
                                </address>
                            </div>
                            <div class="col-6">
                                <p class="h6"><br></p>
                                <address>
                                    <strong>CPF:</strong><br>
                                    <mark>{{ $employee->cpfColaborador }}</mark><br>
                                    <strong>Data de nascimento:</strong><br>
                                    <mark>{{ $employee->nasColaborador }}</mark><br>
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-6">
                                <p class="h6">Setor</p>
                                <address>
                                    <strong>Setor:</strong> <br>
                                    <mark>{{ $employee->nomPosto }}</mark><br>
                                </address>
                            </div>
                            <div class="col-6">
                                <p class="h6">Cargo</p>
                                <address>
                                    <strong>Cargo:</strong><br>
                                    <mark>{{ $employee->nomCargo }}</mark><br>
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-6">
                                <p class="h6">Exame(s)</p>
                                <address>
                                    <strong>Descrição:</strong> <br>
                                    <mark>{{ $employee->exaSolicitado }}</mark><br>
                                </address>
                            </div>
                            <div class="col-6">
                                <p class="h6">Clínica</p>
                                <address>
                                    <strong>Nome:</strong><br>
                                    <mark>{{ $employee->nomLaboratorio }}</mark><br>
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <p class="h6">Solicitante</p>
                                <address>
                                    <strong>Nome:</strong> <br>
                                    <mark>{{ $employee->nomSolicitante }}</mark><br>
                                </address>
                            </div>
                            <div class="col">
                                <p class="h6"><br></p>
                                <address>
                                    <strong>Telefone:</strong><br>
                                    <mark>{{ $employee->fonSolicitante }}</mark><br>
                                </address>
                            </div>
                            <div class="col">
                                <p class="h6"><br></p>
                                <address>
                                    <strong>E-mail:</strong><br>
                                    <mark>{{ $employee->emaSolicitante }}</mark><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" wire:click="alert({{ $employee->id }})" class="btn btn-alt-warning">
                        <i class="fa fa-calendar"></i> Agendar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
