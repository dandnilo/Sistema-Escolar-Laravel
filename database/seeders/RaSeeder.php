<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ras')->insert([
            'numero' => 1231312,
            'aluno_id' => 1,
        ]);

        DB::table('ras')->insert([
            'numero' => 4231131,
            'aluno_id' => 2,
        ]);
    }
}
