<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'endereco',
        'telefone',
        'email',
        'tipo',
        'horario_funcionamento',
        'ativo',
    ];

    protected function casts(): array
    {
        return [
            'ativo' => 'boolean',
        ];
    }

    public function fotos(): HasMany
    {
        return $this->hasMany(EmpresaFoto::class)->orderBy('ordem');
    }

    public function contatos(): HasMany
    {
        return $this->hasMany(EmpresaContato::class)->orderBy('ordem');
    }
}
