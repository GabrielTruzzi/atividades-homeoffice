<?php
//$resposta = '';
//if (isset($_POST['email'], $_POST['assunto'], $_POST['nome'], $_POST['mensagem'])) {
//	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//		$resposta = 'o Email não é valido!';
//	} else if (empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['nome']) || empty($_POST['mensagem'])) {
//		$resposta = 'Por favor preencha todos os campos!';
//	} else {
//		$para = 'gabriel.truzzi@gmail.com';
//		$de = $_POST['email'];
//		$assunto = $_POST['assunto'];
//		$mensagem = $_POST['mensagem'];
//		$headers = 'De: ' . $_POST['email'] . "\r\n" . 'Responder de: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
//		mail($para, $assunto, $mensagem, $headers);
//		$resposta = 'Mensagem Enviada!';		
//	}
//}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Entrar em Contato</title>
	</head>
	<body>
		<form class="contato" method="POST" action="phpmailer-fe.php" enctype="multipart/form-data">
			<input type="email" name="email" placeholder="Endereço de Email" required>
			<input type="text" name="frmName" placeholder="Seu Nome" required>
			<textarea name="frmMessage" placeholder="Qual assunto gostaria de tratar conosco?" required></textarea>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
