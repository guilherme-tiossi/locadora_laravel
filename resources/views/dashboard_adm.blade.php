@include('includes.head')
@include('includes.header_adm')

<form method="GET" action="{{ route('pegar_ano') }}">
    <input type="text" name="ano"> 
</form>
<h2> Ano: {{$ano}} </h1>
<p id='jan' class='to-hide'> {{$jan}} </p>
<p id='fev' class='to-hide'> {{$fev}} </p>
<p id='mar' class='to-hide'> {{$mar}} </p>
<p id='abr' class='to-hide'> {{$abr}} </p>
<p id='mai' class='to-hide'> {{$mai}} </p>
<p id='jun' class='to-hide'> {{$jun}} </p>
<p id='jul' class='to-hide'> {{$jul}} </p>
<p id='ago' class='to-hide'> {{$ago}} </p>
<p id='set' class='to-hide'> {{$set}} </p>
<p id='out' class='to-hide'> {{$out}} </p>
<p id='nov' class='to-hide'> {{$nov}} </p>
<p id='dez' class='to-hide'> {{$dez}} </p>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<h3> Lucros totais: {{$lucros_totais}} </h3>

@foreach ($dados_financeiros as $df)
<p> {{$df->periodo}}:  {{$df->receita_total * 1000}} </p>
@endforeach
@include('includes.footer_adm');