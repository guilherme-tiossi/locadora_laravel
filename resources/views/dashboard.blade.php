@include('includes.head')
@include('includes.header_locatario')
            <div class="p-6 text-gray-900" id="banana">
                @foreach ($filmes_pesquisa as $key => $filme)
                    <h1> {{$filme->titulo_filme}} </h1>
                    <p> {{$filme->sinopse_filme}} </h1>
                    <a href='alugar?filme={{$f->id_filme}}&data={{$data = date("y/m/d", strtotime("+7 days"))}}'> Alugar </a>
                    <br><br>
                @endforeach
                </div>        