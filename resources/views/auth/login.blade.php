<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('../css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="div-center">
        <div class="div-titulo-login">
            <h1 class="titulo-login">Barkaflix</h1>
            <p class="subtitulo-login">Alugue os principais títulos do cinema em um único lugar.</p>
        </div>
    
    <div class="div-login">
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <input id="email" placeholder="Email" class="input-login" type="email" name="email" :value="old('email')"/>
        </div>

        <!-- Password -->
        <div>
            <input class="input-login" placeholder="Senha" id="password"
                            type="password"
                            name="password"
                            autocomplete="current-password" />
        </div>

        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Log in') }}
            </x-primary-button>
            <br>
            <div style="margin-top: 1rem;">
            <a href="{{ route('register') }}" class="btn-login2">
                {{ __('Criar conta') }}
            </a>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>
