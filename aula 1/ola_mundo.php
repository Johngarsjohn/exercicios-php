<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="João Garcia João">
	<meta name="description" content="página que exibe olá e o nome do candidato">
	<meta name="keywords" content="php, html, css, nome, olá, bem-vindo">
	<title>Ola mundo</title>
	<link rel="stylesheet" href="exe01.css">
</head>
<body>
	<h1>Seja Bem-Vindo</h1>
	<form method="post" action="">
		<label>Nome:</label>
		<input type="text" name="nome" id="nome" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<br><br>

	<?php if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		echo "<span> Olá $nome Seja Bem-vindo </span>";
	}?>
</body>
</html>