<nav class="navbar navbar-expand-sm bg-light">
 
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if($ativo == "aluno") active @endif" href="{{ route('alunos.index') }}">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($ativo == "turma") active  @endif" href="{{ route('turmas.index') }}">Turmas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($ativo == "disciplina") active  @endif" href="{{ route('disciplinas.index') }}">Disciplinas</a>
        </li>
      </ul>
    </div>
  
</nav>