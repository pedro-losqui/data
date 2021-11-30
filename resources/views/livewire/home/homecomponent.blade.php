<div wire:poll.30000ms>
    @include('livewire.home.show')

    @include('livewire.home.create')

    @include('livewire.home.alert')

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
        <div class="col">
            <div class="block">
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control mr-2" wire:model="loca" placeholder="Nome">
                                @if ($results)
                                    <button type="button" wire:click='reload' class="btn btn-alt-danger"><i class="fa fa-close"></i></button>
                                @else
                                    <button type="button" wire:click='localize' class="btn btn-alt-warning">Localizar</button>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if ($results)
                        <ul class="list-group push">
                            @forelse ($results as $item)
                                <li class="list-group-item">
                                    <span class="js-task-badge badge badge-{{ $item->presenter()->colorStatus($item->status) }} float-right animated bounceIn">{{ $item->presenter()->tagStatus($item->status) }}</span>
                                    <i class="fa fa-fw fa-user mr-5"></i> {{ $item->nomColaborador }}
                                </li>
                            @empty

                            @endforelse
                        </ul>
                    @endif
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
        <div class="block-content block-content-full block-content-sm bg-warning">
            <h3 class="block-title text-white">Total de registros pendente: {{ $count }}</h3>
        </div>
        <div class="block-content">
            <table class="table table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Dados</th>
                        <th>Competência</th>
                        <th>Exame</th>
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
                            <td>
                                @if ($item->retTipExa === 1)
                                    <strong><small>{{ $item->presenter()->calendar($item->dataAdm) }}</small></strong>
                                @else
                                    <strong><small>----</small></strong>
                                @endif
                            </td>
                            <td>
                                {{ $item->presenter()->kindExam($item->retTipExa) }}
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <small><i class="fa fa-calendar"></i>
                                    {{ $item->created_at->format('d/m/Y') }}</small><br>
                                <span
                                    class="badge badge-{{ $item->presenter()->colorStatus($item->status) }}">{{ $item->presenter()->tagStatus($item->status) }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Second group">
                                    <button type="button" wire:click="show({{ $item->id }})"
                                        class="btn btn-secondary">
                                        <i class="fa fa-id-card-o"></i>
                                    </button>
                                    @if($item->retTipExa === 1 || $item->retTipExa === 3 )
                                        @if($item->print === 0)
                                            <button type="button" wire:click="create({{ $item->id }})"
                                                class="btn btn-secondary">
                                                <i class="fa fa-paperclip"></i>
                                            </button>
                                        @endif
                                        @if($item->print === 1)
                                            <a href="{{ route('printKit', $item->id) }}"
                                                target="_blank" class="btn btn-sm btn-secondary js-tooltip-enabled">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        @endif
                                    @endif
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
