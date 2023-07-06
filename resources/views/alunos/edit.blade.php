@extends('padrao.layout', ["ativo" => "aluno"])

@section('titulo')
    Formulário de alteração
@endsection

@section('conteudo')

<form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Alteração de cadastro</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="Ra">RA: </label><input type="text" class="form-control" value="{{ $aluno->ra->numero }}" name="ra">
                </div>

                <div class="col-sm">
                    <label for="Nome">Nome: </label><input type="text" class="form-control" value="{{ $aluno->nome }}" name="nome">
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <label for="Email">Email: </label><input type="text" class="form-control" value="{{ $aluno->email }}" name="email">
                </div>

                <div class="col-sm">
                    <label for="Idade">Idade: </label><input type="text" class="form-control" value="{{ $aluno->idade }}" name="idade">
                </div>

                <div>
                    <label for="turma"> Turma:</label>
                        <select class="form-control" name="turma" id="turma">
                            @foreach ($listaTurmas as $turma)
                                <option value="{{ $turma->id }}" 
                                    @if($turma->id == $aluno->turma->id)
                                        selected
                                    @endif
                                >{{ $turma->nome }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Alterar Registro</button>
            <a class="btn btn-secondary btn-sm" href="{{ route('alunos.index')  }}"> Voltar </a>
        </div>
    </div>
</form>
@endsection