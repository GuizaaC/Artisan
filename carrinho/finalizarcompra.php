<?php
session_start(); // Inicia a sessão (se já não estiver iniciada)

// Verifica se o usuário está logado
if ($_SESSION["logado"] !== "sim") {
    // Usuário não está logado, redirecione para a página de login ou exiba uma mensagem de erro.
    header("Location: ../cadastro/cadastro.php"); // Redireciona para a página de login
    exit; // Encerra a execução do script atual
}else{
    header("Location: ../home/home.php"); // Redireciona para a página de login
    exit; // Encerra a execução do script atual
}

        ?>


    <script>
        alert("Obrigado por comprar conosco!")
    </script>