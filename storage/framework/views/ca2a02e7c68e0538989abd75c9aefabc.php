

<?php $__env->startSection('titulo'); ?>
Lista de alunos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="card">
  <div class="card-header">
  <h3>Lista de alunos:</h3>
</div>
  <div class="card-body">
  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th colspan="3">Operações</th>
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $listaAlunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($aluno->id); ?></td>
        <td><?php echo e($aluno->nome); ?></td>
        <td><?php echo e($aluno->email); ?></td>
        <td><?php echo e($aluno->idade); ?></td>
        <td><a class="btn btn-primary btn-sm" href=""> Informações </a></td>
        <td><a class="btn btn-warning btn-sm" href="<?php echo e(route('alunos.edit', $aluno->id)); ?>"> Alterar </a></td>
        <td><form action="<?php echo e(route('alunos.destroy', $aluno->id)); ?>" method="POST">
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
  <a class="btn btn-primary btn-sm" href="<?php echo e(route('alunos.create')); ?>">Novo Aluno</a>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', ["ativo" => "aluno"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/alunos/index.blade.php ENDPATH**/ ?>