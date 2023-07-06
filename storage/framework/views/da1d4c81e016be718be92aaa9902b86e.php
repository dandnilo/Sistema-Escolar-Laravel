

<?php $__env->startSection('titulo'); ?>
    Formulário de alteração
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<h1 class="text-center">Alteração de Turmas</h1>

<form action="<?php echo e(route('turmas.update', $turma->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo e($turma->nome); ?>" name="nome">
    </div>
<br>
    <div class="col">
      <input type="text" class="form-control" value="<?php echo e($turma->ano); ?>" name="ano">
    </div>
<br>
    <div class="col">
        <button class="btn btn-primary btn-sm form-control" type="submit">Gravar Registro</button>
    </div>
<br>
    <div class="col">
        <a class="btn btn-secondary btn-sm form-control" href="<?php echo e(route('turmas.index')); ?>"> Voltar </a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/formularioAlteracaoTurmas.blade.php ENDPATH**/ ?>