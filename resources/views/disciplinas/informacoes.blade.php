@extends('padrao.layout', ["ativo" => "disciplina"])

@section('titulo')
Sistema de Controle Acadêmicoo
@endsection

@section('conteudo')

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Alunos da Disciplina: {{ $disciplina->nome}}</h3>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>RA</th>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplina->alunos as $aluno)
                <tr>
                    <td> {{ $aluno->id }} </td>
                    <td> {{ $aluno->Ra->numero }}</td>
                    <td> {{ $aluno->nome }} </td>
                    <td> {{ $aluno->email }}</td>
                    <td> {{ $aluno->idade }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    <div class="card-footer">
        <a class="btn btn-secondary btn-sm" href="{{ route('disciplinas.index')  }}"> Voltar </a>
    </div>
</div>

@endsection