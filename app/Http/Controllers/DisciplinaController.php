<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disciplina;
use App\Models\Aluno;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplinas.index')
                ->with('listaDisciplinas', $disciplinas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = new Disciplina();
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga_horaria;

        $disciplina->save();

        return redirect()->route('disciplinas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disciplina = Disciplina::find($id);
        $listaAlunos = Aluno::orderBy('nome')->get();

        return view('disciplinas.informacoes')
            ->with('disciplina', $disciplina)
            ->with('listaAlunos', $listaAlunos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $disciplina = Disciplina::find($id);

        return view('disciplinas.edit')
                ->with('disciplina', $disciplina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga_horaria;

        $disciplina->update();

        return redirect()->route('disciplinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);

        $disciplina->delete();

        return redirect()->route('disciplinas.index');
    }
}
