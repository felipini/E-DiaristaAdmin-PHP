@csrf

<div class="card">
    <div class="card-body">
        <fieldset>

            <legend>Identificação</legend>

            <div class="row">

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="input" value="{{ old('descricao', $tipo->descricao ?? '') }}" class="form-control"
                            name="descricao" id="descricao" required placeholder="Digite o tipo de imóvel...">
                    </div>
                </div>
            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>