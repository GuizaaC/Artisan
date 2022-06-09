<<<<<<< HEAD
<?php
/*
$nome = htmlspecialchars($_GET['nome']);
=======
<?php
$servername = "localhost";
$database = "u553234134_Artisan";
$username = "u553234134_Gizaac";
$password = "Gizaac12343124";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
>>>>>>> edc593b6e929a128490a4a4d5ee8451823ed3f46


	$cpf = htmlspecialchars($_GET['cpf']);

	$Telefone = htmlspecialchars($_GET['Telefone']);

	$eMail = htmlspecialchars($_GET['eMail']);
*/



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

$query = " UPDATE Cliente SET Nome_Cliente = '".$_GET["Nome_Cliente"]."', Endereco_Cliente = '".$_GET["Endereco_Cliente"]."', Telefone_Cliente = '".$_GET["Telefone_Cliente"]."', 
Cpf_Cliente = '".$_GET["Cpf_Cliente"]."', Data_Nascimento_Cliente = '".$_GET["Data_Nascimento_Cliente"]."', Email_Cliente = '".$_GET["Email_Cliente"]."',
 Senha_Cliente = '".$_GET["Senha_Cliente"]."' WHERE Id_Cliente = '".$_GET["Id_Cliente"]."' ";

echo $query;
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";
//mysqli_close($connection);


  
//$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);





/*

    while($tarefa = mysqli_fetch_assoc($query)){

        echo $tarefas["nome"];

    }*/

// echo " Salvo Nome: ".$_POST["Nome_Cliente"]." cpf: ".$POST["Cpf_Cliente"] ;


?>

<script>
    window.location='../perfil_usuario/perfil.html';
</script>
=======
$sql = "UPDATE Cliente SET '".$_GET["Email_Cliente_Atualizado"]."', '".$_GET["Nome_Cliente_Atualizado"]."', 
'".$_GET["Endereco_Cliente_Atualizado"]."','".$_GET["Telefone_Cliente_Atualizado"]."', 
'".$_GET["CPF_Cliente_Atualizado"]."', '".$_GET["Data_Cliente_Atualizado"]."',
'".$_GET["Senha_cliente_Atualizado"]."'); WHERE Id_Cliente=""";

if ($conn->query($sql) === TRUE) {
  echo "Atualização dos dados feita com sucesso";
} else {
  echo "Erro ao atualizar: " . $conn->error;
}

$conn->close();
?>
<script>
    window.location='../perfil_usuario/perfil.html';
</script>
>>>>>>> edc593b6e929a128490a4a4d5ee8451823ed3f46