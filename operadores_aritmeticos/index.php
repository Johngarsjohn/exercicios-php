<?php

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="João Garcia João">
	<meta name="description" content="Programa que permite efectuar algumas Operações aritiméticas">
	<meta name="keywords" content="adição, subtração,multiplicação,divisão">
	<title>Operações aritméticas</title>

</head>
<body>

	<div id="container">
		<header>
			<h1>Operadores Aritiméticos</h1>
		</header>

		<main>
			<form action="" method="post">
				<div>
					<label for="num1">Número 1:</label>
					<input type="number" name="num1" id="num1" required>
				</div>
				<br><br>
				<div>
					<label for="num2">Número 2:</label>
					<input type="number" name="num2" id="num2" required>
				</div>
				<br><br>

				<select id="operacao">
					<option disabled>Escolha uma operação</option>
					<option id="soma">Adição</option>
					<option id="subtr">Subtração</option>
					<option id="mult">Multiplicação</option>
					<option id="divsao">Divisão</option>
				</select>
				<input type="submit" name="enviar" value="Calcular">
			</form>
		</main>
		<br><br>
		<footer>&copy;2024 | Todos os Direitos Reservados</footer>
	</div>
</body>
</html>