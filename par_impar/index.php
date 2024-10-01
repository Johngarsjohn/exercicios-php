<?php

	if(isset($_POST['enviar'])){
		$resultado = "";
		if(isset($_POST['numero'])){
			$numero = $_POST['numero'];
			if(is_numeric($numero) && $numero % 2 == 0)
				$resultado = $numero." é um número par";
			else
				$resultado = "o número ".$numero." é ímpar";
		}
	} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="algoritmo que permite verificar se um número fornecido é par ou ímpar">
	<meta name="keywords" content="número par, número ímpar">
	<meta name="author" content="João Garcia João">
	<title>Número par ou ímpar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
		<header>
			<h1>Número Par ou Ímpar</h1>
		</header>
		<main class="corpo">
			<form method="post" action="">
				<div>
					<label for="numero">Número:</label>
					<input type="number" name="numero" id="numero" required>
				</div>
				<div>
					<input type="submit" name="enviar" value="Verificar">
				</div>
				<span>Resultado:<?php echo $resultado;?></span>
				
			</form>
		</main>
	</div>
</body>
</html>