@csrf

<div class="card">
    <div class="card-body">
        <fieldset>

            <legend>Identificação</legend>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="input" value="{{ old('name', $usuario->name ?? '') }}" class="form-control"
                            name="name" id="name" required placeholder="Digite o nome do usuário...">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{ old('email', $usuario->email ?? '') }}" class="form-control" name="email"
                            id="email" required placeholder="Digite o email do usuário...">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" value="{{ old('password', '') }}" class="form-control"
                            name="password" id="password" required placeholder="Digite a senha do usuário...">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">Confirme a senha</label>
                        <input type="password" value="{{ old('password_confirmation', '') }}" class="form-control" name="password_confirmation"
                            id="password_confirmation" required placeholder="Confirme a senha...">
                    </div>
                </div>

            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>