<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Aluno extends Model
{
    use HasFactory;

    // Um Aluno tem um Ra
    public function ra(): HasOne{
        return $this->hasOne(Ra::class);
    }

    // Um aluno pertence a uma turma
    public function turma(): BelongsTo{
        return $this->belongsTo(Turma::class);
    }

    // Uma turma tem muitos alunos
    public function disciplinas(): BelongsToMany{
         return $this->belongsToMany(Disciplina::class, 'aluno_disciplinas')
         ->withPivot('nota1' , 'nota2');
    }
}
