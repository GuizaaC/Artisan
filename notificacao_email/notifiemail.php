<?php
$to = $_POST['email_usuario'];
$subject = "Venda finalizada";
$message = "Olá"$_POST["nome_usuario"]", sua compra foi finalizada com sucesso, obrigado por utilizar o nosso site"<br>
           "Itens comprados:" $_POST["Nome_Produto"] $_POST["Quantidade_Produto"]<br>
           "Preço total:" $_POST["preco_total_venda"];
$headers = "De: artisan@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar o email.";
}
?>
