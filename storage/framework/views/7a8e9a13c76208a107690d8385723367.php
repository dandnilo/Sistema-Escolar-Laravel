

<?php $__env->startSection('titulo'); ?>
Lista de turmas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="container">
      <h1 class="text-center">Sistema de Controle Acadêmico</h1>
</div>

<div class="col">
<a href="alunos">Alunos</a>
<a href="turmas">Turmas</a>
<a href="disciplinas">Disciplinas</a>
</div>

<div class="card">
  <div class="card-header">
  <h3>Lista de turmas:</h3>
</div>
  <div class="card-body">
  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ano</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $listaTurmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($turma->id); ?></td>
        <td><?php echo e($turma->nome); ?></td>
        <td><?php echo e($turma->ano); ?></td>
        <td><a class="btn btn-primary btn-sm" href=""> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="<?php echo e(route('turmas.edit', $turma->id)); ?>"> Alterar </a></td>
        <td><form action="<?php echo e(route('turmas.destroy', $turma->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
        </form></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
  <div class="card-footer">
  <a class="btn btn-primary btn-sm" href="<?php echo e(route('turmas.create')); ?>">Nova Turma</a>
</div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('padrao.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/turmas.blade.php ENDPATH**/ ?>