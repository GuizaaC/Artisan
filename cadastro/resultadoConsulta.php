mensagem.
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


$query = " select Id_Cliente from Cliente ";




echo $query;
$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

while ($rowp = mysqli_fetch_array($resp)) {							

							
	//{"Id_Cliente":"1"}
												//buscando do campo do banco de dados DT_DE_ALTERACAO.
	
												
	
													echo "<BR/><a href='cadastro.php?Id_Cliente=".$rowp["Id_Cliente"]."'>ALTERAR ID".$rowp["Id_Cliente"]."</a> ";
							};

//mysqli_select_db($connection,$database);



$connection = mysqli_connect($host,$user,$pass,$database) or die (mysql_errno().": ".mysql_error()."<BR>"); 

mysqli_select_db($connection,$database);
// where nome='".$nome."' and cpf='".$cpf."' and Telefone='".$Telefone."' and eMail='".$eMail."'"

echo $query;



echo "chegou aqui5";
?>

