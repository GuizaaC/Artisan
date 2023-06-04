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
    $query = " INSERT INTO usuario
        (email_usuario , nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, senha_usuario)
    VALUES('".$_POST["email_usuario"]."', '".$_POST["nome_usuario"]."', '".$_POST["endereco_usuario"]."','".$_POST["telefone_usuario"]."', 
        '".$_POST["cpf_usuario"]."', '".$_POST["data_nascimento_usuario"]."',('".$_POST["senha_usuario"]."'));";
        
        if(isset($_POST['enviar'])){
            $senhaOriginal = $_POST['senha_usuario']
            $senhaCriptografada = md5($senhaOriginal)
        }
        $msg = false;
        if(isset($_FILES['img_usuario'])){
            $extensao = strtolower(substr($_FILES['img_usuario']['name'], -4));
            $novo_nome = md5(time()) .$extensao;
            $diretorio = "imagens/"
        
            move_uploaded_file($_FILES['img_usuario']['tmp_name'], $diretorio.$novo_nome);
        
            $sql_code = "INSERT INTO usuario (img_usuario) VALUES ('$novo_nome')";
        
            if($mysqli->query($sql_code)){
                $msg = " Arquivo enviado com sucesso!";
            }else{
                $msg = "Falha ao enviar arquivo.";
            }
        }
//Confirmação do salvamento
    echo $query;
    mysqli_query($connection,$query) or die ('Erro ao salvar..');
    echo "Salvo com sucesso";

        $query = " select id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario from 
        usuario Where email_usuario = '".$_POST["email_usuario"]."' and senha_usuario = '".$_POST["senha_usuario"]."'" ;
        $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
        $_SESSION["logado"]=  "nao";
        while ($rowp = mysqli_fetch_array($resp)) {	        
            $_SESSION["id_usuario"]=  $rowp["id_usuario"];   
        };

        ?>


    <script>
        window.location='../listar_usuarios/listarUsuarios.php';
    </script>