
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
$query = " UPDATE Cliente SET Nome_Cliente = '".$_GET["Nome_Cliente_Atualizado"]."', Endereco_Cliente = '".$_GET["Endereco_Cliente_Atualizado"]."', Telefone_Cliente = '".$_GET["Telefone_Cliente_Atualizado"]."', 
Cpf_Cliente = '".$_GET["CPF_Cliente_Atualizado"]."', Data_Nascimento_Cliente = '".$_GET["Data_Cliente_Atualizado"]."', Email_Cliente = '".$_GET["Email_Cliente_Atualizado"]."',
 Senha_Cliente = '".$_GET["Senha_Cliente_Atualizado"]."' WHERE Id_Cliente = '".$_GET["Id_Cliente"]."' ";

echo $query;
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";


?>

<script>
    //window.location='../perfil_usuario/perfil.php';
</script>
