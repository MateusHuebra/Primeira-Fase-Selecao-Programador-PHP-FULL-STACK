<?php

$arraySorteado = [];
$naoRepetidos = [];

for($i=0; $i<20; $i++) {
    $arraySorteado[] = rand(1, 10);
}

echo 'Array sorteado: </br>';
echo implode(', ', $arraySorteado);

for($i=0; $i<20; $i++) {
    $atual = $arraySorteado[$i];
    $repeticao = array_keys($arraySorteado, $atual);
    if(count($repeticao)==1) $naoRepetidos[] = $atual;
}

echo '</br> </br> Os números que não se repetem são: </br>';
echo implode(', ', $naoRepetidos);