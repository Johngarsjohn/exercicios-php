
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="João Garcia João">
	<meta name="description" content="algoritmo que mostrada a tabuada de um número inserido pelo utilizador">
	<meta name="keywords" content="multiplicação">
	<title>Tabuada</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="post" action="">
		
		<div>
			<label for="numero">Número:</label>
			<input type="number" name="numero" required>
		</div>
		<input type="submit" name="enviar" value="Ver tabuada">
	</form>
	<span>Tabuada: <?php
	
	if(isset($_POST['enviar'])){

		if(isset($_POST['numero'])){
			$numero = $_POST['numero'];
			for($i = 1; $i <= 12; $i++){
				echo"<br>";
				echo $numero. " x ".$i." = ".($numero * $i);
				echo "<br>";
			}
		}
		
	} 
?></span>
</body>
</html>