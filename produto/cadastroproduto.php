<?php
if(isset($-POST['bt_enviar'])){
    $tipos_permitidos = ['jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'];
    $extensao = pathinfo($_FILES['img_produto']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $tipos_permitidos)){
        $pasta = "imagens/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novo_nome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novo_nome)){
            echo "<p>Upload realizado!</p>";
        }else{
            echo"<p>falha no Uploado!</p>";
        }
    }else{
        echo "<p>Tipo do arquivo não é permitido!</p>"
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="(min-width: 601px)" href="cadastro.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="cadastromedia.css" />
    <title>Cadastro</title>
</head>

<body>

    <header class="topo">
        <a href="..http://artisan.gzaac.com.br">
            <img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
    <form id="formSalvar" action='salvarproduto.php' method="POST" enctype = "multipart/form-data" onsubmit>
            <!-- Campo nome -->
            <label class="titulo">Nome do produto</label> <br>  
                <input class="entrada" name='nome_Produto' id="nome_Produto" placeholder="Nome do produto" required> <br>
            <!-- Campo Preço -->
            <label class="titulo">Preço</label> <br>
                <input class="entrada" name='preco_Produto' id="preco_Produto" placeholder="Preço" required>  <br>
            <!-- Campo Descrição -->
            <label class="titulo">Descrição</label> <br>
                <input class="entrada"  name='descricao_Produto' id="descricao_Produto" placeholder="Coloque a descrição do produto"  required> <br>
            <label class="titulo">Foto do produto</label>
                        <input class = "imagem" type = "file" name = " img_Produto"><br>

            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
        </form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>