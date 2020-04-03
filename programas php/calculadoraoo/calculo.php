<?php

include 'inicalculo.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculadora = new Calculos($num1,$num2,$cal);

echo "Resultado: ",$calculadora->calcMetodo();

?>