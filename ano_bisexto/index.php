<?php 

	if(isset($_POST['enviar'])){
		$resultado = "";
		if(isset($_POST['ano'])){
			$ano = $_POST['ano'];

			//verifica se é divisível por 400
			if($ano % 4 == 0){
				$resultado = "O ano é bisexto";
				// Se for divisível por 100, precisa ser divisível por 400 para ser bissexto
				if($ano % 100 == 0 && $ano % 400 != 0){
					$resultado = "O ano não é bisexto";
				}else{
					$resultado = "O ano é bisexto";

				}
			}else{
				$resultado = "O ano não é bissexto";
			}
			
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="João Garcia João">
	<meta name="keywords" content="ano bisexto">
	<meta name="description" content="programa que permite verificar se um ano é bisexto">
	<title>Ano Bisexto</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
		<header>
			<h1>Verificador de Ano Bisexto</h1>
		</header>
		<form method="post" action="">
			<div>
				<label for="ano">Ano:</label>
				<input type="text" name="ano" required>
			</div>
			<div>
				<input type="submit" name="enviar" value="Enviar">
			</div>
			<div>
				<span>Resultado:<?php echo $resultado;?></span>
			</div>
		</form>
	</div>

</body>
</html>