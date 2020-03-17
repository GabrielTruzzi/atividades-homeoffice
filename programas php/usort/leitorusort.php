<?php

$dados[0]=$_POST['val1'];
$dados[1]=$_POST['val2'];
$dados[2]=$_POST['val3'];
$dados[3]=$_POST['val4'];
	
function compararformulario($a, $b){
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}	
	
usort($dados, "compararformulario");

foreach ($dados as $key => $value) {
    echo "posição $key do vetor crescente: $value\n", "<br>";
}
?>
