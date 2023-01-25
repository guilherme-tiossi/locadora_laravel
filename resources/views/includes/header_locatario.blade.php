<section name="menu_inicial">
<header id="menu">
    <nav class="menu-topo">
        <div style="display: flex;">
            <h2 class="titulo-menu"> Barkaflix</h2>
            <form class="form-pesquisa">
                <input type="text" name="search" id="search" class="input-pesquisa">
                <button type="submit" name="pesquisar" class="btn-pesquisa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        <div class="div-center">
        <ul class="ul-menu">
            <li class="lista-menu"> <a class="link-menu" href="/dashboard"> Filmes para alugar </a> </li>
            <li class="lista-menu"> <a class="link-menu" href="/meus_filmes"> Meus filmes alugados </a> </li>
            <li class="lista-menu">
                <form method="POST" class="btn-sair" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link class="link-menu" :href="'/logout'"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
        </div>
        </div>
    </nav>
</header>

</section>
<script type="text/javascript">
$('#search').on ('keyup',function(){
    $value = $(this).val();
    $.ajax({
        method: 'POST',
        url : '{{ route("search") }}',
        dataType: 'json',
        data:{
            '_token': '{{ csrf_token() }}',
            value: $value
        },
        success:function(data){
          var filme = '';
          $('#dynamic_row').html('');
          console.log(data);
          $.each (data, function(index, value){
            filme = '<h1> ' + value.titulo_filme + '</h1> <p>' + value.sinopse_filme + '</h1> <p>' + value.nome_genero + '</h1><br> <a href="alugar?filme=' + value.id_filme + '&data=' + value.data + '&valor= ' + value.valor_filme + '"> Alugar </a><br> <br>'
            $('#dynamic_row').append(filme);
          });
        }
    });
})
</script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>