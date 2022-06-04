<?php
//DB Info
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

//Selecting DB fields for selection
	$query = " select Id_Cliente from Cliente ";
//
	echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {							

	echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID".$rowp["Id_Cliente"]."</a> ";
	};
?>

