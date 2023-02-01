<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('../css/style.css')}}">
    <script type="text/javascript" src="{{url('../js/script.js')}}"> </script>
    <title>Cadastro</title>
</head>
<body>
<div class="div-center">
    <div class="div-cadastro">
    <h2 class="titulo-cadastro"> Criar conta </h2>
    <form method="POST" class="form-cadastro" onsubmit="return verificaCadastro()" action="{{ route('register') }}">
        @csrf

        <div style="display: flex;">
            <!-- Nome -->
            <div>
                <input id="nome" type="text" name="name" placeholder="Nome" class="input-cadastro-esp" :value="old('name')" />
                <p id="aviso-nome-cadastro" class="aviso"> </p>
            </div>

            <!-- Email -->
            <div>
                <input id="email" type="text" name="email" placeholder="E-mail" class="input-cadastro-esp" :value="old('email')"/>
                <p id="aviso-email-cadastro" class="aviso"> </p>
            </div>
        </div>
        
        <!-- Password -->
        <div>
            <input placeholder="Crie uma senha" class="input-cadastro" id="senha1" type="password" name="password"/>
            <p id="aviso-senha1-cadastro" class="aviso"> </p>
        </div>

        <!-- Confirm Password -->
        <div>

            <input placeholder="Confirme a senha" class="input-cadastro" id="senha2" type="password" name="password_confirmation" />
            <p id="aviso-senha2-cadastro" class="aviso"> </p>
        </div>

        <div class="center">
            <x-primary-button class="btn-cadastro">
                {{ __('Cadastrar') }}
            </x-primary-button>
            <br>
            <a href="{{ route('login') }}" class="link-cadastro">
                {{ __('Já possui uma conta?') }}
            </a>
        </div>
    </form>
    </div>
</div>
</body>
</html>