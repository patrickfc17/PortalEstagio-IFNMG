<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filiacao extends Model
{
    use HasFactory;

    protected $table = 'filiacoes';

    public function estagiario(): BelongsTo
    {
        return $this->belongsTo(Estagiario::class, 'estagiario_id');
    }
}
