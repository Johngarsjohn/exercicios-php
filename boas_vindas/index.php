<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Página que recebe o nome de um utilizador como parâmetro e exibe uma mensagem de Saudações de boas vindas">
	<meta name="keywords" content="Saudações,boas vindas,nome">
	<meta name="author" content="João Garcia João">
	<title>Saudações de boas vindas</title>
	<style type="text/css">
		label{
			display: block;
			padding: 10px;
			margin-bottom: 8px;
		}

		input{
			margin-bottom: 8px;
			border: 1px solid #ccc;
			border-radius: 8px;
		}
	</style>
</head>
<body>

	<form method="post" action="">
		<div>
			<label>Nome:</label>
			<input type="text" name="nome" placeholder="Digite seu nome" required>
		</div>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php if(isset($_POST['enviar'])){

		$nome = $_POST['nome'];
		echo "<span>Olá $nome Seja Bem-Vindo</span>";

	}?>

</body>
</html>