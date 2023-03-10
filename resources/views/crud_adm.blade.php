@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-center">

                    <!-- form genero -->
    <div class="div-login">
    <form method="POST" onsubmit="return verificaGenero()" action="{{ route('create_genero') }}">
        @csrf

        <h1> Cadastrar gênero: </h1>
        <div>
            <input id="genero" placeholder="Gênero" class="input-login" type="text" name="genero" :value="old('genero')" />
            <p class="aviso" id="avisoGenero"> </p>
        </div>

        <div>
            <div class="center">
            <input type="submit" value="Cadastrar" class="btn-login">
        </div>
        </div>
    </form>
    </div>
    
                    <!-- form filme -->
    <div class="div-crud-adm">
    <form method="POST" onsubmit="return verificaFilme()" action="{{ route('create_filme') }}">
        @csrf

        <h1> Cadastrar filme: </h1>
        <div>
            <x-text-input id="titulo_filme" placeholder="Título" class="input-login" type="text" name="titulo_filme" :value="old('titulo_filme')"/>
            <p class="aviso" id="avisoTitulo"> </p>
        </div>
        <div>
            <x-text-input id="sinopse_filme" placeholder="Sinopse" class="input-login" type="text" name="sinopse_filme" :value="old('sinopse_filme')"/>
            <p class="aviso" id="avisoSinopse"> </p>
        </div>
        <div>
            <x-text-input id="valor_filme" placeholder="Valor" class="input-login" type="text" name="valor_filme" :value="old('valor_filme')" />
            <p class="aviso" id="avisoValor"> </p>
        </div>
        <div>
            <x-text-input id="disponiveis_filme" placeholder="Disponíveis" class="input-login" type="text" name="disponiveis_filme" :value="old('disponiveis_filme')"/>
            <p class="aviso" id="avisoDisponiveis"> </p>
        </div>

        <div>
            <x-text-input id="link_filme" placeholder="Link" class="input-login" type="text" name="link_filme" :value="old('link_filme')"/>
            <p class="aviso" id="avisoLink"> </p>
        </div>

        <div>
        <select id="genero_filme" name="genero_filme" class="input-crud-gen">
            @foreach($generos as $g)
                <option value='{{$g->id_genero}}'>{{$g->nome_genero}}</option>
            @endforeach
            </select>
        </div>
        
        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        </div>
    </form>
    </div>
</div>


<div class="div-filmes_generos">
<div class="table_crud_fg">
<table border="solid" class="tabela" id="listaGeneros">    
    <tr class="" id="th_incompleto">
        <th  style="border: none; background-color:white;"> </th>
        <th> Id </th>
        <th> Gênero </th>
    </tr>    
    
    @foreach($generos as $g)
        <p class="to-hide">{{$id_genero = $g->id_genero . "_genero";}} </p>
        <p class="to-hide">{{$id_genero_completo = $g->id_genero . "_genero_completo";}} </p>
        <p class="to-hide"> {{$th_gen_del = $g->id_genero . "_genero_del";}} </p>

    <tr class="genero" id="{{$id_genero}}">
        <td style="border: none;"> <button id="button" value="{{$id_genero}}" onclick="editarGeneros(this.value)"> + </button> </td>
        <td style="border: none;"> {{$g->id_genero}} </td> 
        <td class="td_nome"> {{$g->nome_genero}} </td>
    </tr>
    <p class="aviso" id="tableAvisoGenero"> </p>

    <tr class="to-hide" id="{{$id_genero_completo}}">
        <form method="POST" onsubmit="return verificaFormGenero()" action="{{ route('update_genero') }}">
        @csrf
            <input type='hidden' value="{{$g->id_genero}}" name="id_genero">   
            <td style="border: none;"><button id="button" type="button" value="{{$id_genero_completo}}" onclick="editarGeneros(this.value)"> - </button> </td>
            <td style="border: none;"> {{$g->id_genero}} </td> 
            <td class="td_sem_borda"> <input type='text' id="tableGenero" class="td_nome" value="{{$g->nome_genero}}" name="nome_genero"> </td>   
            <th class="td_sem_borda"> <input type="submit" class="botao_confirmar" value="Confirmar" </th>
        </form>
    </tr>
    <tr class='to-hide' id='{{$th_gen_del}}'>
        <td style="border: none; background-color:white;"> </td>
        <td style="border: none; background-color:white;"> </td>
        <td style="border: none; background-color:white;"> </td>
        <th> <a href="{{ route('delete_genero') }}?id_genero={{$g->id_genero}}"> Deletar </a> </th>
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr>
    @endforeach
