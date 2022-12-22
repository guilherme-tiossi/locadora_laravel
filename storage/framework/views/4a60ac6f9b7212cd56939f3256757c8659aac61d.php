<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section name="menu_inicial">
    <h2> Barkaflix </h2>    
    <p> Bem vindo, usuário! </p>
    <a href="deslogar"> Sair </a>
<header id="menu">
    <nav>
        <ul>
            <li> <a href="/lista-filmes"> Filmes para alugar </a> </li>
            <li> <a href="/filmes-alugados"> Meus filmes alugados </a> </li>
        </ul>
    </nav>
</header>
</section>

<?php echo $__env->yieldContent('content'); ?>

    <footer>
        <p> Todos os direitos reservados, Barkaflix 2022 </p>
    </footer>

</body>
</html><?php /**PATH /home/tiossi/act311/locadora_laravel/resources/views/templates/user_template.blade.php ENDPATH**/ ?>