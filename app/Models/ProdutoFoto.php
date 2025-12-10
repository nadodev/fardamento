<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class ProdutoFoto extends Model
{
    protected $fillable = [
        'produto_id',
        'caminho',
        'ordem',
    ];

    protected function casts(): array
    {
        return [
            'ordem' => 'integer',
        ];
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    public function getUrlAttribute(): string
    {
        if (str_starts_with($this->caminho, 'storage/')) {
            return asset($this->caminho);
        }

        return Storage::url($this->caminho);
    }
}
