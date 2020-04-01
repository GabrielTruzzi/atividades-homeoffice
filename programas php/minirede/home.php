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
		<title>MiniRede - Logado</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>MiniRede</h1>
				<a href="home.php"><i class="fas fa-home"></i>Home</a>	
				<a href="chatonline.php"><i class="fas fa-comments"></i>Chat</a>						
				<a href="perfil.php"><i class="fas fa-user-circle"></i>Perfíl</a>
				<a href="sair.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
			</div>
		</nav>
		<div class="content">
			<h2>Página Inicial</h2>
			<p>Boas vindas, <?=$_SESSION['nome']?>!</p>
			
		</div>
	</body>
</html>>