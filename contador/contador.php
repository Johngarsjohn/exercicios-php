<?php 
	
	echo "====== Contador com for ========<br><br>";
	for($i = 0; $i<=20; $i++){
		echo " ".$i;
	}
	echo "<br><br>============================<br>";

	echo "<br>====== Contador com while ======<br><br>";
	$i = 0;
	while ($i <=20) {
		echo " ".$i;
		$i++;
	}
	echo "<br><br>============================<br>";

	echo "<br> ===== contador com o do while =====<br><br>";
	$i = 0;
	do{
		echo " ".$i;
		$i++;
	}while ($i <= 20);
?>