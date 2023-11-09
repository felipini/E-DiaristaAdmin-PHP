<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'min:2', 'max:255', 'unique:servicos'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer', 'min:1', 'max:99'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer', 'min:1', 'max:8'],
            'porcentagem' => ['required', 'numeric', 'min:1', 'max:99'],
            'valor_quarto' => ['numeric'],
            'horas_quarto' => ['integer', 'min:1', 'max:8'],
            'valor_sala' => ['numeric'],
            'horas_sala' => ['integer', 'min:1', 'max:8'],
            'valor_banheiro' => ['numeric'],
            'horas_banheiro' => ['integer', 'min:1', 'max:8'],
            'valor_cozinha' => ['numeric'],
            'horas_cozinha' => ['integer', 'min:1', 'max:8'],
            'valor_quintal' => ['numeric'],
            'horas_quintal' => ['integer', 'min:1', 'max:8'],
            'valor_outros' => ['numeric'],
            'horas_outros' => ['integer', 'min:1', 'max:8']
        ];
    }

    /**
     * Substitui os valores antes da validação
     * 
     */
    public function validationData() {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formataValorMonetario($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formataValorMonetario($dados['valor_quarto']);
        $dados['valor_sala'] = $this->formataValorMonetario($dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formataValorMonetario($dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formataValorMonetario($dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formataValorMonetario($dados['valor_quintal']);
        $dados['valor_outros'] = $this->formataValorMonetario($dados['valor_outros']);

        $this->replace($dados);

        return $dados;
    }

    /**
     * Formata o valor brasileiro para o padrao intenacional
     * 
     */
    protected function formataValorMonetario(string $valor){
        return str_replace(['.', ','], ['', '.'], $valor);
    }
}
