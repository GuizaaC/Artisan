<?php
// Dados do banco
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

// Função para validar e sanitizar os dados recebidos via POST
function sanitize($data) {
    // Implemente a sanitização apropriada para os dados
    // por exemplo, você pode usar mysqli_real_escape_string() ou outras funções de filtragem
    // certifique-se de aplicar a função sanitize() a todos os campos necessários antes de usá-los na consulta SQL
    return $data;
}

//Comandos de transferencia(PHP - SQL)
$query = "INSERT INTO produto (nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto) 
          VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connection, $query);
if ($stmt) {
    // Sanitiza os dados antes de vinculá-los aos parâmetros do statement
    $nome_produto = sanitize($_POST["nome_produto"]);
    $preco_produto = sanitize($_POST["preco_produto"]);
    $descricao_produto = sanitize($_POST["descricao_produto"]);
    $quantidade_produto = sanitize($_POST["quantidade_produto"]);
    $img_produto = sanitize($_POST["img_produto"]);

    // Vincula os parâmetros aos placeholders na consulta
    mysqli_stmt_bind_param($stmt, "ssssi", $nome_produto, $preco_produto, $descricao_produto, $quantidade_produto, $img_produto);

    // Executa o statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Salvo com sucesso";
        mysqli_stmt_close($stmt);
    } else {
        die('Erro ao salvar..');
    }
} else {
    die('Erro na preparação da consulta.');
}

mysqli_close($connection);

// Redireciona o usuário para "../home/produtos.php"
header("Location: ../home/produtos.php");
exit();
?>
