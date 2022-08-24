
<?php


$servername = "localhost";
$database = "u553234134_Artisan";
$username = "u553234134_Gizaac";
$password = "Gizaac12343124";

// Criação de conexão
$connection = mysqli_connect($servername, $username, $password, $database);

// Checagem de conexão
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//Atualização dos dados do banco
$query = " UPDATE Cliente SET Nome_Cliente = '".$_GET["Nome_Cliente"]."', Endereco_Cliente = '".$_GET["Endereco_Cliente"]."', Telefone_Cliente = '".$_GET["Telefone_Cliente"]."', 
Cpf_Cliente = '".$_GET["Cpf_Cliente"]."', Data_Nascimento_Cliente = '".$_GET["Data_Nascimento_Cliente"]."', Email_Cliente = '".$_GET["Email_Cliente"]."',
 Senha_Cliente = '".$_GET["Senha_Cliente"]."' WHERE Id_Cliente = '".$_GET["Id_Cliente"]."' ";
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";


?>

<script>
    window.location='../listar_usuarios/listarUsuarios.php';
</script>
