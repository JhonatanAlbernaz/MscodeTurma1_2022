<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>

	<?php
	include_once('conexao.php');

	$nome = $_POST['nome'];
	$data_nasc = $_POST['data_nasc'];

	$result_msg_contato = "INSERT INTO aniversario(nome, data_nasc) VALUES ('$nome', '$data_nasc')";
	$resultado_msg_contato = mysqli_query($conn, $result_msg_contato);

	?>

	<script type="text/javascript">

		window.alert("Dados foram salvos com sucesso!")
	</script>

	<form method="post" action="contato.php">
			Nome: <input type="text" name="nome">
			Data Nascimento: <input type="date" name="data_nasc">
			<input type="submit" value="Salvar">
		</form>

		<h2><a href="resultado.php">Aniversáriantes do mês</a></h2>
</body>
</html>