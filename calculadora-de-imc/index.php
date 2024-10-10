<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="calculadora de imc(ídice de massa corporal">
	<meta name="keywords" content="imc, massa corporal,peso">
	<meta name="author" content="João Garcia João">
	<title>calculadora de imc</title>
</head>
<body>

	<header>
		<h1>Calculadora de IMC</h1>
	</header>
	<main>
		<form method="post" action="">
			<div>
				<label for="peso">Peso:</label>
				<input type="text" name="peso" id="peso" placeholder="Digite o peso" required>
			</div>
			<br><br>
			<div>
				<label for="altura">Altura:</label>
				<input type="text" name="altura" id="altura" placeholder="Digite a altura" required>
			</div>
			<br><br>
			<button type="submit">Enviar</button>
		</form>
		<br><br>
		<?php
			function calcularImc($peso,$altura){

				if(!is_numeric($peso) || !is_numeric($altura) || $peso <= 0 || $altura <= 0){
					return "Peso e altura devem ser números positivos.";
				}
				$categoria = '';

				$imc = $peso / ($altura * $altura);

				if($imc < 18.5){
					$categoria = "Abaixo do peso";
				}elseif($imc >= 18.5 && $imc <= 24.9){
					$categoria = "Peso normal";
				}elseif($imc >= 25 && $imc <= 29.9){
					$categoria = "sobrepeso";
				}elseif($imc >= 30 && $imc <=34.9){
					$categoria = "Obesidade grau 1";
				}elseif ($imc >= 35 && $imc <= 39.9) {
					$categoria = "Obesidade grau 2(severa)";
				}elseif($imc >= 40){
					$categoria = "Obesidade grau 3(mórbida)";
				}
				return $categoria;
			} 

			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$peso = $_POST['peso'];
				$altura = $_POST['altura'];
				echo "<span>Categoria: ".calcularImc($peso,$altura) ." </span>";
			}	
		?>
	</main>
</body>
</html>