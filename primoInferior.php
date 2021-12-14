<?php

function primoInferior(int $inicial, int $final) {
    $primos = [];
    for($i=($inicial+1); $i<$final; $i++) {
        $ehPrimo = true;
        for($j=2; $j<$i; $j++) {
            if($i%$j==0) {
                $ehPrimo = false;
                break;
            }
        }
        if($ehPrimo) $primos[] = $i;
    }
    return $primos;
}

echo '</br> <span style="color: gray;"> //implode(\', \', primoInferior(10, 29)); </span> </br>';
echo implode(', ', primoInferior(10, 29));