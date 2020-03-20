<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Alteração de dados</title>
<meta charset="utf-8">
</head>

<body>

<?php

$conexao=mysqli_connect("localhost","root","")or die("nao foi possivel conectar");

mysqli_select_db($conexao,"banco_completo")or die("nao foi possivel selecionar o banco de dados");

$consulta="select * from clientes";

$resultado=mysqli_query($conexao,$consulta)or die("falha na execução da consulta");

while ($linha=mysqli_fetch_array($resultado)) {

$nome = $linha["nome"];

$observacoes = $linha["observacoes"];

echo "<form action=\"update.php\" name=\"form\" method=\"post\">";

echo "Nome:<br>";

echo "<input type=\"text\" name=\"nome\" value=\"$nome\" maxlenght=\"40\" 

size=\"25\" /><br>";

echo "Observacoes:<br>";

echo "<textarea name=\"observacoes\" rows=\"4\" maxlenght=\"200\"

cols=\"20\">$observacoes</textarea><br>";

echo "<input type=\"submit\" value=\"Inserir\" />";

echo "</form>";

}

?>

</body>

</html>