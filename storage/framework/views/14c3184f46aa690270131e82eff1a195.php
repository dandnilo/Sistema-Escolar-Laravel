

<?php $__env->startSection('titulo'); ?>
    Formulário de alteração
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<form action="<?php echo e(route('disciplinas.update', $disciplina->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Alteração de disciplina</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="nome">Nome: </label><input type="text" class="form-control" value="<?php echo e($disciplina->nome); ?>" name="nome">
                </div>

                <div class="col-sm">
                    <label for="carga_horaria">Carga Horária: </label><input type="text" class="form-control" value="<?php echo e($disciplina->carga_horaria); ?>" name="carga_horaria">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Alterar Registro</button>
            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('disciplinas.index')); ?>"> Voltar </a>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', ["ativo" => "disciplina"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/disciplinas/edit.blade.php ENDPATH**/ ?>