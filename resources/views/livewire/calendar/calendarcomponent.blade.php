<div>
    @include('livewire.calendar.alert')
    @include('livewire.calendar.show')

    <h2 class="content-heading">Solicitações agendadas</h2>

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
                                <input type="date" wire:model="to" class="form-control" readonly>
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
                                        <i class="fa fa-filter"></i>
                                    </span>
                                </div>
                                <select class="form-control" wire:model="type" id="example-select"
                                    name="example-select">
                                    <option value="">Todos</option>
                                    <option value="1">Admissional</option>
                                    <option value="2">Periódico</option>
                                    <option value="3">Mudança de Função</option>
                                    <option value="4">Retorno ao Trabalho</option>
                                    <option value="5">Demissional</option>
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
        <div class="block-content block-content-full block-content-sm bg-info">
            <h3 class="block-title text-white">Total de registros agendados: {{ $count }}</h3>
        </div>
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
                @forelse($employees as $item)
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">{{ $item->id }}</th>
                            <td>
                                <strong>Nome:</strong> {{ $item->nomColaborador }} <br>
                                <small><strong>CPF:</strong>{{ $item->cpfColaborador }}</small>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <small><i class="fa fa-calendar"></i>
                                    {{ $item->updated_at->format('d/m/Y') }}</small><br>
                                <span class="badge badge-{{ $item->presenter()->colorStatus($item->status) }}">{{ $item->presenter()->tagStatus($item->status) }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" wire:click="show({{ $item->id }})"
                                        class="btn btn-sm btn-secondary js-tooltip-enabled">
                                        <i class="fa fa-id-card-o"></i>
                                    </button>
                                    <button type="button" wire:click="alert({{ $item->id }})"
                                        class="btn btn-sm btn-secondary js-tooltip-enabled">
                                        <i class="fa fa-check-square-o"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @empty
                    <div class="alert alert-warning d-flex align-items-center mt-2" role="alert">
                        <i class="fa fa-fw fa-exclamation-triangle mr-10"></i>
                        <p class="mb-0">
                            Nenhum registro foi encontrado!
                        </p>
                    </div>
                @endforelse
            </table>
            {{ $employees->links('components.pagination') }}
        </div>
    </div>
</div>
