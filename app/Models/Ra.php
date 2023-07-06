<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ra extends Model
{
    use HasFactory;

    // Um RA pertence a um Aluno
    public function aluno(): BelongsTo{
        return $this->belongsTo(Aluno::class);
    }
}
