<?php
	
	$resultado = "";
	if(isset($_POST['enviar'])){

		//Recuperação dos valores vindo do formulário
		
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operacao = $_POST['operacao'];

		//valida se os números são válidos
		if(!is_numeric($num1) || !is_numeric($num2)){
			$resultado = "Por favor, insira números válidos.";
		}else{
			//efectua as operações caso se cumpra
			switch ($operacao) {
				case 'Adição':
					$resultado = $num1 + $num2;
					break;
				case 'Subtração':
					$resultado = $num1 - $num2;
					break;
				case 'Multiplicação':
					$resultado = $num1 * $num2;
					break;
				case 'Divisão':
					if($num2 == 0){
						$resultado = "Erro: divisão por zero!";
					}else{
						$resultado = $num1 / $num2;
					}
					break;
				default:
					$resultado = "Por favor, selecione uma operação.";
					break;
			}

		}
		
	}
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

	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
			margin: 0;
			padding: 0;
		}
		#container {
			max-width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		header {
			text-align: center;
			margin-bottom: 20px;
		}
		form div {
			margin-bottom: 10px;
		}
		input[type="number"], select {
			width: 100%;
			padding: 8px;
			margin: 5px 0;
			box-sizing: border-box;
		}
		input[type="submit"] {
			width: 100%;
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
		span {
			display: block;
			margin-top: 20px;
			font-size: 1.2em;
			color: #333;
			text-align: center;
		}
		footer {
			text-align: center;
			margin-top: 20px;
			font-size: 0.9em;
			color: #777;
		}
	</style>

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
				<div>
					<label for="num2">Número 2:</label>
					<input type="number" name="num2" id="num2" required>
				</div>
				<div>
					<label for="operacao">Operação:</label>
					<select name="operacao" required>
					<option disabled selected value="">Escolha uma operação</option>
					<option value="Adição">Adição</option>
					<option value="Subtração">Subtração</option>
					<option value="Multiplicação">Multiplicação</option>
					<option value="Divisão">Divisão</option>
				</select>
				</div>

				<div>
					<input type="submit" name="enviar" value="Calcular">
				</div>
			</form>
			<span>Resultado: <?php echo $resultado; ?></span>
		</main>
		<footer>&copy;2024 | Todos os Direitos Reservados</footer>
	</div>
</body>
</html>