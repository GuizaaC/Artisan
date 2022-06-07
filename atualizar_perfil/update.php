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