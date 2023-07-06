@extends('padrao.layout', ["ativo" => "disciplina"])

@section('titulo')
    Formulário de cadastro
@endsection

@section('conteudo')

<form action="{{ route('disciplinas.store') }}" method="POST">
@csrf
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Cadastros de Disciplinas</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="Ra">Nome: </label><input type="text" class="form-control" placeholder="Informe nome da disciplina" name="nome">
                </div>

                <div class="col-sm">
                    <label for="Nome">Carga Horária: </label><input type="text" class="form-control" placeholder="Informe a carga horária" name="carga_horaria">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Gravar Registro</button>
            <a class="btn btn-secondary btn-sm" href="{{ route('disciplinas.index')  }}"> Voltar </a>
        </div>
    </div>
</form>
@endsection