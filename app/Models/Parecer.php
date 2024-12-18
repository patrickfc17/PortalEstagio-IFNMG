<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parecer extends Model
{
    protected $table = 'pareceres';

    public function assinatura(): HasOne
    {
        return $this->hasOne(Assinatura::class, 'assinatura_id');
    }

    public function fichaMatricula(): BelongsTo
    {
        return $this->belongsTo(FichaMatricula::class, 'ficha_matricula_id');
    }
}
