<!DOCTYPE html>
<html lang="pt">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produtos.css">
    <title>Listagem de Produtos</title>
</head>

<body>
<!-- cabeçalho -->
<header class="topo">
    <a href="../home/home.php">
        <img src="../assets/Logo.png" alt="Logo" class="logo">
    </a>
</header>

<br> <br><br>
<div class="container">

    <!-- informações do banco de dados -->
    <?php
    $servername = "localhost";
    $database = "u553234134_Artisan";
    $username = "u553234134_Gizaac";
    $password = "Gizaac12343124";

    // criando a conexão
    $connection = mysqli_connect($servername, $username, $password, $database);

    // checando a conexão
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // selecionando os campos do banco
    $query = 'SELECT nome_produto, preco_produto, descricao_produto, quantidade_produto, img_produto FROM produto';
    $resp = mysqli_query($connection, $query) or die('Erro ao consultar..');

    while ($rowp = mysqli_fetch_array($resp)) {
    ?>

    <!-- lista desordenada dos produtos -->
    <ul>
    <li class="lista ">
        <main>
            <div class="list">
                <div class="line">
                    <div class="user">
                        <div class="profile">
                        <?php if (!empty($rowp['img_produto'])) { ?>
                            <img src="<?php echo $rowp['img_usuario']; ?>" alt="Imagem do produto">
                            <?php } else { ?>
                                <img src="/assets/produto.png" alt="Imagem Padrão">
                                <?php } ?>
                            </div>
                            <div class="details">
                            <h1 class="name"><?php echo $rowp["nome_produto"]  ?></h1>
                            <h3 class="id"><?php echo $rowp["id_produto"]; ?></h3>
                        </div>
                    </div>
        <div class="preco_produto">
            <p class="preco_produto">$<?php echo $rowp["preco_produto"]; ?></p>
        </div>
        <div class="quantidade_produto">
            <p class="quantidade_produto">Quantidade: <?php echo $rowp["quantidade_produto"]; ?></p>
        </div>
        <div class="descricao_produto">
            <p class="descricao_produto"><?php echo $rowp["descricao_produto"]; ?></p>
        </div>
        <div class="adicionar_carrinho">
            <button onclick="adicionarAoCarrinho(<?php echo $rowp['id_produto']; ?>, <?php echo $rowp['preco_produto']; ?>)">Adicionar ao Carrinho</button>
        </div>
    </div>
</div>
</main>
</ul>

    <?php
    };
    ?>

</div>
<script>
    // Função para adicionar ao carrinho
    function adicionarAoCarrinho(id, preco) {
      // Verificar se o carrinho já existe no armazenamento local (localStorage)
      let carrinho = localStorage.getItem('carrinho');
      if (!carrinho) {
        // Se o carrinho não existir, criar um array vazio
        carrinho = [];
      } else {
        // Se o carrinho existir, converter o JSON em um array
        carrinho = JSON.parse(carrinho);
      }

      // Criar um objeto com as informações do produto
      const produto = {
        id: id,
        preco: preco
      };

      // Adicionar o produto ao carrinho
      carrinho.push(produto);

      // Armazenar o carrinho atualizado no localStorage
      localStorage.setItem('carrinho', JSON.stringify(carrinho));

      // Exibir uma mensagem ou redirecionar para a página do carrinho, se necessário
      alert('Produto adicionado ao carrinho!');
    }
  </script>
</body>
</html>




