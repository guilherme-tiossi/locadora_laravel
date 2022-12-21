<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2> Criar conta </h2>
    <form action="{{url('/cadastro/inserir')}}" method="post">
        @csrf
        <input type="text" placeholder="Nome" name="txNome"> <br>
        <label> Data de Nascimento </label>
        <input type="date" placeholder="Sobrenome" name="dtNasc"> <br>
        <input type="email" placeholder="Email" name="txEmail"> <br>
        <input type="password" placeholder="Criar uma senha" name="txSenha"> <br> 
        <input type="submit" value="Criar conta">
    </form>
</body>
</html>