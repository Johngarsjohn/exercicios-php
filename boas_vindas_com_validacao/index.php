<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Página que recebe os dados de um utilizador como parâmetro e exibe uma mensagem de boas-vindas">
	<meta name="keywords" content="Saudações,boas vindas,nome,email,idade">
	<meta name="author" content="João Garcia João">
	<title>Saudações de Boas-Vindas</title>
	<style type="text/css">
		label {
			display: block;
			padding: 10px;
			margin-bottom: 8px;
		}
		input {
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
		<div>
			<label>Email:</label>
			<input type="email" name="email" placeholder="Digite seu email" required>
		</div>
		<div>
			<label>Idade:</label>
			<input type="number" name="idade" placeholder="Digite sua idade" min="1" required>
		</div>
		<input type="submit" name="enviar" value="Enviar">
	</form>

	<?php
	function saudacao($nome, $email, $idade) {
		return "Olá $nome! Seja bem-vindo. Seu email é $email e você tem $idade anos.";
	}

	if (isset($_POST['enviar'])) {
		$nome = htmlspecialchars($_POST['nome']);
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);

		if ($email && $idade > 0) {
			echo "<span>" . saudacao($nome, $email, $idade) . "</span>";
		} else {
			echo "<span>Por favor, insira dados válidos.</span>";
		}
	}
	?>

</body>
</html>
