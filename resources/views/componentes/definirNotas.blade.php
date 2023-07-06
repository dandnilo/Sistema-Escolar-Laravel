<!-- The Modal -->
<div class="modal fade" id="modalNotas" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">Relação de Disciplinas</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                <form action="{{ route('alunos.definirNotasDisciplina') }}" method="POST">
                    @csrf
                    <div class="col">
                        <input type="hidden" name="aluno_id_nota" id="aluno_id_nota">
                        <input type="hidden" name="disciplina_id_nota" id="disciplina_id_nota">
                        <label for="disciplina"> Disciplina:</label>
                        <input class="form-control"type="text" name="disciplina_nome_nota" id="disciplina_nome_nota" readonly>
                    </div>
            </div>

            <div class="row">
                <div class="col col-md-6 mt-2">
                    <label for="nota1">Nota 1:</label>
                    <input class="form-control"type="text" name="nota1" id="nota1">
                </div>

                <div class="col col-md-6 mt-2">
                    <label for="nota2">Nota 2:</label>
                    <input class="form-control"type="text" name="nota2" id="nota2">
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <div class="row">
                <div class="col ">
                    <button type="submit" class="btn btn-primary btn-block" data-bs-dismiss="modal">Gravar</button>
                </div>
                <div class="col ">
                    <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        </form>
      </div>
    </div>
</div>