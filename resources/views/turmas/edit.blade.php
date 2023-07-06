@extends('padrao.layout', ["ativo" => "turma"])

@section('titulo')
    Formulário de alteração
@endsection

@section('conteudo')

<form action="{{ route('turmas.update', $turma->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Alteração de turmas</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="nome">Nome: </label><input type="text" class="form-control" value="{{ $turma->nome }}" name="nome">
                </div>

                <div class="col-sm">
                    <label for="ano">Ano: </label><input type="text" class="form-control" value="{{ $turma->ano }}" name="ano">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Alterar Registro</button>
            <a class="btn btn-secondary btn-sm" href="{{ route('turmas.index')  }}"> Voltar </a>
        </div>
    </div>
</form>
@endsection