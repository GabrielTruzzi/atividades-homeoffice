<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Atualizar dados</title>
<meta charset="utf-8">
</head>

<body>

<?php

$conexao=mysqli_connect("localhost","root","")or die("nao foi possivel conectar");

mysqli_select_db($conexao,"banco_completo")or die("nao foi possivel selecionar o banco de dados");

$consulta="select * from clientes";

$resultado=mysqli_query($conexao,$consulta)or die("falha na execução da consulta");

$nome=$_POST["nome"];

$observacoes=$_POST["observacoes"];

$sql = "UPDATE clientes SET nome='$nome', observacoes='$observacoes'";

$resultado = mysqli_query($conexao,$sql) or die (mysqli_error());

echo "Alteracao realizada com sucesso!";

?>

<a href=index.html> Voltar</a>

</body>
</html>