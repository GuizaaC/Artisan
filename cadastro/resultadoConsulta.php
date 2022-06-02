<?php

	$nome = htmlspecialchars($_GET['nome']);

	$cpf = htmlspecialchars($_GET['cpf']);

	$Telefone = htmlspecialchars($_GET['Telefone']);

	$eMail = htmlspecialchars($_GET['eMail']);



$host = "localhost"; 

$user = "id17969856_cerimoni_bd"; 

$pass = "xxxxxxx"; 

$dbname = "id17969856_cerimoni_agilesystems";

$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);



$query = " select Id_Cliente from Cliente";

// where nome='".$nome."' and cpf='".$cpf."' and Telefone='".$Telefone."' and eMail='".$eMail."'"

echo $query;



$resp= mysqli_query ($connection,$query) or die ('Erro ao salvar');



			//	$resp = mysqlexecuta($connection,$sqlp);

						while ($rowp = mysqli_fetch_array($resp)) {							

							
//{"Id_Cliente":"1"}
											//buscando do campo do banco de dados DT_DE_ALTERACAO.

											

												echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID".$rowp["Id_Cliente"]."</a> ";

										

						

						}









?>

