@extends('padrao.layout', ["ativo" => "turma"])

@section('titulo')
    Formulário de cadastro
@endsection

@section('conteudo')

<form action="{{ route('turmas.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Cadastros de Turma</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="nome">Nome: </label><input type="text" class="form-control" placeholder="Informe nome da turma" name="nome">
                </div>

                <div class="col-sm">
                    <label for="ano">Ano: </label><input type="text" class="form-control" placeholder="Informe ano da turma" name="ano">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Gravar Registro</button>
            <a class="btn btn-secondary btn-sm" href="{{ route('turmas.index')  }}"> Voltar </a>
        </div>
    </div>
</form>
@endsection