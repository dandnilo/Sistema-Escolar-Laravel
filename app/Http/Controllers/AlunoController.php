<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Ra;
use App\Models\Turma;
use App\Models\Disciplina;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')
                ->with('listaAlunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listaTurmas = Turma::orderBy('nome')->get();

        return view('alunos.create')
            ->with('listaTurmas', $listaTurmas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();

        $turma = Turma::find($request->turma);
        $aluno->turma()->associate($turma);

        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->idade = $request->idade;
        $aluno->save();

        $ra = new Ra();
        $ra->numero = $request->ra;

        $aluno->ra()->save($ra);

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::find($id);
        $listaDisciplinas = Disciplina::orderBy('nome')->get();

        return view('alunos.informacoes')
            ->with('aluno', $aluno)
            ->with('listaDisciplinas', $listaDisciplinas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $listaTurmas = Turma::orderBy('nome')->get();

        return view('alunos.edit')
                ->with('aluno', $aluno)
                ->with('listaTurmas', $listaTurmas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        $turma = Turma::find($request->turma);
        $aluno->turma()->associate($turma);
        
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->idade = $request->idade;

        $ra = Ra::find($aluno->ra->id);
        $ra->numero = $request->ra;

        $aluno->update();
        $ra->update();

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }

    // Associa (inclui o relacionamento) uma disciplina ao aluno
    public function associarDisciplina(Request $request){
        $aluno = Aluno::find($request->aluno_id);
        $disciplina = Disciplina::find($request->disciplina_id);

        $aluno->disciplinas()->attach($disciplina);
        
        return redirect()->route('alunos.show', $aluno->id);
    }

    // Desassocia (exclui o relacionamento) uma disciplina ao aluno
    public function desassociarDisciplina(string $aluno_id, string $disciplina_id){
        $aluno = Aluno::find($aluno_id);
        $disciplina = Disciplina::find($disciplina_id);

        $aluno->disciplinas()->detach($disciplina);
        
        return redirect()->route('alunos.show', $aluno->id);
    }

    // Desassocia (exclui o relacionamento) uma disciplina ao aluno
    public function definirNotas(Request $request){
        $aluno = Aluno::find($request->aluno_id_nota);
        $aluno->disciplinas()
            ->updateExistingPivot($request->disciplina_id_nota, 
                [
                    'nota1' => $request->nota1,
                    'nota2' => $request->nota2,
                ]);
                $aluno->update();
                return redirect()->route('alunos.show', $aluno->id);
    }
}
