<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disciplina extends Model
{
    use HasFactory;

        // Uma disciplina tem muitos alunos
        public function alunos(): BelongsToMany{
            return $this->belongsToMany(Aluno::class, 'aluno_disciplinas')
                ->withPivot('nota1' , 'nota2');
        }
}
