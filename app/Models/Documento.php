<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use HasFactory;

    protected function cpf(): Attribute
    {
        return new Attribute(
            set: static fn(string|int $value): string => preg_replace('/[^0-9]/s', '', $value)
        );
    }

    protected function rg(): Attribute
    {
        return new Attribute(
            set: static fn(string|int $value): string => preg_replace('/[^0-9A-Z]/s', '', $value)
        );
    }

    public function estagiario(): BelongsTo
    {
        return $this->belongsTo(Estagiario::class, 'estagiario_id');
    }
}
