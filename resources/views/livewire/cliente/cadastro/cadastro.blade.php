<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Cadastro de Clientes</h5>

        <div class="card-body">
            <form wire:submit.prevent="cadastrarCliente">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Maria"
                        wire:model.defer="nome">
                </div>

                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="form-control"
                        wire:model.defer="endereco">
                </div>

                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control"
                        wire:model.defer="telefone">
                </div>

                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control"
                        wire:model.defer="cpf">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control"
                        wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control"
                        wire:model.defer="password">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>