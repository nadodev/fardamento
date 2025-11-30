<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string'],
            'codigo' => ['required', 'string', 'max:255', 'unique:produtos,codigo'],
            'lojas' => ['nullable', 'array'],
            'lojas.*' => ['in:matriz,filial'],
            'caracteristicas' => ['nullable', 'array'],
            'caracteristicas.*' => ['string'],
            'ativo' => ['boolean'],
        ];
    }
}
