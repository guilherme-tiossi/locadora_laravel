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

function exibirFilmesCompletos(clicked_id){
    let id = clicked_id;
    let filmes = document.getElementById(id).className; //filme
    console.log(id);
        if (id.includes('_completo')){
            let id_novo = id.replace('_completo', '');
            document.getElementById(id_novo).className = 'filme';
            document.getElementById(id).className = 'to-hide';
        }
        else{
            let id_novo = id + '_completo';
            document.getElementById(id_novo).className = 'filme';
            document.getElementById(id).className = 'to-hide';
        }
}

function editarGeneros(clicked_id){
    let id_g = clicked_id;
    console.log(id_g)
        if (id_g.includes('_completo')){
            let id_g_novo = id_g.replace('_completo', '');
            document.getElementById(id_g_novo).className = 'genero';
            document.getElementById(id_g).className = 'to-hide';
        }
        else{
            let id_g_novo = id_g + '_completo';
            document.getElementById(id_g_novo).className = 'genero';
            document.getElementById(id_g).className = 'to-hide';
        }
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