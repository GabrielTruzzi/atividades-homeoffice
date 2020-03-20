<?php
//iniciar sessão
session_start();

// Redirecionar em caso de falha
if (!isset($_SESSION['loggedin'])) {
	header('Location: loginpagina.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Site de Teste - Logado</title>
		<link href="estilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Site de Teste</h1>
				<a href="perfil.php"><i class="fas fa-user-circle"></i>Perfíl</a>
				<a href="sair.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
			</div>
		</nav>
		<div class="content">
			<h2>Página Inicial</h2>
			<p>Boas vindas, <?=$_SESSION['nome']?>!</p>
			
			<?php //if ($account['activation_code'] == 'ativada') {
//echo "Parabéns, a sua conta está ativada";
//} else {
//echo "A sua conta ainda não foi ativada";}
			?>
			
		</div>
	</body>
</html>>