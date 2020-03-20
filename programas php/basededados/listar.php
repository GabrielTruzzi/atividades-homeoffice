<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Dados Cadastrados</title>
<meta charset="utf-8">
</head>
<meta charset="utf-8">
<body>

<?php

$conexao=mysqli_connect("localhost","root","")or die("nao foi possivel conectar");

mysqli_select_db($conexao,"banco_completo")or die("nao foi possivel selecionar o banco de dados");

$consulta="select * from clientes";

$resultado=mysqli_query($conexao,$consulta)or die("falha na execução da consulta");

while ($linha=mysqli_fetch_array($resultado)) {

$nome = $linha["nome"];

$observacoes = $linha["observacoes"];

echo "Nome: $nome<br>";

echo "Observacoes: $observacoes";

echo "<br>";

echo "<br>";

}

?> <br><a href=index.html> Voltar</a>

</body></html>