@extends('padrao.layout', ["ativo" => "disciplina"])

@section('titulo')
Lista de disciplinas
@endsection

@section('conteudo')

<div class="card">
  <div class="card-header">
    <h3>Lista de disciplinas:</h3>
  </div>

  <div class="card-body">
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Carga Horária</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
@foreach($listaDisciplinas as $disciplina)
      <tr>
        <td>{{ $disciplina->id }}</td>
        <td>{{ $disciplina->nome }}</td>
        <td>{{ $disciplina->carga_horaria }}</td>
        <td><a class="btn btn-primary btn-sm" href="{{ route('disciplinas.show', $disciplina->id) }}"> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ route('disciplinas.edit', $disciplina->id)  }}"> Alterar </a></td>
        <td><form action="{{ route('disciplinas.destroy', $disciplina->id)  }}" method="POST">
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
  <a class="btn btn-primary btn-sm" href="{{ route('disciplinas.create') }}">Nova Disciplina</a>
</div>
</div>

@endsection 