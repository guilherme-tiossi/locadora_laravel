@extends ('templates.user_template')
@section ('content')

@foreach($filmes as $f)
    <h1> {{$f->titulo_filme}} </h1>
    <p> {{$f->sinopse_filme}} </h1> 
@endforeach

@endsection