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
    let listaCompletaFilmes = document.getElementById(id + 'Completo').className; //to-hide
    let listaFilmes = document.getElementById(id).className; //filme
    switch (listaFilmes){
        case (listaFilmes = 'filme'):
            document.getElementById(id + 'Completo').className = 'filme';
            document.getElementById(id).className = 'to-hide';
        break;
    
    case (listaFilmes = 'to-hide'):
        document.getElementById(id + 'Completo').className = 'to-hide';
        document.getElementById(id).className = 'filme';
        break;
    }
}
