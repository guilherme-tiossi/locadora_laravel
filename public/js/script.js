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

function exibirFilmesCompletos(){
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
    return;
}

function mascara_cpf(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ 
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 }

 function mascara_rg(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ 
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "12");
    if (v.length == 2 || v.length == 6) i.value += ".";
    if (v.length == 10) i.value += "-";
 }