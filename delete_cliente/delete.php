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

$query = " DELETE FROM Cliente WHERE Nome_Cliente = '".$_POST["Nome_Cliente"]."', Endereco_Cliente = '".$_POST["Endereco_Cliente"]."', Telefone_Cliente = '".$_POST["Telefone_Cliente"]."', 
Cpf_Cliente = '".$_POST["Cpf_Cliente"]."', Data_Nascimento_Cliente = '".$_POST["Data_Nascimento_Cliente"]."', Email_Cliente = '".$_POST["Email_Cliente"]."',
 Senha_Cliente = '".$_POST["Senha_Cliente"]."' WHERE Id_Cliente = '".$_POST["Id_Cliente"]."' ";

echo $query;
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";
?>

<script>
    window.location='../perfil_usuario/perfil.html';
</script>