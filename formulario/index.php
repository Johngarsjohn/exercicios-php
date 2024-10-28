<?php 
session_start();
include('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	// Consulta o banco de dados para verificar se o usuário existe
	$sql = "SELECT * FROM utilizadores WHERE nome = ? AND senha = ?";
	$stmt = $conexao->prepare($sql);
	$stmt->bind_param("ss", $nome, $senha);
	$stmt->execute();
	$resultado = $stmt->get_result();

	// Verifica se há um resultado e configura a sessão
	if($resultado && $resultado->num_rows > 0){
		$utilizador = $resultado->fetch_assoc();
		$_SESSION['utilizador'] = $utilizador['nome'];
		$mensagem = "Bem-vindo, " . htmlspecialchars($nome) . "!";
	} else {
		$mensagem = "Nome de utilizador ou senha incorreta.";
	}
	$stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="sistema de login, exibe uma mensagem de boas vindas ">
	<meta name="keywords" content="utilizador,senha,boas-vindas">
	<meta name="author" content="João Garcia João">
	<title>sistema Login</title>
</head>
<body>

	<div id="container">
		<header>
			<h1>Sistema de Login</h1>
		</header>

		<main>
			<?php if(isset($mensagem)){echo "<p>$mensagem</p>";}?>

			<?php if(!isset($_SESSION['utilizador'])): ?>
				<!-- Formulário de login exibido se o utilizador não estiver logado -->
				<form method="post" action="">
					<div>
						<label for="nome">Nome de utilizador:</label>
						<input type="text" name="nome" id="nome" placeholder="Digite seu nome do utilizador" required>
					</div>
					<br><br>
					<div>
						<label for="senha">Senha:</label>
						<input type="password" name="senha" id="senha" required>
					</div>
					<br><br>
					<button type="submit">Entrar</button>
					<p>Não tem uma conta? <a href="cadastro.php">criar conta</a></p>
				</form>
			<?php else: ?>
				<!-- Mensagem de boas-vindas exibida se o utilizador estiver logado -->
				<p>Você está logado como <?php echo isset($_SESSION['utilizador']) ? htmlspecialchars($_SESSION['utilizador']) : ''; ?>.</p>
				<a href="logout.php">Sair</a>
			<?php endif; ?>
		</main>
	</div>
</body>
</html>