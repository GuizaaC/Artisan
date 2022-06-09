<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atualizar.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    <?php
//DB Info
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
	//seleção de campos
	$query = " select Id_Cliente, Nome_Cliente, Endereco_Cliente, Telefone_Cliente, CPF_Cliente, Data_Nascimento_Cliente, Email_Cliente, Senha_Cliente from 
    Cliente Where Id_Cliente = ".$_GET["Id_Cliente"];
	    echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {	

?>


<br> <br><br>
    <div class="container">
<form id="formSalvar" action='update.php' method="GET" onsubmit>
        <!-- Campo nome -->
    <label class="titulo">Nome</label> <br>  
        <input class="entrada" name='Nome_Cliente' id="Nome_Cliente_Atualizado" placeholder="Nome" value="<?php echo $rowp["Nome_Cliente"]; ?>" required> <br>
        <!-- Campo Endereço -->
    <label class="titulo">Endereço</label> <br>
        <input class="entrada" name='Endereco_Cliente' id="Endereco_Cliente_Atualizado" placeholder="Endereço" value="<?php echo $rowp["Endereco_Cliente"]; ?>" required>  <br>
    <!-- Campo Telefone -->
    <label class="titulo">Telefone</label> <br>
        <input class="entrada" type="tel" max="11"name='Telefone_Cliente_Atualizado' id="Telefone_Cliente" placeholder="(00)90000-0000" value="<?php echo $rowp["Telefone_Cliente"]; ?>" required> <br>
    <!-- Campo CPF -->
    <label class="titulo">CPF</label> <br>
        <input class="entrada" min="11" max="11"name='Cpf_Cliente' id="CPF_Cliente_Atualizado" placeholder="000.000.000-00" value="<?php echo $rowp["CPF_Cliente"]; ?>" required > <br>
    <!-- Campo Data de nascimento -->
    <label class="titulo">Data de Nascimento</label> <br>
        <input class="entrada" min="1900-01-01" max="2050-12-31" type="date" name='Data_Nascimento_Cliente' id="Data_Cliente_Atualizado" placeholder="DD/MM/AAAA" value="<?php echo $rowp["Data_Nascimento_Cliente"]; ?>" required> <br>
    <!-- Campo Email -->
    <label class="titulo">Email</label> <br>
        <input class="entrada" type="email" max="70" name='Email_Cliente' id="Email_Cliente_Atualizado" placeholder="Email" value="<?php echo $rowp["Email_Cliente"]; ?>"  required > <br>
    <!-- Campo senha -->
    <label class="titulo">Senha</label>
        <input class="entrada" type="password" min="5" max="10" name="Senha_Cliente" id="Senha_cliente_Atualizado" placeholder="Senha" value="<?php echo $rowp["Senha_Cliente"]; ?>" required><br>
    <input class="entrada" type="hidden" name="Id_Cliente" id="Id_Cliente" value="<?php echo $_POST["Id_Cliente"]; ?>"><br>
    <?php      
    };
    ?>
    <input class="enviar" type=button value="Atualizar" onclick="fnValidar();">

</form> 
 <script src="/atualizar_perfil/atualizar.js"></script>
</body>
</html>