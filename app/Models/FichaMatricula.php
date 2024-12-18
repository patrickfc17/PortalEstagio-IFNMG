<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FichaMatricula extends Model
{
    protected $table = 'fichas_matricula';

    public function parecer(): HasOne
    {
        return $this->hasOne(Parecer::class, 'id');
    }

    public function estagiario(): BelongsTo
    {
        return $this->belongsTo(Estagiario::class, 'estagiario_id');
    }
}
