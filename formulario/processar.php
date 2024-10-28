<?php

	include('config.php');

	//Adiciona um utilizador

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$nome = $conexao->real_escape_string($_POST['nome']);
		$senha = $conexao->real_escape_string($_POST['senha']);

		$sql = "INSERT INTO utilizadores(nome,senha)VALUES('$nome','$senha')";

		if(!$conexao->query($sql)){
			echo"Erro ao adicionar o utilizador ".$conexao->error;
		}else{
			echo "Utilizador Adicionado com sucesso ";
			echo '<a href="index.php">voltar</a>';
		}
	}