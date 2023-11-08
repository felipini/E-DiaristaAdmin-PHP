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
            'nome' => ['required', 'min:2', 'max:255'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer'],
            'porcentagem' => ['required', 'integer'],
            'valor_quarto' => ['numeric'],
            'horas_quarto' => ['integer'],
            'valor_sala' => ['numeric'],
            'horas_sala' => ['integer'],
            'valor_banheiro' => ['numeric'],
            'horas_banheiro' => ['integer'],
            'valor_cozinha' => ['numeric'],
            'horas_cozinha' => ['integer'],
            'valor_quintal' => ['numeric'],
            'horas_quintal' => ['integer'],
            'valor_outros' => ['numeric'],
            'horas_outros' => ['integer']
        ];
    }
}
