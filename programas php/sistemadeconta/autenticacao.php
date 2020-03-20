<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	die ('Falha ao conectar com o servidor MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['usuario'], $_POST['senha']) ) {
	die ('Por favor, preencha todos os campos');
}

if ($stmt = $con->prepare('SELECT id, senha FROM contas WHERE usuario = ?')) {
	// Bind parameter s é uma string 
	$stmt->bind_param('s', $_POST['usuario']);
	$stmt->execute();
	// aramzernar valor para checar se a conta existe na base de dados
	$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $senha);
	$stmt->fetch();
	// Account exists, now we verify the password.
	if (password_verify($_POST['senha'], $senha)) {
		// Login realizado com sucesso, cria uma sessão para indicar que o login foi realizado
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['nome'] = $_POST['usuario'];
		$_SESSION['id'] = $id;
		header('Location: home.php');
	} else {
		echo 'Senha Incorreta!';
	}
} else {
	echo 'Usuario Incorreto!';
}

	$stmt->close();
}

?>