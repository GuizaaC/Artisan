<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listar.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
    
	
<?php
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";
// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);
// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}


	$query = " select Id_Cliente, Nome_Cliente from Cliente ";

	echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {		?>					

							

	
												
	<div class="container">
		<BR/><a href='../atualizar_perfil/atualizarperfil.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'><button>Alterar Usuario</button></a> 
		<a href='../delete_cliente/delete.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'><button>deletar Usuario</button></a> 
		<?php echo $rowp["Id_Cliente"]; ?>-<?php echo $rowp["Nome_Cliente"]  ?><br> <br> 
	</div>
	

	<?php 
	};

//mysqli_select_db($connection,$database);
?>

    </form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>































