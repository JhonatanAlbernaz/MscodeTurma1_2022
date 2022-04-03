<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
</head>
<body>

<?php
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'escolansl');
mysqli_set_charset($conexao,'utf8');

$sql = mysqli_query($conexao,"SELECT * FROM aniversario WHERE Month(data_nasc) = Month(Now()) and day(data_nasc) = day(Now());") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
{
	echo "<h2><center>PARABÉNS AOS ANIVERSÁRIANTES DO DIA!</center></h2>";
echo $dados['nome']. '<br>';
}
?>



</body>
</html>