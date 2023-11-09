@csrf

<div class="card">
    <div class="card-body">
        <fieldset>

            <legend>Identificação</legend>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="input" value="{{ old('nome', $servico->nome ?? '') }}" class="form-control"
                            name="nome" id="nome" required placeholder="Digite o nome do serviço...">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="icone">Ícone</label>
                        <select name="icone" id="icone" class="form-control" required>
                            <option value="">Selecione um Ícone</option>
                            <option value="twf-cleaning-1" {{ old('icone', $servico->icone ?? '') === 'twf-cleaning-1' ?
                                'selected' : '' }}>Ícone 1</option>
                            <option value="twf-cleaning-2" {{ old('icone', $servico->icone ?? '') === 'twf-cleaning-2' ?
                                'selected' : '' }}>Ícone 2</option>
                            <option value="twf-cleaning-3" {{ old('icone', $servico->icone ?? '') === 'twf-cleaning-3' ?
                                'selected' : '' }}>Ícone 3</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="posicao">Posição na Plataforma</label>
                        <input type="input" value="{{ old('posicao', $servico->posicao ?? '') }}" class="form-control" name="posicao"
                            id="posica" data-mask="00" required>
                    </div>
                </div>

            </div>

            <legend>Globais</legend>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_minimo">Valor Mínimo</label>
                        <input type="inpput" value="{{ old('valor_minimo', $servico->valor_minimo ?? '') }}" class="form-control"
                            name="valor_minimo" id="valor_minimo" data-mask="#.#00,00" data-mask-reverse="true" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantidade_horas">Quantidade Mínima de horas</label>
                        <input type="input" value="{{ old('quantidade_horas', $servico->quantidade_horas ?? '') }}" class="form-control"
                            name="quantidade_horas" id="quantidade_horas" data-mask="0" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcentagem">Porcetagem Comissão</label>
                        <input type="input" value="{{ old('porcentagem', $servico->porcentagem ?? '') }}" class="form-control"
                            name="porcentagem" id="porcentagem" data-mask="00" required>
                    </div>
                </div>

            </div>

            <legend>Cômodos</legend>

            <div class="row">

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_quarto">Valor Quarto</label>
                        <input type="input" value="{{ old('valor_quarto', $servico->valor_quarto ?? '') }}" class="form-control"
                            name="valor_quarto" id="valor_quarto" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_quarto">Quantidade Quarto</label>
                        <input type="input" value="{{ old('horas_quarto', $servico->horas_quarto ?? '') }}" class="form-control"
                            name="horas_quarto" id="horas_quarto" data-mask="0">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_sala">Valor Sala</label>
                        <input type="input" value="{{ old('valor_sala', $servico->valor_sala ?? '') }}" class="form-control"
                            name="valor_sala" id="valor_sala" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_sala">Quantidade Sala</label>
                        <input type="input" value="{{ old('horas_sala', $servico->horas_sala ?? '') }}" class="form-control"
                            name="horas_sala" id="horas_sala" data-mask="0">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_banheiro">Valor Banheiro</label>
                        <input type="input" value="{{ old('valor_banheiro', $servico->valor_banheiro ?? '') }}" class="form-control"
                            name="valor_banheiro" id="valor_banheiro" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_banheiro">Quantidade Banheiro</label>
                        <input type="input" value="{{ old('horas_banheiro', $servico->horas_banheiro ?? '') }}" class="form-control"
                            name="horas_banheiro" id="horas_banheiro" data-mask="0">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_cozinha">Valor Cozinha</label>
                        <input type="input" value="{{ old('valor_cozinha', $servico->valor_cozinha ?? '') }}" class="form-control"
                            name="valor_cozinha" id="valor_cozinha" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_cozinha">Quantidade Cozinha</label>
                        <input type="input" value="{{ old('horas_cozinha', $servico->horas_cozinha ?? '') }}" class="form-control"
                            name="horas_cozinha" id="horas_cozinha" data-mask="0">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_quintal">Valor Quintal</label>
                        <input type="input" value="{{ old('valor_quintal', $servico->valor_quintal ?? '') }}" class="form-control"
                            name="valor_quintal" id="valor_quintal" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_quintal">Quantidade Quintal</label>
                        <input type="input" value="{{ old('horas_quintal', $servico->horas_quintal ?? '') }}" class="form-control"
                            name="horas_quintal" id="horas_quintal" data-mask="0">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="valor_outros">Valor Outros Cômodos</label>
                        <input type="input" value="{{ old('valor_outros', $servico->valor_outros ?? '') }}" class="form-control"
                            name="valor_outros" id="valor_outros" data-mask="#.#00,00" data-mask-reverse="true">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="horas_outros">Qtde Outros Cômodos</label>
                        <input type="input" value="{{ old('horas_outros', $servico->horas_outros ?? '') }}" class="form-control"
                            name="horas_outros" id="horas_outros" data-mask="0">
                    </div>
                </div>

            </div>

        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>