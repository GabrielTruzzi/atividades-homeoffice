<?php

$servidor = "localhost";
$tipo_servidor = "mysql";
$nome_do_banco = "minirede";
$usuario = "root";
$senha = "";
 

$conn = new PDO("$tipo_servidor:host=$servidor;dbname=$nome_do_banco",$usuario,$senha);
 
?>