<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'codigo',
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

    public function fotos(): HasMany
    {
        return $this->hasMany(ProdutoFoto::class)->orderBy('ordem');
    }

    public function getPrimeiraFotoAttribute(): ?ProdutoFoto
    {
        return $this->fotos()->first();
    }
}
