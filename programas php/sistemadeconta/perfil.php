<?php
//iniciar sessão
session_start();

// Redirecionar em caso de falha
if (!isset($_SESSION['loggedin'])) {
	header('Location: loginpagina.php');
	exit();
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Falha ao conectar com a base de dados MySQL: ' . mysqli_connect_error());
}
// Buscar informações não armazenadas na base de dados
$stmt = $con->prepare('SELECT senha, email FROM contas WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($senha, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Site de Teste - Perfil Pessoal</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilo.css">
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
			<h2>Perfíl</h2>
			<div>
				<p>Detalhes da conta:</p>
				<table>
					<tr>
						<td>Usuario:</td>
						<td><?=$_SESSION['nome']?></td>
					</tr>
					<tr>
						<td>Senha:</td>
						<td><?=$senha?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>