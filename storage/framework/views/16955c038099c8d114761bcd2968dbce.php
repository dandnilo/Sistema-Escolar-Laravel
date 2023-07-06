

<?php $__env->startSection('titulo'); ?>
    Formulário de cadastro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<form action="<?php echo e(route('alunos.store')); ?>" method="POST">
<?php echo csrf_field(); ?>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Cadastros de Alunos</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Ra">RA: </label><input type="text" class="form-control" placeholder="Informe o RA" name="ra">
            </div>

            <div class="col-sm">
                <label for="Nome">Nome: </label><input type="text" class="form-control" placeholder="Informe o nome" name="nome">
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                  <label for="Email">Email: </label><input type="text" class="form-control" placeholder="Informe o email" name="email">
             </div>

            <div class="col-sm">
                <label for="Idade">Idade: </label><input type="text" class="form-control" placeholder="Informe a idade" name="idade">
            </div>

            <div class="col-sm">
                <label for="turma"> Turma:</label>
                    <select class="form-control" name="turma" id="turma">
                        <?php $__currentLoopData = $listaTurmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($turma->id); ?>"><?php echo e($turma->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-primary btn-sm" type="submit">Gravar Registro</button>
        <a class="btn btn-secondary btn-sm" href="<?php echo e(route('alunos.index')); ?>"> Voltar </a>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', ["ativo" => "aluno"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/alunos/create.blade.php ENDPATH**/ ?>