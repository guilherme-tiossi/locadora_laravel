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

        <!-- objetivo: um foreach que lê o id e o nome de cada filme da tabela dentro de uma div (essa parte está 
        funcionando!), e cada div de filme deve ter um botão que, quando acionado, exiba no console o id do filme
        da div correspondente  !-->
        @foreach($filmes as $f) <!-- lendo todos os filmes do banco de dados (variável $filmes vindo do controller) !--> 
            <div class="filme" id="{{$f->id_filme}}">
            <p> {{$f->id_filme}} </p> <!-- leitura do id de x filme !-->
            <p> {{$f->titulo_filme}} </p> <!-- leitura do título de x filme !-->
            <button id="button" value="{{$f->id_filme}}" onclick="pegarId()"> Exibir id_filme no console </button>
            <!-- botão para recuperar o id_filme do filme sendo exibido nessa div de filme via value
            para então recuperar esse id na função pegarId() !--> 
            <br> <br>
            </div>
        @endforeach <!-- fim do foreach !-->

               <script>
                function pegarId(){
                   let id = document.getElementById("button").value;
                   //document.getElementById("button").value
                   console.log(id);
                   // a ideia aqui era só exibir o value do button esperando que exiba no console o id de
                   // x filme, mas o que acontece é que o console exibe apenas o primeiro ID dos filmes do
                   // foreach pelo número de vezes igual a quantidade de filmes dentro do foreach (se tiver
                   // 15 filmes na tabela, ele exibe o id do 1/15 filme quinze vezes)
                   
                   //outra questão que eu não entendi direito é que essa função só é executada uma vez, quando
                   //a intenção era que em todo botão clicado de cada filme específico fosse exibido seu id no console
                }        
               </script>
</div>

</body>
</html>
