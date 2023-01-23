@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-func-adm">
    <table border="solid" class="tabela">
    <h1> Funcionários </h1>
    <tr class="" id="th_incompleto">
        <th  style="border: none; background-color:white;"> </th>
        <th> Id </th>
        <th> Nome </th>
        <th> Cargo </th>
        <th> Salário </th>
    </tr>    
    @foreach ($funcionarios as $f)
                    <p class="to-hide">{{$id_completo = $f->id . "_completo";}} </p>
                    <p class="to-hide">{{$id_completo_2 = $f->id . "_completo_2";}} </p>
                    <p class="to-hide">{{$th_completo = $f->id . "_th_completo";}} </p>

        <tr class="funcionario" id="{{$f->id}}">
            <td style="border: none;"> <button type="button" value="{{$f->id}}" onclick="mostrarMaisFuncionarios(this.value)"> + </button> </td>
            <td style="border: none;"> {{$f->id}} </td>
            <td class="td_nome"> {{$f->nome}} {{$f->sobrenome}} </td>
            <td class="td_outros"> {{$f->cargo}} </td>
            <td class="td_salario"> {{$f->salario}} </td>
        </tr>

        <tr class="to-hide" id="{{$id_completo}}">
                <form method="POST" action="{{route('update_funcionario')}}">
                @csrf
                <td style="border: none;"> <button type="button" value="{{$id_completo}}" onclick="mostrarMaisFuncionarios(this.value)"> - </button> </td>
                <input type="hidden" value="{{$f->id}}" name="id">
                <td style="border: none;"> {{$f->id}} </td>
                <td class="td_sem_borda"> <input type="text" class="td_nome" value="{{$f->nome}}" name="nome">  <input type="text" class="td_nome" value="{{$f->sobrenome}}" name="sobrenome"> </td>
                <td class="td_sem_borda"> <input type="text" class="td_outros" value="{{$f->cargo}}" name="cargo"> </td>
                <td class="td_sem_borda"> <input type="text" class="td_salario" value="{{$f->salario}}" name="salario"> </td>
            </tr>
            <tr class="to-hide" id="{{$th_completo}}">
                <th style="border: none; background-color:white;"> </th>
                <td style="border:none;"> </td>
                <th> RG </th>
                <th> CPF </th>
                <th> <a href="{{route('delete_funcionario')}}?id={{$f->id}}" class="deletar"> Deletar </a> </th>
            </tr>
            <tr class="to-hide" id="{{$id_completo_2}}"> 
                <td style="border:none;"> </td>
                <td style="border:none;"> </td>
                <td class="td_sem_borda"> <input size="10" id="rg" type="text" class="td_outros" value="{{$f->rg}}" oninput="mascara_rg(this)" name="rg" placeholder="RG" :value="old('rg_funcionario')"> </td>
                <td class="td_sem_borda"> <input id="cpf" type="text" class="td_outros" value="{{$f->cpf}}" oninput="mascara_cpf(this)" name="cpf" placeholder="CPF" :value="old('cpf_funcionario')"> </td>
                <th class="td_sem_borda"> <input type="submit" class="botao_confirmar" value="Confirmar" </th>
                </form> 
                <tr></tr><tr></tr><tr></tr><tr></tr>
        </tr>
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
