

<?php $__env->startSection('titulo'); ?>
Sistema de Controle Acadêmicoo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Alunos da Turma: <?php echo e($turma->nome); ?></h3>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>RA</th>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $turma->alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($aluno->id); ?> </td>
                    <td> <?php echo e($aluno->Ra->numero); ?></td>
                    <td> <?php echo e($aluno->nome); ?> </td>
                    <td> <?php echo e($aluno->email); ?></td>
                    <td> <?php echo e($aluno->idade); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    <div class="card-footer">
        <a class="btn btn-secondary btn-sm" href="<?php echo e(route('turmas.index')); ?>"> Voltar </a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', ["ativo" => "turma"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/turmas/informacoes.blade.php ENDPATH**/ ?>