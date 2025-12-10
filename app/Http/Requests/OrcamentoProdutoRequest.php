<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrcamentoProdutoRequest extends FormRequest
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
            'produto' => ['required', 'string', 'max:255'],
            'codigo' => ['required', 'string', 'max:255'],
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefone' => ['required', 'string', 'max:20'],
            'empresa' => ['nullable', 'string', 'max:255'],
            'quantidade' => ['nullable', 'integer', 'min:1'],
            'mensagem' => ['required', 'string', 'max:5000'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'mensagem.required' => 'O campo mensagem é obrigatório.',
        ];
    }
}
