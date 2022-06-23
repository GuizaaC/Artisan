<?php session_start(); ?>
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
    Cliente Where Email_Cliente = '".$_GET["Email_Cliente"]."' and Senha_Cliente = '".$_GET["Senha_Cliente"]."'" ;
	    echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
    $_SESSION["logado"]=  "nao";
	while ($rowp = mysqli_fetch_array($resp)) {	
        $logado=  "sim";
        $_SESSION["Id_Cliente"]=  $rowp["Id_Cliente"];
        

?>
Logado com sucesso:<?php echo $rowp["Nome_Cliente"]; ?>
    <?php      
    };
    if ( $logado != "sim"){
   
        ?>
        <script>
            alert('Usuário ou senha inválidos.');
            // window.location='../login/login.html';
        </script>

   <?php  
    }else {
        $_SESSION["logado"]="sim";
    }
    ?>
</body>
</html>