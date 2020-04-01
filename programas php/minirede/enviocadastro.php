<?php

// informação da base de dados local

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'minirede';


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {

	die ('Falha ao conectar com servidor MySQL: ' . mysqli_connect_error());
}


//checar informações preenchidas
if (!isset($_POST['usuario'], $_POST['senha'], $_POST['email'])) {
	die ('Por favor, complete o formulario de cadastro');
}

if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
	die ('Por favor, preencha todos os campos');
}

//validar email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	die ('Email inválido!');
}

//caracteres inválidos
if (preg_match('/[A-Za-z0-9]+/', $_POST['usuario']) == 0) {
    die ('Caracteres inválidos no Usuário');
}

if (strlen($_POST['senha']) > 20 || strlen($_POST['senha']) < 5) {
	die ('A senha deve conter entre 5 e 20 caracteres!');
}


if ($stmt = $con->prepare('SELECT id, senha FROM contas WHERE usuario = ?')) {
	$stmt->bind_param('s', $_POST['usuario']);
	$stmt->execute();
	$stmt->store_result();
		//usuário já existente
	if ($stmt->num_rows > 0) {	
		echo 'Já existe um usuário com este nome, por favor, escolha outro!';
	} else {	
	if ($stmt = $con->prepare('INSERT INTO contas (usuario, senha, email) VALUES (?, ?, ?)')) {
	// ocultar senha da base de dados
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['usuario'], $senha, $_POST['email']);
	$stmt->execute();
	echo 'Sua conta foi cadastrada com sucesso!<br><br>';
	echo '<a href="loginpagina.php">Clique aqui para voltar a página inicial</a>';	

} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Não foi possível fazer a declaração!';
}
}}
?>