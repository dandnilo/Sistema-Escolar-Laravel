@extends('padrao.layout', ["ativo" => "turma"])

@section('titulo')
Lista de turmas
@endsection

@section('conteudo')

<div class="card">
  <div class="card-header">
  <h3>Lista de turmas:</h3>
</div>
  <div class="card-body">
  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ano</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
@foreach($listaTurmas as $turma)
      <tr>
        <td>{{ $turma->id }}</td>
        <td>{{ $turma->nome }}</td>
        <td>{{ $turma->ano }}</td>
        <td><a class="btn btn-primary btn-sm" href="{{ route('turmas.show', $turma->id) }}"> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ route('turmas.edit', $turma->id)  }}"> Alterar </a></td>
        <td><form action="{{ route('turmas.destroy', $turma->id)  }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  <div class="card-footer">
  <a class="btn btn-primary btn-sm" href="{{ route('turmas.create') }}">Nova Turma</a>
</div>
</div>

@endsection 