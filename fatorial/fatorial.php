<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Página que recebe um número e exibe o fatorial deste número">
	<meta name="keywords" content="fatorial,número">
	<meta name="author" content="João Garcia João">
	<title>Fatorial</title>
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
			<label>Número:</label>
			<input type="text" name="numero" placeholder="Digite um número" required>
		</div>
		<input type="submit" name="enviar" value="Enviar">
	</form>

	<?php function fatorial($numero){
			if($numero == 0)
				return 1;
			else
		return $numero * fatorial($numero - 1);
	}
	if(isset($_POST['enviar'])){

		$numero = $_POST['numero'];
		$fat = fatorial($numero);
		echo "<span>$numero ! = $fat</span>";

	}?>

</body>
</html>