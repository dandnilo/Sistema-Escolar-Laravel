<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Turma;
use App\Models\Aluno;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')
                ->with('listaTurmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $turma = new Turma();
        $turma->nome = $request->nome;
        $turma->ano = $request->ano;

        $turma->save();

        return redirect()->route('turmas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = Turma::find($id);
        $listaAlunos = Aluno::orderBy('nome')->get();

        return view('turmas.informacoes')
            ->with('turma', $turma)
            ->with('listaAlunos', $listaAlunos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::find($id);

        return view('turmas.edit')
                ->with('turma', $turma);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = Turma::find($id);
        $turma->nome = $request->nome;
        $turma->ano = $request->ano;

        $turma->update();

        return redirect()->route('turmas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::find($id);

        $turma->delete();

        return redirect()->route('turmas.index');
    }
}
