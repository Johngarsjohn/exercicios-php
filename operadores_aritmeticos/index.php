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

				<select name="operacao">
					<option disabled>Escolha uma operação</option>
					<option id="soma">Adição</option>
					<option id="subtr">Subtração</option>
					<option id="mult">Multiplicação</option>
					<option id="divsao">Divisão</option>
				</select>
				<input type="submit" name="enviar" value="Calcular">
			</form>
			<span>Resultado: <?php echo $resultado; ?></span>
		</main>
		<br><br>
		<footer>&copy;2024 | Todos os Direitos Reservados</footer>
	</div>
</body>
</html>