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
        if (id.includes('_completo')){
            let id_novo = id.replace('_completo', '');
            let th_edit = id_novo + "_th_edit";
            let td_edit = id_novo + "_td_edit";
            document.getElementById(id_novo).className = 'filme';
            document.getElementById(id).className = 'to-hide';
            document.getElementById(th_edit).className = 'to-hide';
            document.getElementById(td_edit).className = 'to-hide';
        }
        else{
            let id_novo = id + '_completo';
            let th_edit = id + "_th_edit";
            let td_edit = id + "_td_edit";
            document.getElementById(id_novo).className = 'filme';
            document.getElementById(id).className = 'to-hide';
            document.getElementById(th_edit).className = 'filme';
            document.getElementById(td_edit).className = 'filme';
        }
}

function editarGeneros(clicked_id){
    let id_g = clicked_id;
        if (id_g.includes('_completo')){
            let id_g_novo = id_g.replace('_completo', '');
            let th_gen_del = id_g_novo + '_del';
            document.getElementById(id_g_novo).className = 'genero';
            document.getElementById(id_g).className = 'to-hide';
            document.getElementById(th_gen_del).className = 'to-hide';
        }
        else{
            let id_g_novo = id_g + '_completo';
            let th_gen_del = id_g + '_del';
            document.getElementById(id_g_novo).className = 'genero';
            document.getElementById(id_g).className = 'to-hide';
            document.getElementById(th_gen_del).className = 'genero';
        }
}

function mostrarMaisFuncionarios(clicked_id){
    let id = clicked_id;
            if (id.includes('_completo')){ //se a div de exibição de mais conteúdo estiver sendo exibida
            let id_novo_2 = id + '_2'; //varíavel representando o id da segunda div de exibição de mais conteúdo (X_completo_2)
            let id_novo = id.replace('_completo', ''); //variável usada para recuperar o valor puro do id
            let th_completo = id_novo + '_th_completo'; //variável usada para recuperar o id da table head completa
            document.getElementById(id_novo).className = 'funcionario';
            document.getElementById(id).className = 'to-hide';
            document.getElementById(th_completo).className = 'to-hide';
            document.getElementById(id_novo_2).className = 'to-hide';
        }
        else{ // caso o id for somente o número sem texto
            let id_novo = id + '_completo'; // variável usada para recuperar o id do TR que representa os campos do formulário do funcionário
            let id_novo_2 = id + '_completo_2'; //variável usada para recuperar o id do segundo TR dos campos de furmulário do funcionário
            let th_completo = id + '_th_completo'; //variávvel usada para recuperar o id da table head completa
            document.getElementById(id_novo).className = 'funcionario';
            document.getElementById(id).className = 'to-hide';
            document.getElementById(th_completo).className = 'funcionario';
            document.getElementById(id_novo_2).className = 'funcionario';
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