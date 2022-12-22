<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="{{url('https://kit.fontawesome.com/051b5b0d64.js')}}" crossorigin="anonymous"></script>
    <title>Barkaflix</title>
</head>
<body>

<section name="menu_inicial">
<header id="menu">
    <nav>
        <div style="display: flex;">
            <h2 class="titulo-menu"> Barkaflix</h2>
            <form class="form-pesquisa">
                <input type="text" name="pesquisa" class="input-pesquisa">
                <button type="submit" name="pesquisar" class="btn-pesquisa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <ul class="menu-lateral">
            <li class="lista-menu"> <a class="link-menu" href="/lista-filmes"> Filmes para alugar </a> </li>
            <li class="lista-menu"> <a class="link-menu" href="/filmes-alugados"> Meus filmes alugados </a> </li>
            <li class="lista-menu"> <a class="link-menu" href="deslogar"> Sair </a> </li>
        </ul>
    </nav>
</header>
</section>

@yield('content')
<i class="fa-solid fa-magnifying-glass">

</body>
</html>