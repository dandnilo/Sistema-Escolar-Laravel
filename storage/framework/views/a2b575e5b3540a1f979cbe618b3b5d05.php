

<?php $__env->startSection('titulo'); ?>
    Formulário de cadastro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<form action="<?php echo e(route('disciplinas.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight: bold">Cadastros de Disciplinas</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <label for="Ra">Nome: </label><input type="text" class="form-control" placeholder="Informe nome da disciplina" name="nome">
                </div>

                <div class="col-sm">
                    <label for="Nome">Carga Horária: </label><input type="text" class="form-control" placeholder="Informe a carga horária" name="carga_horaria">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-sm" type="submit">Gravar Registro</button>
            <a class="btn btn-secondary btn-sm" href="<?php echo e(route('disciplinas.index')); ?>"> Voltar </a>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('padrao.layout', ["ativo" => "disciplina"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/disciplinas/create.blade.php ENDPATH**/ ?>