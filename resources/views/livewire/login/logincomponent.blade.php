<div class="row justify-content-center px-5">
    <div class="col-sm-8 col-md-6 col-xl-4">
        <form class="js-validation-signin">
            <div class="form-group row">
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="text" wire:model="login" class="form-control">
                        <label for="login-username">Login</label>
                        @error('login')
                            <a class="badge badge-danger mt-2" href="javascript:void(0)">{{ $message }}</a>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="password" wire:model="password" class="form-control">
                        <label for="login-password">Senha</label>
                        @error('password')
                            <a class="badge badge-danger mt-2" href="javascript:void(0)">{{ $message }}</a>
                        @enderror
                        @if(session()->has('message'))
                            <a class="badge badge-danger mt-2" href="javascript:void(0)">{{ session('message') }}</a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="form-group row gutters-tiny">
                <div class="col-12 mb-10">
                    <button type="button" wire:click="login"
                        class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                        <i class="si si-login mr-10"></i> Entrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
