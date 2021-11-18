<div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Cadastro</h3>
            <div class="block-options">
            </div>
        </div>
        <div class="block-content">
            @if (session()->has('message'))
            <div class="col">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="fa fa-fw fa-check mr-10"></i>
                    <p class="mb-0">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
            @endif
            <form>
                <div class="form-group row">
                    <div class="col-md-8">
                        <div class="form-material input-group">
                            <input type="text" class="form-control" wire:model='name' placeholder="Nome completo">
                            <label for="material-addon-icon">Nome</label>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-fw fa-user"></i>
                                </span>
                            </div>
                        </div>
                        @error('name') <span class="alert-link text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <div class="form-material input-group">
                            <input type="text" class="form-control" wire:model='login' placeholder="Login">
                            <label for="material-addon-icon">Login</label>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-address-card-o"></i>
                                </span>
                            </div>
                        </div>
                        @error('login') <span class="alert-link text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <div class="form-material input-group">
                            <input type="password" class="form-control" wire:model='password' placeholder="******">
                            <label for="material-addon-icon">Senha</label>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        @error('password') <span class="alert-link text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <div class="form-material input-group">
                            <input type="password" class="form-control" wire:model='password_confirm' placeholder="******">
                            <label for="material-addon-icon">Confirmar senha</label>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        @error('password_confirm') <span class="alert-link text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <div class="form-material">
                            <select class="form-control" wire:model='type'>
                                <option>...</option>
                                <option value="Normal">Normal</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <label for="material-select">Tipo de acesso</label>
                        </div>
                        @error('type') <span class="alert-link text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        @if ($user)
                            <button type="button" wire:click='update' class="btn btn-alt-primary">Editar</button>
                        @else
                            <button type="button" wire:click='store' class="btn btn-alt-primary">Salvar</button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h2 class="content-heading">
        <i class="fa fa-users text-muted mr-5"></i> Usuários
    </h2>
    <div class="row">
        @foreach($users as $item)
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-w600 mb-5">{{ $item->name }}</div>
                        <div class="font-size-sm text-muted">{{ $item->type }}</div>
                    </div>
                    <div class="block-content">
                        <div class="row items-push text-center">
                            <div class="col">
                                <button type="button" wire:click='edit({{ $item->id }})' class="btn btn-outline-primary min-width-125 mb-5">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
