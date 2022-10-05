//      ##########campos obrigatórios##########
function fnValidar(){
    if (document.getElementById("Nome_Cliente").value==0){
        alert("Campo nome é obrigatório");
        document.getElementById("Nome_Cliente").focus();
     return false
    }

    if (document.getElementById("Endereco_Cliente").value==0){
        alert("Campo endereço é obrigatório");
        document.getElementById("Endereco_Cliente").focus();
     return false
    }
    if (document.getElementById("Telefone_Cliente").value==0){
        alert("Campo telefone é obrigatório");
        document.getElementById("Telefone_Cliente").focus();
     return false
    }

    if (document.getElementById("CPF_Cliente").value==0){
        alert("Campo CPF é obrigatório");
        document.getElementById("CPF_Cliente").focus();
     return false
    }

    if (document.getElementById("Data_Cliente").value==0){
        alert("Campo data de nascimento é obrigatório");
        document.getElementById("Data_Cliente").focus();
     return false
    }
    if (document.getElementById("email_Cliente").value==0){
        alert("Campo email é obrigatório");
        document.getElementById("email_Cliente").focus();
     return false
    }
    if (document.getElementById("senha_cliente").value==0){
        alert("Campo senha é obrigatório");
        document.getElementById("senha_cliente").focus();
     return false
    }
    
    document.getElementById("formSalvar").submit();
 }
 /*function mascara_cpf(){
    var cpf = document.getElementById('CPF_Cliente')
    if(cpf.value.lenght == 3 || cpf.value.lenght == 7){
        cpf.value = cpf.value += "."
    }else if(cpf.value.lenght == 11){
        cpf.value = cpf.value += "-"
    }
 }*/