</table>
</div>

<div class="table_crud_fg">
    <p class="aviso" id="table_avisoTitulo"> </p>
    <p class="aviso" id="table_avisoSinopse"> </p>
    <p class="aviso" id="table_avisoValor"> </p>
    <p class="aviso" id="table_avisoDisponiveis"> </p>
    <p class="aviso" id="table_avisoLink"> </p>
<table border="solid" class="tabela" id="listaFilmes">    
    <tr class="" id="th_incompleto">
        <th  style="border: none; background-color:white;"> </th>
        <th> Id </th>
        <th> Filme </th>
        <th> Disponíveis </th>
        <th> Valor </th>
    </tr>    
    
    @foreach($filmes as $f) <!-- lendo todos os filmes do banco de dados (variável $filmes vindo do controller) !--> 
            <p class="to-hide">{{$id_filme_completo = $f->id_filme . "_completo";}} </p>
            <p class="to-hide">{{$td_fil_edit = $f->id_filme . "_td_edit";}} </p>
            <p class="to-hide">{{$th_fil_edit = $f->id_filme . "_th_edit";}} </p>
            <p class="to-hide">{{$td2_fil_edit = $f->id_filme . "_td2_edit";}} </p>

        <tr class="filme" id="{{$f->id_filme}}">
            <td style="border: none;"><button id="button" type="button" value="{{$f->id_filme}}" onclick="exibirFilmesCompletos(this.value)"> + </button> </td>
            <td style="border: none;"> {{$f->id_filme}} </td>
            <td class="td_nome"> {{$f->titulo_filme}} </td>
            <td class="td_salario"> {{$f->disponiveis_filme}} </td>
            <td class="td_salario"> {{$f->valor_filme}} </td>
        </tr>

    <tr class="to-hide" id="{{$id_filme_completo}}">
     <form method="POST" onsubmit="return verificaFormFilme()" action="{{ route('update_filme') }}">
     @csrf
                         <input type='hidden' value="{{$f->id_filme}}" name="id_filme">  
             <td style="border: none;"> <button id="button" type="button" value="{{$id_filme_completo}}" onclick="exibirFilmesCompletos(this.value)"> - </button> </td>
             <td style="border: none;"> {{$f->id_filme}} </td>
             <td class="td_sem_borda"> <input type='text' class="td_nome" id="table_titulo_filme" value="{{$f->titulo_filme}}" name="titulo_filme">  </td>
             <td class="td_sem_borda"> <input class="td_salario" type='text' id="table_disponiveis_filme" value="{{$f->disponiveis_filme}}" name="disponiveis_filme">  </td>
             <td class="td_sem_borda"> <input class="td_salario" type='text' id="table_valor_filme" value="{{$f->valor_filme}}" name="valor_filme">  </td>
     </tr>
     <tr class="to-hide" id="{{$th_fil_edit}}">
         <th  style="border: none; background-color:white;"> </th>
         <th  style="border: none; background-color:white;"> </th>
         <th> Gênero </th>
         <th> Sinopse </th>
         <th> Link </th>
     </tr>
     <tr class="to-hide" id="{{$td_fil_edit}}">
         <td style="border: none; background-color:white;"> </td>
         <td style="border: none; background-color:white;"> </td>
             <td class="td_sem_borda"> <select class="input-login" id="genero_filme" name="genero_filme">
         @foreach($generos as $g)
                 <option value='{{$g->id_genero}}' <?php if($f->genero_filme == $g->id_genero){ echo "selected";}?>> {{$g->nome_genero}}</option>
         @endforeach
             </select> </td>
             <td class="td_sem_borda"> <textarea class="td_outros" id="table_sinopse_filme" name="sinopse_filme"> {{$f->sinopse_filme}} </textarea>  </td>
             <td class="td_sem_borda"> <input class="td_outros" id="table_link_filme" name="link_filme" value="{{$f->link_filme}}"> </td>

     <tr class="to-hide" id="{{$td2_fil_edit}}">
        <td style="border: none; background-color:white;"> </td>
        <td style="border: none; background-color:white;"> </td>
        <td style="border: none; background-color:white;"> </td>
        <th> <a href="{{ route('delete_filme') }}?id_filme={{$f->id_filme}}"> Deletar </a> </th>
        <th class="td_sem_borda"> <input type="submit" class="botao_confirmar" value="Confirmar" </th>
    </tr>
    </form>
    <tr></tr><tr></tr><tr></tr><tr></tr>
    @endforeach
</table>
</div>
</div>
</body>
</html>
