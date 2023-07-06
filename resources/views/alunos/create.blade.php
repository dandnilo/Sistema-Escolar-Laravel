@extends('padrao.layout', ["ativo" => "aluno"])

@section('titulo')
    Formulário de cadastro
@endsection

@section('conteudo')

<form action="{{ route('alunos.store') }}" method="POST">
@csrf

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Cadastros de Alunos</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Ra">RA: </label><input type="text" class="form-control" placeholder="Informe o RA" name="ra">
            </div>

            <div class="col-sm">
                <label for="Nome">Nome: </label><input type="text" class="form-control" placeholder="Informe o nome" name="nome">
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                  <label for="Email">Email: </label><input type="text" class="form-control" placeholder="Informe o email" name="email">
             </div>

            <div class="col-sm">
                <label for="Idade">Idade: </label><input type="text" class="form-control" placeholder="Informe a idade" name="idade">
            </div>

            <div class="col-sm">
                <label for="turma"> Turma:</label>
                    <select class="form-control" name="turma" id="turma">
                        @foreach ($listaTurmas as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                        @endforeach
                    </select>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-primary btn-sm" type="submit">Gravar Registro</button>
        <a class="btn btn-secondary btn-sm" href="{{ route('alunos.index')  }}"> Voltar </a>
    </div>
</div>
</form>
@endsection