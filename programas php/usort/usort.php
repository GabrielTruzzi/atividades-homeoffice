<?php
function comparar($a, $b)

{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

		$a = array(1,44,643,945234,0,12,9,37,78);
		
usort($a, "comparar");

foreach ($a as $key => $value) {
    echo "posição $key do vetor crescente: $value\n", "<br>";
}
?>
