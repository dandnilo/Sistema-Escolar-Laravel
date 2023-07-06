<!-- The Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">Relação de Disciplinas</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                <form action="{{ route('alunos.associarDisciplina') }}" method="POST">
                @csrf
                <div class="col">
                    <label for="disciplina"> Disciplinas:</label>
                    <input type="hidden" name="aluno_id" id="aluno_id" value="{{ $aluno_id }}">
                    <select class="form-control" name="disciplina_id" id="disciplina_id">
                        @foreach ($listaDisciplinas as $disciplina)
                                @if (! in_array($disciplina->id, $relacao_disciplinas_aluno))
                                        <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
                                @endif   
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm btn-block" data-bs-dismiss="modal">Associar</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary btn-sm btn-block" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        </form>
      </div>
    </div>
</div>