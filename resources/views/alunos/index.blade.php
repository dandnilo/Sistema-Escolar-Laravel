@extends('padrao.layout', ["ativo" => "aluno"])

@section('titulo')
Lista de alunos
@endsection

@section('conteudo')

<div class="card">
  <div class="card-header">
  <h3>Lista de alunos:</h3>
</div>
  <div class="card-body">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>RA</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Turma</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
@foreach($listaAlunos as $aluno)
      <tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->Ra->numero }}</td>
        <td>{{ $aluno->nome }}</td>
        <td>{{ $aluno->email }}</td>
        <td>{{ $aluno->idade }}</td>
        <td>{{ $aluno->turma->nome }}</td>
        <td><a class="btn btn-primary btn-sm" href="{{ route('alunos.show', $aluno->id) }}"> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ route('alunos.edit', $aluno->id) }}"> Alterar </a></td>
        <td><form action="{{ route('alunos.destroy', $aluno->id)  }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"> Excluir </button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  <div class="card-footer">
  <a class="btn btn-primary btn-sm" href="{{ route('alunos.create') }}">Novo Aluno</a>
</div>
</div>

@endsection