<?php
session_start();
require_once("config.php");
require_once("functions.php");
 
//Verifica se a sessão existe
if (!isset($_SESSION['loggedin'])) {
	header('Location: loginpagina.php');
	exit();
}

if (isset($_SESSION['user'])) {
	header('Location: chatonline.php');
	exit();
}

//Pega o nome e a sala que o usuário soliciou entrar
$nome = isset($_POST["txtNome"])?strip_tags($_POST["txtNome"]):"";
$sala = isset($_POST["slSala"])?(int)$_POST["slSala"]:1;
 
//Se o nome não estiver em branco, executa uma rotina de limpeza delete_olde_entries() e inicia o chat.
if(!empty($nome)){
    delete_old_entries();
    start_chat();
}
 
?>
<html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MiniRede - Entrar no Chat</title>
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
 <p>Para entrar no Chat, escolha um apelido e uma sala</p>
<form action="chat.php" method="post">
<table>
  <tr>
    <td width="70" class="tab">Nome</td>
    <td width="130">
        <input type="text" name="txtNome" id="txtNome" />
    </td>
   </tr>
  <tr>
    <td class="tab">Sala</td>
    <td>
    <select name="slSala">
    <?php
    //Lista todas as salas cadastradas no banco de dados
    $tbSala = $conn->prepare("select * from salas");
    $tbSala->execute();
    while($linha=$tbSala->fetch(PDO::FETCH_ASSOC)){
        echo "<option value='$linha[id_sala]'>$linha[nm_sala]</option>";
    }
    ?>
    </select>
    </td>
    </tr>
  <tr>
    <td> </td>
    <td><label>
      <input type="submit" name="btnEntrar" id="btnEntrar" value="Entrar" />
    </label></td>
    </tr>
</table>
</form>
</div>
</body>
</html>

