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
                <form action="<?php echo e(route('alunos.associarDisciplina')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="col">
                    <label for="disciplina"> Disciplinas:</label>
                    <input type="hidden" name="aluno_id" id="aluno_id" value="<?php echo e($aluno_id); ?>">
                    <select class="form-control" name="disciplina_id" id="disciplina_id">
                        <?php $__currentLoopData = $listaDisciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(! in_array($disciplina->id, $relacao_disciplinas_aluno)): ?>
                                        <option value="<?php echo e($disciplina->id); ?>"><?php echo e($disciplina->nome); ?></option>
                                <?php endif; ?>   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</div><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/componentes/associarDisciplina.blade.php ENDPATH**/ ?>