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

<div class="listaFilmesAdm" id="listaFilmes"> 

        @foreach($filmes as $f) <!-- lendo todos os filmes do banco de dados (variável $filmes vindo do controller) !--> 
        <p class="to-hide">{{$id_filme_completo = $f->id_filme . "_completo";}} </p>

        <div class="filme" id="{{$f->id_filme}}">
            <p> {{$f->id_filme}} </p> <!-- leitura do id de x filme !-->
            <p> {{$f->titulo_filme}} </p> <!-- leitura do título de x filme !-->
            <button id="button" value="{{$f->id_filme}}" onclick="exibirFilmesCompletos(this.value)"> Ver mais </button>
            <br> <br>
            </div>

            <div class="to-hide" id="{{$id_filme_completo}}">
            <p> {{$f->id_filme}} </p> <!-- leitura do id de x filme !-->
            <p> {{$f->titulo_filme}} </p> <!-- leitura do título de x filme !-->
            <p> {{$f->sinopse_filme}} </p>
            <button id="button" value="{{$id_filme_completo}}" onclick="exibirFilmesCompletos(this.value)"> Ver menos </button>
            <br> <br>
            </div>
        @endforeach

               <script>
                function pegarId(clicked_id){
                   let id = clicked_id;
                   console.log(id);
                    
                }        
               </script>
</div>

</body>
</html>
