
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLINHA AGENDA</title>
</head>
<body>




<?php

    require_once ('PHP/conexao.php');
    $nome           = $_POST['txtNome'];
    $dataNascimento = $_POST['txtDataNascimento'];
    $telefone       = $_POST['txtTelefone']; 
    $email          = $_POST['txtEmail'];    

    echo"
    <hr> <h3> Exibindo Dados </h3><hr>
    ";

    echo"NOME.:".$nome."<hr>";
    echo"Data de nascimento.:".$dataNascimento."<hr>";
    echo"Telefone.:".$telefone."<hr>";
    echo"Email.:".$email."<hr>";

    echo"
    <a href='index.html'>Voltar</a>
    ";
    echo "<br><br> teste.: ".$teste."<br>";

    $sql = "insert into agenda(nome,data_nascimento,telefone,email)values('$nome','$dataNascimento','$telefone','$email')";

    mysqli_query($link,$sql);
?>


</body>
</html>