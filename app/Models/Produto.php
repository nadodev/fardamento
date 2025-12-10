<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'codigo',
        'foto',
        'lojas',
        'caracteristicas',
        'ativo',
    ];

    protected function casts(): array
    {
        return [
            'lojas' => 'array',
            'caracteristicas' => 'array',
            'ativo' => 'boolean',
        ];
    }
}
