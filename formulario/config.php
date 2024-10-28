<?php 

	//Declaração de variáveis

	$servidor = "localhost";
	$utilizador = "root";
	$senha = "";
	$baseDedados = "demo_db";

	$conexao = new mysqli($servidor,$utilizador,$senha,$baseDedados);

	if($conexao->connect_error){
		die('Erro ao conectar-se ao banco de dados: '.$conexao->connect_error);
	}