<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aluno_disciplinas', function (Blueprint $table) {
            $table->foreignId('aluno_id')->constrained();
            $table->foreignId('disciplina_id')->constrained();
            $table->double('nota1')->nullable();
            $table->double('nota2')->nullable();
            $table->timestamps();

            $table->primary(['aluno_id', 'disciplina_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_disciplinas');
    }
};
