@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-center">
    <div class="div-func-adm">
    <div class="div-center"> <h1> Funcionários </h1> </div>
    <table border="solid" class="tabela">
    <br>
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
                <form method="POST" onsubmit="return tableVerificaFormEmpregados()" action="{{route('update_funcionario')}}">
                @csrf
                <p class="aviso" id="tableAvisoNome"> </p> 
                <p class="aviso" id="tableAvisoSobrenome"> </p>
                <p class="aviso" id="tableAvisoCargo"> </p>
                <p class="aviso" id="tableAvisoSalario"> </p>
                <p class="aviso" id="tableAvisoRG"> </p>
                <p class="aviso" id="tableAvisoCPF"> </p>

                <td style="border: none;"> <button type="button" value="{{$id_completo}}" onclick="mostrarMaisFuncionarios(this.value)"> - </button> </td>
                <input type="hidden" value="{{$f->id}}" name="id">
                <td style="border: none;"> {{$f->id}} </td>
                <td class="td_sem_borda"> <input type="text" id="th_nome_funcionario" class="td_nome" value="{{$f->nome}}" name="nome"> 
                <input type="text" id="th_sobrenome_funcionario" class="td_nome" value="{{$f->sobrenome}}" name="sobrenome"> </td> 
                <td class="td_sem_borda"> <input type="text" id="th_cargo_funcionario" class="td_outros" value="{{$f->cargo}}" name="cargo"> </td>
                <td class="td_sem_borda"> <input type="text" id="th_salario_funcionario" class="td_salario" value="{{round($f->salario)}}" name="salario"> </td>
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
                <td class="td_sem_borda"> <input id="th_rg_funcionario" type="text" class="td_outros" value="{{$f->rg}}" oninput="mascara_rg(this)" name="rg" placeholder="RG" :value="old('rg_funcionario')"> </td>
                <td class="td_sem_borda"> <input id="th_cpf_funcionario" type="text" class="td_outros" value="{{$f->cpf}}" oninput="mascara_cpf(this)" name="cpf" placeholder="CPF" :value="old('cpf_funcionario')"> </td>
                <th class="td_sem_borda"> <input type="submit" class="botao_confirmar" value="Confirmar" </th>
                </form> 
                <tr></tr><tr></tr><tr></tr><tr></tr>
        </tr>
</div>
    @endforeach
</table>
    </div> </div>
    
    <div class="div-center">
                    <!-- form funcionarios -->
    <div class="div-crud-adm-func">
    <form method="POST" class="form-cadastro" onsubmit="return verificaFormEmpregados()" action="{{ route('create_funcionario') }}">
        @csrf

        <div style="display: flex;">
        <!-- Nome -->
        <div>
            <input id="nome_funcionario" type="text" name="nome_funcionario" placeholder="Nome" class="input-cadastro-esp" :value="old('nome_funcionario')" />
            <p class="aviso" id="avisoNome"> </p>
        </div>
        <!-- Sobrenome -->
        <div>
            <input id="sobrenome_funcionario" type="text" name="sobrenome_funcionario" placeholder="Sobrenome" class="input-cadastro-esp" :value="old('sobrenome_funcionario')" />
            <p class="aviso" id="avisoSobrenome"> </p>
        </div> </div>
        <!-- Cargo -->
        <div>
            <input id="cargo_funcionario" placeholder="Cargo do funcionário" class="input-cadastro" type="text" name="cargo_funcionario" :value="old('cargo_funcionario')"/>
        </div>
        <p class="aviso" id="avisoCargo"> </p>
        <!-- Salário -->
        <div>
            <input id="salario_funcionario" placeholder="Salário" class="input-cadastro" type="text" name="salario_funcionario" :value="old('salario_funcionario')"/>
        </div>
        <p class="aviso" id="avisoSalario"> </p>
        <div style="display: flex;">
        <!-- RG -->
        <div>
            <input id="rg_funcionario" type="text" oninput="mascara_rg(this)" name="rg_funcionario" placeholder="RG" class="input-cadastro-esp" :value="old('rg_funcionario')" />
        <p class="aviso" id="avisoRG"> </p>
        </div>

        <!-- CPF -->
        <div>
            <input id="cpf_funcionario" type="text" oninput="mascara_cpf(this)" name="cpf_funcionario" placeholder="CPF" class="input-cadastro-esp" :value="old('cpf_funcionario')" />
        <p class="aviso" id="avisoCPF"> </p>
        </div> </div>

        <div>
            <div class="div-center">
            <input type="submit" class="btn-login" value="Cadastrar Funcionário">
        </div>
        </div>
        
    </form>
    </div>
</body>
</html>
