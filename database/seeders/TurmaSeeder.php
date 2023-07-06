<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turmas')->insert([
            'nome' => 'Turma 4 - ADS',
            'ano' => 2022,
        ]);

        DB::table('turmas')->insert([
            'nome' => 'Turma 2 - GTI',
            'ano' => 2021,
        ]);
    }
}
