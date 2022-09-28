<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
	<link rel="stylesheet"  media="(min-width: 601px)" href="listar.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="listarmedia.css" />
    <title>Cadastro</title>
</head>

<body>
<!-- cabeçalho -->
    <header class="topo">

        <a href="../index.html">
			<img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>

    </header>
    
<br> <br><br>
    <div class="container">
    
<!-- informações do banco de dados -->
<?php
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

// criando a conexão
	$connection = mysqli_connect($servername, $username, $password, $database);

// checando a conexão
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}

//selecionando os campos do banco
	$query = ' select Id_Cliente, Nome_Cliente from Cliente ';
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {		?>					
	
<!-- lista desordenada dos usuarios -->
	<UL>
		<li class="lista ">
		<?php echo $rowp["Id_Cliente"]; ?>-<?php echo $rowp["Nome_Cliente"]  ?>
		<a href='../atualizar_perfil/atualizarperfil.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'><label>Editar<label/></a> 
		<a href='../delete_cliente/delete.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'><label>Deletar<label/></a> </li><br> <br> 
	
		<main>
        <div class="list">
            <div class="line">
                <div class="user">
                    <div class="profile">
                        <img src="/assets/img.jpg" alt="" >
                    </div>
                    <div class="details">
                        <h1 class="name"><?php echo $rowp["Nome_Cliente"]  ?></h1>
                        <h3 class="username"><?php echo $rowp["Id_Cliente"]; ?></h3>
                    </div>
                </div>
                <div class="status">
                    <span></span>
                    <p>Ativo</p>
                </div>
                <div class="location">
                    <p>Brasília</p>
                </div>
                <div class="phone">
                    <p><?php echo $rowp["Telefone_Cliente"]; ?></p>
                </div>
                <div class="contact">
                    <a href="mailto:<?php echo $rowp["Email_Cliente"]  ?>" class="btn">Contact</a>
                </div>
                <div class="action">
					
					<div>
                        <summary class="icon">
                            <span></span>
                            <span></span>
                            <span></span>
						</summary>
					</div>
				
            </div>
        </div>
    </main>
	</UL>
	

	<?php 
	};
?>

    </form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>































