<div>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid"> <!--Ocupa SEMPRE 100% da tela(componente)-->
            <a class="navbar-brand offcanvas-header" href=""> Monitor Iot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="offcanvas-body">
                    <a class="nav-link" href="{{ route('ambiente.index') }}">Ambientes</a>
                    <a class="nav-link" href="{{ route('registro.index') }}">Registros</a>
                    <a class="nav-link" href="{{ route('sensor.index') }}">Sensores</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-5">
        <div class="card">
            <h5 class="card-header">Cadastro de Ambientes</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mt-3">
                        <label for="nome" class="form-label"> Nome</label>
                        <input type="text" class="form-control" wire:model="nome" name="nome" id="nome">
                    </div>

                    <div class="mt-3">
                        <label for="data_hora" class="form-label"> Descrição</label>
                        <textarea class="form-control" id="descricao" rows="4" name="descricao" wire:model="descricao"></textarea>
                    </div>

                    <div class="mt-3">
                        <label for="descricao" class="form-label"> Status</label>
                        <input class="form-check-input" wire:model="status" type="checkbox" value=""
                            id="checkNativeSwitch" switch>
                        <label class="form-check-label" for="checkNativeSwitch">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
