<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
<form id="formSalvar" action='salvar.php' method="POST" onsubmit>
    <label for="produto1">Produto 1</label>
    <input type="checkbox" name="produtos[]" value="produto1">
    <label for="quantidade1">Quantidade:</label>
    <input type="number" name="quantidades[]" value="1">

  <button type="submit">Adicionar ao carrinho</button>
</form>


            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
    <input class="entrada" type="hidden" name="Id_Produto" id="Id_Produto" value="<?php echo $_POST["Id_Produto"]; ?>"><br>
        

<input class="enviar" type=button value="Enviar" onclick="fnValidar();">

<a href="resultadoConsulta.php">listar Produtos</a>
</form> 
</body>
</html>