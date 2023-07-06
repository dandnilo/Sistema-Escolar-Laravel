<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\DisciplinaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('alunos.index');
});

Route::resource('alunos', AlunoController::class);
Route::resource('turmas', TurmaController::class);
Route::resource('disciplinas', DisciplinaController::class);

Route::post('associarDisciplina', [AlunoController::class, 'associarDisciplina'])
    ->name('alunos.associarDisciplina');

Route::get('desassociarDisciplina/{aluno_id}/{disciplina_id}', [AlunoController::class, 'desassociarDisciplina'])
    ->name('alunos.desassociarDisciplina');

Route::post('definirNotaDisciplina', [AlunoController::class, 'definirNotas'])
    ->name('alunos.definirNotasDisciplina');
