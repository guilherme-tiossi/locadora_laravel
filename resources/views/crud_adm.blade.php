@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-center">

                    <!-- form genero -->
    <div class="div-login">
    <form method="POST" action="{{ route('create_genero') }}">
        @csrf

        <h1> Cadastrar gênero: </h1>
        <div>
            <x-text-input id="genero" placeholder="Gênero" class="input-login" type="text" name="genero" :value="old('genero')" required autofocus />
        </div>

        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        </div>
    </form>
    </div>
    
                    <!-- form filme -->
    <div class="div-crud-adm">
    <form method="POST" action="{{ route('create_filme') }}">
        @csrf

        <h1> Cadastrar filme: </h1>
        <div>
            <x-text-input id="titulo_filme" placeholder="Título" class="input-login" type="text" name="titulo_filme" :value="old('titulo_filme')" required autofocus />
        </div>
        <div>
            <x-text-input id="sinopse_filme" placeholder="Sinopse" class="input-login" type="text" name="sinopse_filme" :value="old('sinopse_filme')" required autofocus />
        </div>
        <div>
            <x-text-input id="valor_filme" placeholder="Valor" class="input-login" type="text" name="valor_filme" :value="old('valor_filme')" required autofocus />
        </div>
        <div>
            <x-text-input id="disponiveis_filme" placeholder="Disponíveis" class="input-login" type="text" name="disponiveis_filme" :value="old('disponiveis_filme')" required autofocus />
        </div>

        <div>
        <select id="genero_filme" name="genero_filme">
            @foreach($generos as $g)
                <option value='{{$g->id_genero}}'>{{$g->nome_genero}}</option>
            @endforeach
            </select>
        </div>
        
        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        </div>
    </form>
    </div>
</div>

<div class="div-center">
    <div class="listaGenerosAdm"> 
        @foreach($generos as $g)
            <p> {{$g->id_genero}} </p> <br>
            <p> {{$g->nome_genero}} </p>
            <a onclick="return editar()"> editar </a> 
        @endforeach
    </div>
</div>

<div class="div-center">
<div class="listaFilmesAdm" id="listaFilmes"> 
        @foreach($filmes as $f)
            <p> {{$f->id_filme}} </p> <br>
            <p> {{$f->titulo_filme}} </p> <br>
            <a onclick="editarFilme()"> editar </a>
        @endforeach
    </div>

    <div class="to-hide" id="listaCompletaFilmes"> 
        @foreach($filmes as $f)
            <p> {{$f->id_filme}} </p> <br>
            <p> {{$f->titulo_filme}} </p> <br>
            <p> {{$f->genero_filme}} </p> <br>
            <p> {{$f->sinopse_filme}} </p> <br>
            <a onclick="return editarFilme()"> editar </a>
        @endforeach
    </div>

</div>

</body>
</html>
