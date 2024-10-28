<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="sistema de login, exibe uma mensagem de boas vindas">
	<meta name="keywords" content="utilizador,senha,boas-vindas, cadastro de utilizador">
	<meta name="author" content="João Garcia João">
	<title>Cadastro de Utilizador</title>
</head>
<body>

	<div id="container">
		<header>
			<h1>Cadastrar Utilizador</h1>
		</header>

		<main>
			<form method="post" action="processar.php">
				<div>
					<label for="utilizador">Utilizador:</label>
					<input type="text" name="nome" id="nome" placeholder="Digite seu nome do utilizador" required>
				</div>
				<br><br>
				<div>
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" required>
				</div>
				<br><br>
				<button type="submit">Cadastrar</button>
			</form>
		</main>
	</div>
</body>
</html>