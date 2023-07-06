

<?php $__env->startSection('titulo'); ?>
Sistema de Controle Acadêmicoo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações do aluno: <?php echo e($aluno->nome); ?></h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Ra">RA: </label><input type="text" class="form-control" value="<?php echo e($aluno->ra->numero); ?>" name="ra" readonly>
            </div>

            <div class="col-sm">
                <label for="Nome">Nome: </label><input type="text" class="form-control" value="<?php echo e($aluno->nome); ?>" name="nome" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                  <label for="Email">Email: </label><input type="text" class="form-control" value="<?php echo e($aluno->email); ?>" name="email" readonly>
             </div>

            <div class="col-sm">
                <label for="Idade">Idade: </label><input type="text" class="form-control" value="<?php echo e($aluno->idade); ?>" name="idade" readonly>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações da Turma: <?php echo e($aluno->turma->nome); ?></h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <label for="Turma">Turma: </label><input type="text" class="form-control" value="<?php echo e($aluno->turma->nome); ?>" name="turma" readonly>
            </div>

            <div class="col-sm">
                <label for="Ano">Ano: </label><input type="text" class="form-control" value="<?php echo e($aluno->turma->ano); ?>" name="ano" readonly>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 style="font-weight: bold">Informações das Disciplinas</h3>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Carga Horária:</th>
                    <th>Nota 1:</th>
                    <th>Nota 2:</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $relacao_disciplinas_aluno [] = [];
                ?>
                <?php $__currentLoopData = $aluno->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($disciplina->id); ?> </td>
                    <td> <?php echo e($disciplina->nome); ?></td>
                    <td> <?php echo e($disciplina->carga_horaria); ?> </td>
                    <td> <?php echo e($disciplina->pivot->nota1); ?></td>
                    <td> <?php echo e($disciplina->pivot->nota2); ?></td>
                    <td> <button data-bs-toggle="modal" data-bs-target="#modalNotas" class="btn btn-warning btn-sm" onclick="definirCamposModal('<?php echo e($aluno->id); ?>',  '<?php echo e($disciplina->id); ?>', '<?php echo e($disciplina->nome); ?>', '<?php echo e($disciplina->pivot->nota1); ?>', '<?php echo e($disciplina->pivot->nota2); ?>');"> Definir Notas </button> </td>
                    <td> <a class="btn btn-danger btn-sm" href="<?php echo e(route('alunos.desassociarDisciplina', [$aluno->id, $disciplina->id])); ?>"> Desassociar </a></td>
                </tr>
                <?php
                    array_push($relacao_disciplinas_aluno, $disciplina->id)
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    <div class="card-footer">
        <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary btn-sm"> Associar Disciplina</button>
        <a class="btn btn-secondary btn-sm" href="<?php echo e(route('alunos.index')); ?>"> Voltar </a>
    </div>
</div>

<?php $__env->startComponent('componentes.associarDisciplina',
[
    "listaDisciplinas" => $listaDisciplinas,
    "aluno_id" => $aluno->id,
    "relacao_disciplinas_aluno" => $relacao_disciplinas_aluno,
]); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('componentes.definirNotas',
[
    "listaDisciplinas" => $listaDisciplinas,
    "aluno_id" => $aluno->id,
]); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<script>
    function definirCamposModal(aluno_id, disciplina_id, disciplina_nome, nota1, nota2){
        $('#aluno_id_nota').val(aluno_id)
        $('#disciplina_id_nota').val(disciplina_id)
        $('#disciplina_nome_nota').val(disciplina_nome)
        $('#nota1').val(nota1)
        $('#nota2').val(nota2)
    }
</script>
<?php echo $__env->make('padrao.layout', ["ativo" => "aluno"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\04-Relacionamentos\resources\views/alunos/informacoes.blade.php ENDPATH**/ ?>