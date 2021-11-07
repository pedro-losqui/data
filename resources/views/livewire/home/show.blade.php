@if($employee)
    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="modal-fadein"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block mb-0 block-themed block-transparent">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Solicitação</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Empresa | Posto de Trabalho</label>
                            <div class="col-6">
                                <address>
                                    <strong>Código: </strong>{{ $employee->empSoc }} <br>
                                    <strong>Nome: </strong>{{ $employee->nomFilial }} <br>
                                    <strong>CNPJ: </strong>{{ $employee->cnpjFilial }}
                                </address>
                            </div>
                            <div class="col-6">
                                <address>
                                    <strong>Nome: </strong>{{ $employee->nomPosto }} <br>
                                    <strong>CNPJ: </strong>{{ $employee->cnpjPosto }}
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Funcionário</label>
                            <div class="col-6">
                                <address>
                                    <strong>Nome: </strong>{{ $employee->nomColaborador }} <br>
                                    <strong>CPF: </strong>{{ $employee->cpfColaborador }} <br>
                                    <strong>Nascimento: </strong>{{ date('d/m/Y', strtotime($employee->nasColaborador)) }} <br>
                                </address>
                            </div>
                            <div class="col-6">
                                <address>
                                    <strong>Admissão: </strong>{{ date('d/m/Y', strtotime($employee->dataAdm)) }} <br>
                                    <strong>Sexo: </strong>{{ $employee->sexColaborador }}
                                </address>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Setor | Cargo</label>
                            <div class="col-6">
                                <address>
                                    <strong>Setor: </strong>{{ $employee->nomColaborador }} <br>
                                </address>
                            </div>
                            <div class="col-6">
                                <address>
                                    <strong>Cargo: </strong>{{ $employee->nomCargo }}
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfect
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
