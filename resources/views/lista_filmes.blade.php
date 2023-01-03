@include('includes.head')
@include('includes.header_locatario')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @foreach($filmes as $f)
                    <h1> {{$f->titulo_filme}} </h1>
                    <p> {{$f->sinopse_filme}} </h1>
                    <p> {{$f->nome_genero}} </h1>
                    <br> <a href='alugar?filme={{$f->id_filme}}&data={{$data = date("y/m/d", strtotime("+7 days"))}}'> Alugar </a>
                    <br> <br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
