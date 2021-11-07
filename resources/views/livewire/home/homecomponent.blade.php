<div>
    @include('livewire.home.show')

    <h2 class="content-heading">Solicitações</h2>

    <div class="text-center row">
        <div class="col">
            <div class="block">
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="date" wire:model="from" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="block">
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="date" wire:model="to" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="block">
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-plus-square"></i>
                                    </span>
                                </div>
                                <select class="form-control" wire:model="type" id="example-select"
                                    name="example-select">
                                    <option value="">Todos</option>
                                    <option value="1">Admissional</option>
                                    <option value="2">Periódico</option>
                                    <option value="3">Mudança de função</option>
                                    <option value="3">Retorno ao trabalho</option>
                                    <option value="3">Demissional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center row">
        <div class="col">
            <div class="block">
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="search" class="form-control" wire:model="search" placeholder="Busca">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="block-content">
            <table class="table table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Dados</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Data - Status</th>
                        <th class="text-center" style="width: 100px;">Ação</th>
                    </tr>
                </thead>
                @foreach($employees as $item)
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">{{ $item->id }}</th>
                            <td>
                                <strong>Nome:</strong> {{ $item->nomColaborador }} <br>
                                <small><strong>CPF:</strong>{{ $item->cpfColaborador }}</small>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <small><i class="fa fa-calendar"></i>
                                    {{ $item->created_at->format('d/m/Y') }}</small><br>
                                <span class="badge badge-warning">Pendente</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" wire:click="show({{ $item->id }})"
                                        class="btn btn-sm btn-secondary js-tooltip-enabled">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    <div class="text-center row">
        <div class="col">
            <div class="block">
                <div class="block-content">
                    {{ $employees->links('components.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
