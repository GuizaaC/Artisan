<?php
//dados do banco
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
// Deletar do banco
$query = " DELETE FROM Cliente WHERE  Id_Cliente = '".$_GET["Id_Cliente"]."' ";

echo $query;
mysqli_query($connection,$query) or die ('Erro ao Deletar..');
echo "Deletado com sucesso";
?>

<script>
    window.location='../index.html';
</script>