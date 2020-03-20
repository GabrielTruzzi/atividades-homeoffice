<?php
// informação da base de dados local

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

// estabelecer conexão msqli
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Falha ao conectar com servidor MySQL: ' . mysqli_connect_error());
}
// Checar se existe o email e o código de ativação
if (isset($_GET['email'], $_GET['code'])) {
	if ($stmt = $con->prepare('SELECT * FROM contas WHERE email = ? AND activation_code = ?')) {
		$stmt->bind_param('ss', $_GET['email'], $_GET['code']);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows > 0) {
			if ($stmt = $con->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?')) {
				//conta ativada
				$newcode = 'ativada';
				$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
				$stmt->execute();
				echo 'A sua conta está ativada, agora é só fazer o login!<br><a href="loginpagina.html">Login</a>';
			}
		} else {
			echo 'A conta já foi ativada ou não existe!';
		}
	}
}
?>