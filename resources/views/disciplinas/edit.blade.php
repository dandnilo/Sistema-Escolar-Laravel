@extends('padrao.layout', ["ativo" => "disciplina"])

@section('titulo')
    Formulário de alteração
@endsection

@section('conteudo')

<form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Alteração de disciplina</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="nome">Nome: </label><input type="text" class="form-control" value="{{ $disciplina->nome }}" name="nome">
                </div>

                <div class="col-sm">
                    <label for="carga_horaria">Carga Horária: </label><input type="text" class="form-control" value="{{ $disciplina->carga_horaria }}" name="carga_horaria">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Alterar Registro</button>
            <a class="btn btn-secondary btn-sm" href="{{ route('disciplinas.index')  }}"> Voltar </a>
        </div>
    </div>
</form>
@endsection