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
//Comandos de transferencia(PHP - SQL)
    $query = " INSERT INTO produto
        (nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto)
    VALUES('".$_POST["nome_produto"]."', '".$_POST["preco_produto"]."','".$_POST["descricao_produto"]."', 
        '".$_POST["quantidade_produto"]."', '".$_POST["img_produto"]."');";

//Confirmação do salvamento
    echo $query;
    mysqli_query($connection,$query) or die ('Erro ao salvar..');
    echo "Salvo com sucesso";

        ?>


    <script>
        window.location='../home/produtos.php';
    </script>