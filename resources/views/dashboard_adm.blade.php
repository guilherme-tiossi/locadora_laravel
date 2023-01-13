@include('includes.head')
@include('includes.header_adm')
<form method="GET" action="{{ route('pegar_ano') }}">
    <input type="text" name="ano"> 
</form>
<p> Ano: {{$ano}} </p>
<p> Janeiro: {{$jan}} </p>
<p> Fevereiro: {{$fev}} </p>
<p> Março: {{$mar}} </p>
<p> Abril: {{$abr}} </p>
<p> Maio: {{$mai}} </p>
<p> Junho: {{$jun}} </p>
<p> Julho: {{$jul}} </p>
<p> Agosto: {{$ago}} </p>
<p> Setembro: {{$set}} </p>
<p> Outubro: {{$out}} </p>
<p> Novembro: {{$nov}} </p>
<p> Dezembro: {{$dez}} </p>
