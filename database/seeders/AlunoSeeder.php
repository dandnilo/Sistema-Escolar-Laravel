<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            'nome' => 'Jose Roberto',
            'email' => 'jb@email.com',
            'idade' => 25,
            'turma_id' => 1,
            
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Ana Maria',
            'email' => 'maria@email.com',
            'idade' => 20,
            'turma_id' => 1,
            
        ]);
    }
}
