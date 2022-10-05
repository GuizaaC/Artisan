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
const input = document.querySelector('CPF_Cliente')
input.addEventListener('keypress',() =>{
  let inputlenght = input.value.length

  if(inputlength === 3 || inputlenght === 7){
    input.value += '.'
  }else if(inputlenght === 11){
    input.value += '-'
  }
})