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
            <x-text-input id="email" placeholder="Email" class="input-login" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div>
            <x-text-input class="input-login" placeholder="Senha" id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox-login">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>
            <div class="center">
            <x-primary-button class="btn-login">
                {{ __('Log in') }}
            </x-primary-button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-cadastro">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif
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
