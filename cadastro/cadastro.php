<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="(min-width: 601px)" href="cadastro.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="cadastromedia.css" />
    <title>Cadastro</title>
</head>

<body>

    <header class="topo">
        <a href="..https://artisan.gzaac.com.br">
            <img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
    <form id="formSalvar" action='salvar.php' method="POST" enctype = "multipart/form-data" onsubmit>
            <!-- Campo nome -->
            <label class="titulo">Nome</label> <br>  
                <input class="entrada" name='Nome_Cliente' id="Nome_Cliente" placeholder="Nome" required> <br>
            <!-- Campo Endereço -->
            <label class="titulo">Endereço</label> <br>
                <input class="entrada" name='Endereco_Cliente' id="Endereco_Cliente" placeholder="Endereço" required>  <br>
            <!-- Campo Telefone -->
            <label class="titulo">Telefone</label> <br>
                <input class="entrada" type="tel" max="11"name='Telefone_Cliente' id="Telefone_Cliente" placeholder="(00)90000-0000" required> <br>
            <!-- Campo CPF -->
            <label class="titulo">CPF</label> <br>
                <input class="entrada" min="11" max="11"name='Cpf_Cliente' id="CPF_Cliente" placeholder="000.000.000-00" required > <br>
            <!-- Campo Data de nascimento -->
            <label class="titulo">Data de Nascimento</label> <br>
                <input class="entrada" min="1900-01-01" max="2050-12-31" type="date" name='Data_Nascimento_Cliente' id="Data_Cliente" placeholder="DD/MM/AAAA" required> <br>
            <!-- Campo Email -->
            <label class="titulo">Email</label> <br>
                <input class="entrada" type="email" max="70" name='Email_Cliente' id="email_Cliente" placeholder="Email" required> <br>
            <!-- Campo senha -->
            <label class="titulo">Senha</label>
                <input class="entrada" type="password" min="5" max="10" name="Senha_Cliente" id="senha_cliente" placeholder="Senha" required><br>
            <input class = "imagem" type = "file" name = " Img_Cliente">

            <!-- Validação -->
            <input class="enviar" type=button value="Enviar" onclick="fnValidar();">
        </form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>