<nav class="navbar navbar-expand-sm bg-light">
 
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($ativo == "aluno"): ?> active <?php endif; ?>" href="<?php echo e(route('alunos.index')); ?>">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($ativo == "turma"): ?> active  <?php endif; ?>" href="<?php echo e(route('turmas.index')); ?>">Turmas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($ativo == "disciplina"): ?> active  <?php endif; ?>" href="<?php echo e(route('disciplinas.index')); ?>">Disciplinas</a>
        </li>
      </ul>
    </div>
  
</nav><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/componentes/navbar.blade.php ENDPATH**/ ?>