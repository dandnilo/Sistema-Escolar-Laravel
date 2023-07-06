<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <title>@yield('titulo')</title>
</head>
<style>
    a {
      color: black; /* Define a cor do texto do link para preto */
      text-decoration: none; /* Remove o sublinhado do link */
      font-weight: bold; /* Define a fonte como negrito */
    }
</style>
<body>

    <h1 class="text-center">Sistema de Controle Acadêmico</h1>

    <div class="container">
        @component('componentes.navbar', ["ativo" => $ativo])
        @endcomponent

        @yield('conteudo')
    </div>
</body>
</html>