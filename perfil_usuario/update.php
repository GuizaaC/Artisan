<?php
/*
$nome = htmlspecialchars($_GET['nome']);

	$cpf = htmlspecialchars($_GET['cpf']);

	$Telefone = htmlspecialchars($_GET['Telefone']);

	$eMail = htmlspecialchars($_GET['eMail']);
*/



$servername = "localhost";
$database = "u553234134_Artisan";
$username = "u553234134_Gizaac";
$password = "Gizaac12343124";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = " UPDATE Cliente SET Nome_Cliente = '".$_POST["Nome_Cliente"]."', Endereco_Cliente = '".$_POST["Endereco_Cliente"]."', Telefone_Cliente = '".$_POST["Telefone_Cliente"]."', 
Cpf_Cliente = '".$_POST["Cpf_Cliente"]."', Data_Nascimento_Cliente = '".$_POST["Data_Nascimento_Cliente"]."', Email_Cliente = '".$_POST["Email_Cliente"]."',
 Senha_Cliente = '".$_POST["Senha_Cliente"]."'
( Email_Cliente, Nome_Cliente, Endereco_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente, Senha_Cliente)
        VALUES('".$_POST["Email_Cliente"]."', '".$_POST["Nome_Cliente"]."', '".$_POST["Endereco_Cliente"]."','".$_POST["Telefone_Cliente"]."', 
            '".$_POST["Cpf_Cliente"]."', '".$_POST["Data_Nascimento_Cliente"]."','".$_POST["Senha_Cliente"]."');";


echo $query;
mysqli_query($connection,$query) or die ('Erro ao salvar..');
echo "Salvo com sucesso";
//mysqli_close($connection);


  
//$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>"); 

//mysqli_select_db($connection,$dbname);





/*

    while($tarefa = mysqli_fetch_assoc($query)){

        echo $tarefas["nome"];

    }*/

// echo " Salvo Nome: ".$_POST["Nome_Cliente"]." cpf: ".$POST["Cpf_Cliente"] ;


?>

<script>
    window.location='../perfil_usuario/perfil.html';
</script>