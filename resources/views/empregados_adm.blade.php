@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-func-adm">
    <table border="solid 1px">


    <tr class="" id="th_incompleto">
    <th> </th>
    <th> Id </th>
    <th> Nome </th>
    <th> Cargo </th>
    <th> Salário </th>
    </tr>    

    <tr class="to-hide" id="th_completo">
    <th> </th>
    <th> Id </th>
    <th> Nome </th>
    <th> Cargo </th>
    <th> Salário </th>
    <th> RG </th>
    <th> CPF </th>
    <th>  </th>
    <th> </th>
    </tr>
    
    @foreach ($funcionarios as $f)
        <p class="to-hide">{{$id_completo = $f->id . "_completo";}} </p>
        <tr class="funcionario" id="{{$f->id}}">
        <td> <button type="button" value="{{$f->id}}" onclick="mostrarMaisFuncionarios(this.value)"> + </button> </td>
        <td> {{$f->id}} </td>
        <td> {{$f->nome}} {{$f->sobrenome}} </td>
        <td> {{$f->cargo}} </td>
        <td> {{$f->salario}} </td>
        </tr>

        <tr class="to-hide" id="{{$id_completo}}">
            <form method="POST" action="{{route('update_funcionario')}}">
            @csrf

            <td> <button type="button" value="{{$id_completo}}" onclick="mostrarMaisFuncionarios(this.value)"> -- </button> </td>
            <td> <input type="hidden" value="{{$f->id}}" name="id"> </td>
            <td> <input type="text" class="funcionario_nome" value="{{$f->nome}}" name="nome">  
                 <input type="text" class="funcionario_nome" value="{{$f->sobrenome}}" name="sobrenome"> </td>
            <td> <input type="text" class="funcionario_outros" value="{{$f->cargo}}" name="cargo"> </td>
            <td> <input type="text" class="funcionario_salario" value="{{$f->salario}}" name="salario"> </td>
            <td> <input id="rg" type="text" class="funcionario_outros" value="{{$f->rg}}" oninput="mascara_rg(this)" name="rg" placeholder="RG" :value="old('rg_funcionario')"> </td>
            <td> <input id="cpf" type="text" class="funcionario_outros" value="{{$f->cpf}}" oninput="mascara_cpf(this)" name="cpf" placeholder="CPF" :value="old('cpf_funcionario')"> </td>
            <td>  <a href="{{route('delete_funcionario')}}?id={{$f->id}}"> Deletar </a> 
              <input type="submit" value="Enviar"> </td>
            </form> 
        </tr>
        <br>
    @endforeach
</table>
    </div> </div>
    
    <div class="div-center">
                    <!-- form funcionarios -->
    <div class="div-crud-adm-func">
    <form method="POST" class="form-cadastro" action="{{ route('create_funcionario') }}">
        @csrf

        <div style="display: flex;">
        <!-- Nome -->
        <div>
            <x-text-input id="nome_funcionario" type="text" name="nome_funcionario" placeholder="Nome" class="input-cadastro-esp" :value="old('nome_funcionario')" />
        </div>

        <!-- Sobrenome -->
        <div>
            <x-text-input id="sobrenome_funcionario" type="text" name="sobrenome_funcionario" placeholder="Sobrenome" class="input-cadastro-esp" :value="old('sobrenome_funcionario')" />
        </div> </div>
        
        <!-- Cargo -->
        <div>
            <x-text-input placeholder="Cargo do funcionário" class="input-cadastro" id="cargo_funcionario" type="text" name="cargo_funcionario" :value="old('cargo_funcionario')"/>
        </div>

        <!-- Salário -->
        <div>
            <x-text-input placeholder="Salário" class="input-cadastro" id="salario_funcionario" type="text" pattern="^\d*(\.\d{0,3})?$" name="salario_funcionario" :value="old('salario_funcionario')"/>
        </div>

        <div style="display: flex;">
        <!-- RG -->
        <div>
            <x-text-input id="rg" type="text" oninput="mascara_rg(this)" name="rg_funcionario" placeholder="RG" class="input-cadastro-esp" :value="old('rg_funcionario')" />
        </div>

        <!-- CPF -->
        <div>
            <x-text-input id="cpf" type="text" oninput="mascara_cpf(this)" name="cpf_funcionario" placeholder="CPF" class="input-cadastro-esp" :value="old('cpf_funcionario')" />
        </div> </div>

        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Cadastrar Funcionário') }}
            </x-primary-button>
        </div>
        </div>
        
    </form>
    </div>
</body>
</html>
