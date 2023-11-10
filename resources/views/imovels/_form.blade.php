@csrf

<div class="card">
    <div class="card-body">
        <fieldset>

            <legend>Identificação</legend>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="outorgado">Outorgado</label>
                        <input type="input" value="{{ old('outorgado', $imovel->outorgado ?? '') }}" class="form-control"
                            name="outorgado" id="outorgado" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="outorgante">Outorgante</label>
                        <input type="input" value="{{ old('outorgante', $imovel->outorgante ?? '') }}" class="form-control"
                            name="outorgante" id="outorgante" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="livro">Livro</label>
                        <input type="input" value="{{ old('livro', $imovel->livro ?? '') }}" class="form-control"
                            name="livro" id="livro" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="folha">Folha</label>
                        <input type="input" value="{{ old('folha', $imovel->folha ?? '') }}" class="form-control"
                            name="folha" id="folha" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="data_venda">Data Venda</label>
                        <input type="date" value="{{ old('data_venda', $imovel->data_venda ?? '') }}" class="form-control"
                            name="data_venda" id="data_venda" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="localizacao">Localização</label>
                        <select name="localizacao" id="localizacao" class="form-control" required>
                            <option value="">Selecione a localização</option>
                            <option value="URBANO" {{ old('localizacao', $imovel->localizacao ?? '') === 'URBANO' ?
                                'selected' : '' }}>Urbano</option>
                            <option value="RURAL" {{ old('localizacao', $imovel->localizacao ?? '') === 'RURAL' ?
                                'selected' : '' }}>Rural</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="input" value="{{ old('matricula', $imovel->matricula ?? '') }}" class="form-control"
                            name="matricula" id="matricula" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="input" value="{{ old('descricao', $imovel->descricao ?? '') }}" class="form-control"
                            name="descricao" id="descricao" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tipo_id">Tipo</label>
                        <select name="tipo_id" id="tipo_id" class="form-control">
                            <option value="">Selecione o tipo de imóvel</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->descricao }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('imovels.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>