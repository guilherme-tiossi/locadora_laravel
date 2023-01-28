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
<h3> Lucros totais do período: {{$lucros_totais}} </h3>

<div class="div-center"> <div class="table_crud_fg">
<table class="tabela">
<tr> 
    <th> Período </th>
    <th> Lucros </th>
</tr>
<tr> <td> <b> {{$periodo}} </b> </td>
<td> <b> {{$receita_atual}} </b> </td> </tr>
@foreach ($dados_financeiros as $df)
<tr> <td> {{$df->periodo}} </td>
<td> {{$df->receita_total * 1000}} </td> </tr>
@endforeach
</table>
</div> </div>
@include('includes.footer_adm')