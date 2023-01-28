@include('includes.head')
@include('includes.header_adm')

<form method="GET" action="{{ route('pegar_ano') }}">
    <input type="text" name="ano"> 
</form>
<h2> Ano: {{$ano}} </h1>
<p id='jan' class='to-hide'> {{$meses[0]}} </p>
<p id='fev' class='to-hide'> {{$meses[1]}} </p>
<p id='mar' class='to-hide'> {{$meses[2]}} </p>
<p id='abr' class='to-hide'> {{$meses[3]}} </p>
<p id='mai' class='to-hide'> {{$meses[4]}} </p>
<p id='jun' class='to-hide'> {{$meses[5]}} </p>
<p id='jul' class='to-hide'> {{$meses[6]}} </p>
<p id='ago' class='to-hide'> {{$meses[7]}} </p>
<p id='set' class='to-hide'> {{$meses[8]}} </p>
<p id='out' class='to-hide'> {{$meses[9]}} </p>
<p id='nov' class='to-hide'> {{$meses[10]}} </p>
<p id='dez' class='to-hide'> {{$meses[11]}} </p>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<h3> Lucros total do período: {{$lucros_totais}} </h3>

@foreach ($dados_financeiros as $df)
<p> {{$df->periodo}}:  {{$df->receita_total * 1000}} </p>
@endforeach
<b> {{$periodo}}:  {{$receita_atual}} </b>
@include('includes.footer_adm')