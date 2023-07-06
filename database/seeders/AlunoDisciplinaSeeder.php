<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AlunoDisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno_disciplinas')->insert([
            'aluno_id' => 1,
            'disciplina_id' => 1,
            'nota1' => 8,
            'nota2' => 5.5,
        ]);

        DB::table('aluno_disciplinas')->insert([
            'aluno_id' => 1,
            'disciplina_id' => 2,
            'nota1' => 3,
            'nota2' => 9.5,
        ]);
    }
}
