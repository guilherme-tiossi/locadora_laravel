@include('includes.head')
@include('includes.header_locatario')

@foreach($alugueis as $f)
    <div class="div-center">
        <div class="div-filmes">
        <h1> {{$f->titulo_filme}} </h1>
        <hr>
        <p class="genero"> {{$f->nome_genero}} </p>
        <p class="sinopse"> {{$f->sinopse_filme}} </h1> <br>
        <iframe src="{{$video}}" allowfullscreen="allowfullscreen" width="640" height="280"> </iframe>
        <a class="link" <a href='devolver?filme={{$f->id_filme}}'> Devolver </a>
        </div>
    </div>
@endforeach