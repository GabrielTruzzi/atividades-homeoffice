<?php
session_start();
require_once("config.php");
require_once("functions.php");
 
//Verifica se a sessão existe
if (!isset($_SESSION['loggedin'])) {
	header('Location: loginpagina.php');
	exit();
}

if(!isset($_SESSION["user"])){
    header("Location: chat.php");
    exit();
}
 
//Pega o nome do destinatário da mensagem
$to = isset($_POST["slUsers"])?$_POST["slUsers"]:"";
 
//Verifica se o usuário enviou alguma mensagem, caso positivo, ele chama a função interagir passando os dados do respectivo usuário como parâmetro.
 
if(isset($_POST["btnEnviar"]) && isset($_POST["txtMensagem"])){
    interagir($_SESSION["user_name"], $to, $_SESSION["sala"], strip_tags($_POST["txtMensagem"]) );
}

?>
<html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MiniRede - Chat</title>
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
<h2>Chat Online</h2>
 <p text-align:"center" >Escreva Algo! - <a href="sairchat.php">Sair do Chat Atual</a></p>
<form action="chatonline.php" method="post">
<table width="709" height="500" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="516"><iframe src="interacao.php" width="600px" height="400px" frameborder="0" scrolling="yes"></iframe> </td>
    <td width="4"> </td>
    <td width="189"><?php require_once("users-online.php");?> </td>
  </tr>
  <tr>
    <td colspan="3"><?php require_once("writing.php");?> </td>
    </tr>
</table>
</form>
</div>
</body>
</html>

