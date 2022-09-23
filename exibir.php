<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="../css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLINHA AGENDA</title>
</head>
<body>

<?php

require_once ('conexao.php');
 $aux01 = "select * from agenda";

 $sql = mysqli_query($link,$aux01);

while($aux = mysqli_fetch_assoc($sql)){ // abertura while

echo "<hr>";
echo "Codigo :".$aux['codigo'];
$passarCodigo = $aux['codigo'];

echo "<hr>";
echo "Nome :".$aux['nome'];

echo "<hr>";
echo "Data de Nascimento :".$aux['data_nascimento'];

echo "<hr>";
echo "Telefone:".$aux['telefone'];

echo "<hr>";
echo "Email:".$aux['email'];
echo"
<form action='excluir.php' method='post'>
<input type='hidden' name='txtcodigo' value='$passarCodigo'>
<input type='submit' value='Excluir' class='button_excluir'>
</form>
";

echo "<br>";

} // fechamento while

?>

</body>
</html>