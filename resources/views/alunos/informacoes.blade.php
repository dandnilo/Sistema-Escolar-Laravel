@extends('padrao.layout', ["ativo" => "aluno"])

@section('titulo')
Sistema de Controle Acadêmicoo
@endsection

@section('conteudo')

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações do aluno: {{ $aluno->nome }}</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Ra">RA: </label><input type="text" class="form-control" value="{{ $aluno->ra->numero }}" name="ra" readonly>
            </div>

            <div class="col-sm">
                <label for="Nome">Nome: </label><input type="text" class="form-control" value="{{ $aluno->nome }}" name="nome" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                  <label for="Email">Email: </label><input type="text" class="form-control" value="{{ $aluno->email }}" name="email" readonly>
             </div>

            <div class="col-sm">
                <label for="Idade">Idade: </label><input type="text" class="form-control" value="{{ $aluno->idade }}" name="idade" readonly>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações da Turma: {{ $aluno->turma->nome }}</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Turma">Turma: </label><input type="text" class="form-control" value="{{ $aluno->turma->nome }}" name="turma" readonly>
            </div>

            <div class="col-sm">
                <label for="Ano">Ano: </label><input type="text" class="form-control" value="{{ $aluno->turma->ano }}" name="ano" readonly>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações das Disciplinas</h3>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Carga Horária:</th>
                    <th>Nota 1:</th>
                    <th>Nota 2:</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $relacao_disciplinas_aluno [] = [];
                @endphp
                @foreach ($aluno->disciplinas as $disciplina)
                <tr>
                    <td> {{ $disciplina->id }} </td>
                    <td> {{ $disciplina->nome }}</td>
                    <td> {{ $disciplina->carga_horaria }} </td>
                    <td> {{ $disciplina->pivot->nota1 }}</td>
                    <td> {{ $disciplina->pivot->nota2 }}</td>
                    <td> <button data-bs-toggle="modal" data-bs-target="#modalNotas" class="btn btn-warning btn-sm" onclick="definirCamposModal('{{ $aluno->id }}',  '{{ $disciplina->id}}', '{{ $disciplina->nome }}', '{{ $disciplina->pivot->nota1 }}', '{{ $disciplina->pivot->nota2 }}');"> Definir Notas </button> </td>
                    <td> <a class="btn btn-danger btn-sm" href="{{ route('alunos.desassociarDisciplina', [$aluno->id, $disciplina->id])  }}"> Desassociar </a></td>
                </tr>
                @php
                    array_push($relacao_disciplinas_aluno, $disciplina->id)
                @endphp
                @endforeach
            </tbody>
        </table>

    <div class="card-footer">
        <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary btn-sm"> Associar Disciplina</button>
        <a class="btn btn-secondary btn-sm" href="{{ route('alunos.index')  }}"> Voltar </a>
    </div>
</div>

@component('componentes.associarDisciplina',
[
    "listaDisciplinas" => $listaDisciplinas,
    "aluno_id" => $aluno->id,
    "relacao_disciplinas_aluno" => $relacao_disciplinas_aluno,
])

@endcomponent

@component('componentes.definirNotas',
[
    "listaDisciplinas" => $listaDisciplinas,
    "aluno_id" => $aluno->id,
])

@endcomponent

@endsection

<script>
    function definirCamposModal(aluno_id, disciplina_id, disciplina_nome, nota1, nota2){
        $('#aluno_id_nota').val(aluno_id)
        $('#disciplina_id_nota').val(disciplina_id)
        $('#disciplina_nome_nota').val(disciplina_nome)
        $('#nota1').val(nota1)
        $('#nota2').val(nota2)
    }
</script>