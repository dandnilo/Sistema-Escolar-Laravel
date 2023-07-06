

<?php $__env->startSection('titulo'); ?>
Lista de disciplinas
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
  <h3>Lista de disciplinas:</h3>
</div>
  <div class="card-body">
  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Carga Horária</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $listaDisciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($disciplina->id); ?></td>
        <td><?php echo e($disciplina->nome); ?></td>
        <td><?php echo e($disciplina->carga_horaria); ?></td>
        <td><a class="btn btn-primary btn-sm" href=""> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="<?php echo e(route('disciplinas.edit', $disciplina->id)); ?>"> Alterar </a></td>
        <td><form action="<?php echo e(route('disciplinas.destroy', $disciplina->id)); ?>" method="POST">
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
  <a class="btn btn-primary btn-sm" href="<?php echo e(route('disciplinas.create')); ?>">Nova Disciplina</a>
</div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('padrao.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/disciplinas.blade.php ENDPATH**/ ?>