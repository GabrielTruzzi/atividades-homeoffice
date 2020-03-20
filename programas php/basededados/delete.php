<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Deletar Dados</title>
<meta charset="utf-8">
</head>

<body>

<?php

$conexao=mysqli_connect("localhost","root","")or die("nao foi possivel conectar");

mysqli_select_db($conexao,"banco_completo")or die("nao foi possivel selecionar o banco de dados");

$consulta="select * from clientes";

$resultado=mysqli_query($conexao,$consulta)or die("falha na execução da consulta");

$sql = "DELETE FROM clientes ";

$resultado = mysqli_query($conexao,$sql)

or die (mysqli_error());

echo "Exclusao realizada com sucesso!";

?>

<br><a href=index.html> Voltar</a>

</body>

</html>