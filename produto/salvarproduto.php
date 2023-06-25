<?php
session_start();

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

// Verifica se um arquivo de imagem foi enviado
if (isset($_FILES['img_produto']) && $_FILES['img_produto']['error'] === UPLOAD_ERR_OK) {
    $targetDir = 'assets'; 
    $targetFile = $targetDir . basename($_FILES['img_produto']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem válida
    $allowedExtensions = array('jpg', 'jpeg', 'png');
    if (in_array($imageFileType, $allowedExtensions)) {
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['img_produto']['tmp_name'], $targetFile)) {
            // Caminho da imagem para salvar no banco de dados
            $imgProduto = $targetFile;

            // Comandos de transferência (PHP - SQL)
            $query = "INSERT INTO produto (nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto)
                      VALUES (?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($connection, $query);
            if ($stmt) {
                // Sanitiza os dados antes de vinculá-los aos parâmetros do statement
                $nome_produto = sanitize($_POST["nome_produto"]);
                $preco_produto = sanitize($_POST["preco_produto"]);
                $descricao_produto = sanitize($_POST["descricao_produto"]);
                $quantidade_produto = sanitize($_POST["quantidade_produto"]);

                // Vincula os parâmetros aos placeholders na consulta
                mysqli_stmt_bind_param($stmt, "sssss", $nome_produto, $preco_produto, $descricao_produto, $quantidade_produto, $imgProduto);

                // Executa o statement
                if (mysqli_stmt_execute($stmt)) {
                    echo "Produto salvo com sucesso";
                    mysqli_stmt_close($stmt);
                } else {
                    die('Erro ao salvar produto.');
                }
            } else {
                die('Erro na preparação da consulta.');
            }

            echo '<script>window.location = "../home/produtos.php";</script>';

        } else {
            echo "Erro ao fazer upload do arquivo.";
        }
    } else {
        echo "Apenas arquivos JPG, JPEG e PNG são permitidos.";
    }
} else {
    echo "Nenhum arquivo de imagem foi enviado.";
}

mysqli_close($connection);
?>
