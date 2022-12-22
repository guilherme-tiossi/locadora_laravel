<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('../css/style.css')}}">
    <title>Cadastro</title>
</head>
<body>
<div class="div-center">
    <div class="div-cadastro">
    <h2 class="titulo-cadastro"> Criar conta </h2>
    <form method="POST" class="form-cadastro" action="{{ route('register') }}">
        @csrf

        <div style="display: flex;">
        <!-- Name -->
        <div>
            <x-text-input id="name" type="text" name="name" placeholder="Nome" class="input-cadastro-esp" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-text-input id="email" type="email" name="email" placeholder="email" class="input-cadastro-esp" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        </div>
        
        <!-- Password -->
        <div>

            <x-text-input placeholder="Crie uma senha" class="input-cadastro" id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <!-- Confirm Password -->
        <div>

            <x-text-input placeholder="Confirme a senha" class="input-cadastro" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" />
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