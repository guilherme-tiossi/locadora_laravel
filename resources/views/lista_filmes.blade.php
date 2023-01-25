@include('includes.head')
@include('includes.header_locatario')
<p id="date" class="to-hide"> {{$data}} </p>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" id="dynamic_row">
                @foreach($filmes as $f)
                    <h1> {{$f->titulo_filme}} </h1>
                    <p> {{$f->sinopse_filme}} </h1>
                    <p> {{$f->nome_genero}} </h1>
                    <br> <a href='alugar?filme={{$f->id_filme}}&data={{$data = date("y/m/d", strtotime("+7 days"))}}&valor={{$f->valor_filme}}'> Alugar </a>
                    <br> <br>
                @endforeach
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    let date = $('#date').text();
    console.log(date);
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
                filme = '<h1> ' + value.titulo_filme + '</h1> <p>' + value.sinopse_filme + '</h1> <p>' + value.nome_genero + '</h1><br> <a href="alugar?filme=' + value.id_filme + '&data=' + date + '&valor= ' + value.valor_filme + '"> Alugar </a><br> <br>'
                $('#dynamic_row').append(filme);
              });
            }
        });
    })
</script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
