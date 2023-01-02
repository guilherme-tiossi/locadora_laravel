@include('includes.head')
@include('includes.header_locatario')
            <div class="p-6 text-gray-900">
                @foreach($filmes as $f)
                    <h1> {{$f->titulo_filme}} </h1>
                    <p> {{$f->sinopse_filme}} </h1>
                    <a href='alugar?filme={{$f->id_filme}}&data={{$data = date("y/m/d", strtotime("+7 days"))}}'> Alugar </a>
                    <br><br>
                @endforeach
                </div>        
