<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<style>
    a {
      color: black; /* Define a cor do texto do link para preto */
      text-decoration: none; /* Remove o sublinhado do link */
      font-weight: bold; /* Define a fonte como negrito */
    }
</style>
<body>
    <h1 class="text-center mt-3">Sistema de Controle Acadêmico</h1>
    
    <div class="container">


        <?php echo $__env->yieldContent('conteudo'); ?>
    </div>
</body>
</html><?php /**PATH C:\Users\mathe\Desktop\Projetos Laravel\03-Modelos\resources\views/padrao/layout.blade.php ENDPATH**/ ?>