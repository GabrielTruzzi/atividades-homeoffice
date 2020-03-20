<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Inserir dados no banco</title>
<meta charset="utf-8">
</head>

<body>

<?php

$conexao=mysqli_connect("localhost","root","")or die("nao foi possivel conectar");

mysqli_select_db($conexao,"banco_completo")or die("nao foi possivel selecionar o banco de dados");

$consulta="select * from clientes";

$resultado=mysqli_query($conexao,$consulta)or die("falha na execuçao da consulta");

$linha=mysqli_fetch_assoc($resultado);

$nome=$linha["nome"];

$senha=$linha["observacoes"];

$insere="insert into clientes(nome,observacoes)values('$_POST[nome]','$_POST[observacoes]')";

$resultado=mysqli_query($conexao,$insere)or die("falha na conexao");

echo "dados adicionados com sucesso";

?>

<br><a href=index.html> Voltar</a>

</html>