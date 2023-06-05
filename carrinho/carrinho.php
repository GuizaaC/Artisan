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
<form id="formSalvar" action='finalizarcompra.php' method="POST" onsubmit>
    <label for="produto1">Produto 1</label>
    <input type="checkbox" name="produtos[]" value="produto1">
    <label for="quantidade1">Quantidade:</label>
    <input type="number" name="quantidades[]" value="1">

    <input class="Finzalizar" type=button id="btnFC" value="Finalizar Compra" onclick="fnFinalizar();">
</form>


        

<a href="resultadoConsulta.php">listar Produtos</a>
</form> 
</body>
</html>