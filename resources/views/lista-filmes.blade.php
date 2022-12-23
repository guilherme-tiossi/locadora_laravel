<x-app-layout>
<section name="menu_inicial">
<header id="menu">
    <nav class="menu-topo">
        <div style="display: flex;">
            <h2 class="titulo-menu"> Barkaflix</h2>
            <form class="form-pesquisa">
                <input type="text" name="pesquisa" class="input-pesquisa">
                <button type="submit" name="pesquisar" class="btn-pesquisa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        <div class="div-center">
        <ul class="ul-menu">
            <li class="lista-menu"> <a class="link-menu" href="/lista-filmes"> Filmes para alugar </a> </li>
            <li class="lista-menu"> <a class="link-menu" href="/filmes-alugados"> Meus filmes alugados </a> </li>
            <li class="lista-menu">
                <form method="POST" class="btn-sair" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link class="link-menu" :href="'/logout'"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
        </div>
        </div>
    </nav>
</header>
</section>
    @foreach($filmes as $f)
        <h1> {{$f->titulo_filme}} </h1>
        <p> {{$f->sinopse_filme}} </h1>
        <br> <br>
    @endforeach
</x-app-layout>
