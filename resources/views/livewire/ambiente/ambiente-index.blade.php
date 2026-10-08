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
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ambientes as $a)
                            <!--É um for que percorre do primeiro até o último-->
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nome }}</td>
                                <td>{{ $a->descricao }}</td>
                                <td><input class="form-check-input" type="checkbox" role="switch"
                                        id="status-{{ $a->id }}" wire:click="status({{ $a->id }})"
                                        @checked($a->status)>

                                    <span class="badge bg-{{ $a->status ? 'success' : 'danger' }}">
                                        {{ $a->status ? 'ATIVO' : 'INATIVO' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('ambiente', ['id' => $a->id]) }}"
                                        class="btn btn-primary btn-sm">Editar</a>

                                    <button class="btn btn-danger btn-sm"
                                        wire:confirm="Deseja exluir o ambiente?">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
