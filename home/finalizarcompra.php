<?php
session_start(); // Inicia a sessão (se já não estiver iniciada)

// Verifica se o usuário está logado
if ($_SESSION["logado"] !== "sim") {
    // Usuário não está logado, redirecione para a página de login ou exiba uma mensagem de erro.
    header("Location: /cadastro/cadastro.php"); // Redireciona para a página de login
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

// Comandos de transferência (PHP - SQL)
$query = "INSERT INTO carrinho (data_venda, finalizada_venda) VALUES (NOW(), 1);";

// Tentativa de salvar os dados no banco
if (mysqli_query($connection, $query)) {
    // Os dados foram salvos com sucesso
    echo "Dados salvos com sucesso!";
} else {
    // Houve um erro ao salvar os dados
    echo "Erro ao salvar os dados: " . mysqli_error($connection);
}

mysqli_close($connection);

// Armazena a mensagem de sucesso na sessão
$_SESSION['compra_finalizada'] = true;

// Redireciona o usuário de volta para a página inicial
echo "Usuário logado e compra finalizada.";
header('Location: /home/home.php');
exit;
?>





