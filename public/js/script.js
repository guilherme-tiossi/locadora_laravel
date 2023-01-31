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
 
 function tableVerificaFormEmpregados(){
    let validar = true
    const nome = document.getElementById('th_nome_funcionario').value;
    const sobrenome = document.getElementById('th_sobrenome_funcionario').value;
    const cargo = document.getElementById('th_cargo_funcionario').value;
    const salario = document.getElementById('th_salario_funcionario').value;
    const rg = document.getElementById('th_rg_funcionario').value;
    const cpf = document.getElementById('th_cpf_funcionario').value;
    console.log(nome + " + " + sobrenome + " + " + cargo + " + " + salario + " + " + " + " + rg + " + " + cpf);
    
    if (nome.length < 3){
        document.getElementById('tableAvisoNome').innerHTML = 'O nome deve ter três ou mais caracteres';
        validar = false;
    }

    if (sobrenome.length < 3){
        document.getElementById('tableAvisoSobrenome').innerHTML = 'O sobrenome deve ter três ou mais caracteres';
        validar = false;
    }

    if (cargo.length < 4){
        document.getElementById('tableAvisoCargo').innerHTML = 'O cargo deve ter quatro ou mais caracteres';
        validar = false;
    }
    
    if (/^\d+$/.test(salario) == false){
        document.getElementById('tableAvisoSalario').innerHTML = 'O salário deve ser representado em formato numérico';
        validar = false;
    }

    if (salario < 1302){
        document.getElementById('tableAvisoSalario').innerHTML = 'O salário deve ser maior ou igual a 1302';
        validar = false;
    }

    if (rg.length < 12){
        document.getElementById('tableAvisoRG').innerHTML = 'RG inválido.';
        validar = false;
    }

    if (cpf.length < 14){
        document.getElementById('tableAvisoCPF').innerHTML = 'CPF inválido.';
        validar = false;
    }
    
    return validar;
 }

 function verificaFormEmpregados(){
    let validar = true
    const nome = document.getElementById('nome_funcionario').value;
    const sobrenome = document.getElementById('sobrenome_funcionario').value;
    const cargo = document.getElementById('cargo_funcionario').value;
    const salario = document.getElementById('salario_funcionario').value;
    const rg = document.getElementById('rg_funcionario').value;
    const cpf = document.getElementById('cpf_funcionario').value;
    console.log(nome + " + " + sobrenome + " + " + cargo + " + " + salario + " + " + " + " + rg + " + " + cpf);
    
    if (nome.length < 3){
        document.getElementById('avisoNome').innerHTML = 'O nome deve ter três ou mais caracteres';
        validar = false;
    }

    if (sobrenome.length < 3){
        document.getElementById('avisoSobrenome').innerHTML = 'O sobrenome deve ter três ou mais caracteres';
        validar = false;
    }

    if (cargo.length < 4){
        document.getElementById('avisoCargo').innerHTML = 'O cargo deve ter quatro ou mais caracteres';
        validar = false;
    }
    
    if (/^\d+$/.test(salario) == false){
        document.getElementById('avisoSalario').innerHTML = 'O salário deve ser representado em formato numérico';
        validar = false;
    }

    if (salario < 1302){
        document.getElementById('avisoSalario').innerHTML = 'O salário deve ser maior ou igual a 1302';
        validar = false;
    }

    if (rg.length < 12){
        document.getElementById('avisoRG').innerHTML = 'RG inválido.';
        validar = false;
    }

    if (cpf.length < 14){
        document.getElementById('avisoCPF').innerHTML = 'CPF inválido.';
        validar = false;
    }
    
    return validar;
 }

 function verificaGenero(){
    verifica = true;
    const genero = document.getElementById('genero').value;
    
    if (genero.length < 3){
        verifica = false;
        document.getElementById('avisoGenero').innerHTML = "O gênero deve ter no mínimo três caracteres";
    }
    
    return verifica;
 }