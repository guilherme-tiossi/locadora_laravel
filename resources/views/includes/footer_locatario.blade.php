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
                filme = '<div class="div-center"> <div class="div-filmes"> <h1> ' + value.titulo_filme + '</h1> <p class="genero">' + value.nome_genero + '</h1> <p class="sinopse">' + value.sinopse_filme + '</h1><br> <a class="link" href="alugar?filme=' + value.id_filme + '&data=' + date + '&valor= ' + value.valor_filme + '"> Alugar </a></div> </div>'
                $('#dynamic_row').append(filme);
              });
            }
        });
    })
</script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>