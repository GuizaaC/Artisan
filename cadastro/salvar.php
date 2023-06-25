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

// Aplicar criptografia MD5 à senha
$senhaCriptografada = md5($_POST["senha_usuario"]);

//Comandos de transferencia(PHP - SQL)
$query = "INSERT INTO usuario (email_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, senha_usuario)
          VALUES ('".$_POST["email_usuario"]."', '".$_POST["nome_usuario"]."', '".$_POST["endereco_usuario"]."', '".$_POST["telefone_usuario"]."', 
          '".$_POST["cpf_usuario"]."', '".$_POST["data_nascimento_usuario"]."', '".$senhaCriptografada."');";

//Confirmação do salvamento
echo $query;
mysqli_query($connection, $query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";

$query = "SELECT id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario 
          FROM usuario 
          WHERE email_usuario = '".$_POST["email_usuario"]."' AND senha_usuario = '".$senhaCriptografada."';";

$resp = mysqli_query($connection, $query) or die ('Erro ao consultar..');
$_SESSION["logado"] = "nao";
while ($rowp = mysqli_fetch_array($resp)) {
    $_SESSION["id_usuario"] = $rowp["id_usuario"];
};
?>

<script>
    window.location = '../home/home.php';
</script>x


