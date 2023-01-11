@include('includes.head')
@include('includes.header_adm')
@foreach ($alugueis_totais as $lt)
    <p> {{$lt->valor_filme}} </p> <br>
@endforeach

<h2> {{$lucros_totais}} </h1>