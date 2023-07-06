

<?php $__env->startSection('titulo'); ?>
    Formulário de cadastro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<h1 class="text-center">Cadastro de Turmas</h1>

<form action="<?php echo e(route('turmas.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
    <div class="col">
      <input type="text" class="form-control" placeholder="Informe nome da turma" name="nome">
    </div>
<br>
    <div class="col">
      <input type="text" class="form-control" placeholder="Informe ano da turma" name="ano">
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
<?php echo $__env->make('padrao.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/formularioInclusaoTurmas.blade.php ENDPATH**/ ?>