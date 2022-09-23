


<?php
require_once ('conexao.php');

$codigo = $_POST['txtcodigo'];
echo "Selecionando o código do aluno.: ".$codigo."<br>";
$sql = "delete from agenda where codigo = $codigo";
echo "<br>".$sql."<br>";
mysqli_query($link,$sql);
echo " <a href='exibir.php'> Voltar </a> ";
?>