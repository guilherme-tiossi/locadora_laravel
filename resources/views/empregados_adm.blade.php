@include('includes.head')
@include('includes.header_adm')
<body>
    <div class="div-center">
    <div class="div-func-adm">
    @foreach ($funcionarios as $f)
        <p> {{$f->nome}} {{$f->sobrenome}} </p>
        <p> {{$f->cargo}} </p>
        <p> {{$f->salario}} </p>
    @endforeach
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
</div>
</body>
</html>
