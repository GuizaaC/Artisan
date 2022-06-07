<?php
//DB Info
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";

// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);
<<<<<<< HEAD
	// Check connection
=======

// Check connection
>>>>>>> 81c8f4366515dece9c13a0904a678f3feb7dfbd2
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}

<<<<<<< HEAD
	//seleção de campos
=======
//Selecting DB fields for selection
>>>>>>> 81c8f4366515dece9c13a0904a678f3feb7dfbd2
	$query = " select Id_Cliente from Cliente ";
<<<<<<< HEAD

	//con
=======
//
>>>>>>> 81c8f4366515dece9c13a0904a678f3feb7dfbd2
	echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {							
<<<<<<< HEAD
											
	//buscando do campo do banco de dados DT_DE_ALTERACAO.
	echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID ".$rowp["Id_Cliente"]."</a> ";
=======

	echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID".$rowp["Id_Cliente"]."</a> ";
>>>>>>> 81c8f4366515dece9c13a0904a678f3feb7dfbd2
	};
?>

