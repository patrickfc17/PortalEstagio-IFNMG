<?php

namespace App\Models;

use App\Traits\Randomizes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estagiario extends Model
{
    use HasFactory, Randomizes;

    protected $hidden = [];

    protected function telefoneFixo(): Attribute
    {
        return Attribute::make(
            set: static fn(string $value): string => preg_replace('/[^0-9]/s', '', $value)
        );
    }

    protected function celular(): Attribute
    {
        return Attribute::make(
            set: static fn(string $value): string => preg_replace('/[^0-9]/s', '', $value)
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function filiacao(): HasOne
    {
        return $this->hasOne(Filiacao::class, 'id');
    }

    public function documento(): HasOne
    {
        return $this->hasOne(Documento::class, 'id');
    }

    public function endereco(): HasOne
    {
        return $this->hasOne(Endereco::class, 'id');
    }

    public function matricula(): HasOne
    {
        return $this->hasOne(Matricula::class, 'id');
    }

    public function fichaMatricula(): HasOne
    {
        return $this->hasOne(FichaMatricula::class, 'id');
    }
}
