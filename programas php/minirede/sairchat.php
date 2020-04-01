<?php
//Destoi a sessão e redireciona o usuário para a página de início do chat.
session_start();
unset($_SESSION["user"]);
header("Location: chatonline.php");
?>