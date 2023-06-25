<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="(min-width: 601px)" href="indexDesktop.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="indexMobile.css" />
    <title>Inicio</title>

</head>

<body>
     <div id="primeira_tela">
        <header class="topo">

            <p>Serviço</p>
            <a href="/home/produtos.php">Produtos</a>
            <img src="./assets/Logo.png" alt="Logo" class="logo">
            <p>Equipe</p>
            <p>Contato</p>

            <a href="/login/login.html" id="entrar">
                <button onClick = "window.location ='./login/login.html';" class="login">Login</button>
            </a>
        </header>

        <h1>
            Confira os nossos produtos!
        </h1>
    </div>

    <div id="primeiro_bg">
        
    </div>

    <div class="tarja">
        <h1 class="name"><?php echo $rowp["nome_produto"]  ?></h1>
        <h3 class="id"><?php echo $rowp["id_produto"]; ?></h3>
        <h3 class="preco"><?php echo $rowp["preco_produto"]; ?></h3>
        <h3 class="descricao"><?php echo $rowp["descricao_produto"]; ?></h3>
        <h3 class="quantidade"><?php echo $rowp["quantidade_produto"]; ?></h3>
        <a href="/carrinho/carrinho.php">Adicionar ao carrinho</a>
    </div>

    <div class="gap">
    
    </div>

    <div class="tarja">
        
    </div>

    <footer>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>


