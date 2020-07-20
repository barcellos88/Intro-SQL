<!DOCTYPE html>
<html>
	<head>
		<title>Página de Resposta</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php

		require_once('conexao.php');

		$usuario = $_POST['usuario'];
		$email	 = $_POST['email'];
		$senha	 = $_POST['senha'];

		$bancoDados = new db();

		$link = $bancoDados->conecta_mysql();

		$sql = " insert into usuarios(usuario,email,senha) values ('$usuario','$email','$senha')";

		mysqli_query($link, $sql);
		?>

		<h1>Cadastro Realizado com Sucesso!</h1>	<br><hr>
		<h3>Site Seguro</h3>	<br><br><br>
		<a href="index.php">Voltar para Página Inicial</a>
	</body>
</html>