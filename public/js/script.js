function verificaLogin(){
    const email = document.getElementById('email').value;
    validar = true;
    
    if (email.indexOf('@') == -1){
        document.getElementById('aviso-email').className = "aviso";
        validar = false;
        console.log('sexo');
    }
    return validar;
}

function editarFilme(){
    let listaCompletaFilmes = document.getElementById('listaCompletaFilmes').className;
    let listaFilmes = document.getElementById('listaFilmes').className;
    switch (listaFilmes){
        case (listaFilmes = 'listaFilmesAdm'):
            document.getElementById('listaCompletaFilmes').className = 'listaFilmesAdm';
            document.getElementById('listaFilmes').className = 'to-hide';
        break;
    
    case (listaFilmes = 'to-hide'):
        document.getElementById('listaCompletaFilmes').className = 'to-hide';
        document.getElementById('listaFilmes').className = 'listaFilmesAdm';
        break;
    }
}
