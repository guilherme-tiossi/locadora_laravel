@include('includes.head')
@include('includes.header_locatario')
<p id="date" class="to-hide"> {{$data}} </p>

<div id="dynamic_row">
@foreach($filmes as $f)
<div class="div-center">
    <div class="div-filmes">
    <h1> {{$f->titulo_filme}} </h1>
    <hr>
    <p class="genero"> {{$f->nome_genero}} </p>
    <p class="sinopse"> {{$f->sinopse_filme}} </h1> <br>
    <a class="link" href='alugar?filme={{$f->id_filme}}&data={{$data = date("y/m/d", strtotime("+7 days"))}}&valor={{$f->valor_filme}}'> Alugar </a>
    </div>
</div>
@endforeach
</div>

@include('includes.footer_locatario');