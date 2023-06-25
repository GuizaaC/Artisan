<?php
session_start(); // Inicia a sessão (se já não estiver iniciada)

// Verifica se o usuário está logado
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== "sim") {
    // Usuário não está logado, redirecione para a página de login ou exiba uma mensagem de erro.
    header("Location: /login/login.php"); // Redireciona para a página de login
    exit; // Encerra a execução do script atual
}

// Resto do código para processar a finalização da compra

// Dados do banco de dados
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

// Obtenção das informações do produto
$id_produto = $_POST["id_produto"];
$nome_produto = $_POST["nome_produto"];
$preco_produto = $_POST["preco_produto"];

// Resto do código para processar a finalização da compra

// Comandos de transferência (PHP - SQL)
$query = "INSERT INTO carrinho (id_usuario, id_produto, nome_produto, preco_produto) VALUES ('".$_SESSION["id_usuario"]."', '".$id_produto."', '".$nome_produto."', '".$preco_produto."');";

// Confirmação do salvamento
mysqli_query($connection, $query) or die('Erro ao salvar..');

mysqli_close($connection);

// Armazena a mensagem de sucesso na sessão
$_SESSION['compra_finalizada'] = true;

// Redireciona o usuário de volta para a página inicial
header('Location: /home/home.php');
exit;
?>

<script>
    alert("Obrigado por comprar conosco!");
</script>
