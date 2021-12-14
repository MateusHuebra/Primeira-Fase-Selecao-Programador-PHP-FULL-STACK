<?php

function sequenciaCrescente(array $array) {
    if(count($array)<=2) return true;
    
    for($removido=0; $removido<count($array); $removido++) {
        
        $count = 0;
        $novoArray = [];
        for($i=0; $i<count($array); $i++) {
            if($i!=$removido) $novoArray[] = $array[$i];
        }
        
        for($i=0; $i<count($novoArray)-1; $i++) {
            if($novoArray[$i]<$novoArray[$i+1]) {
                $count++;
            } else {
                break;
            }
        }
        
        if($count == count($novoArray)-1) return true;
        
    }

    return false;
}

$arrays = [
    [[1, 3, 2, 1], false],  
    [[1, 3, 2], true],  
    [[1, 2, 1, 2], false],  
    [[3, 6, 5, 8, 10, 20, 15], false], 
    [[1, 1, 2, 3, 4, 4], false], 
    [[1, 4, 10, 4, 2], false], 
    [[10, 1, 2, 3, 4, 5], true], 
    [[1, 1, 1, 2, 3], false], 
    [[0, -2, 5, 6], true], 
    [[1, 2, 3, 4, 5, 3, 5, 6], false], 
    [[40, 50, 60, 10, 20, 30], false], 
    [[1, 1], true], 
    [[1, 2, 5, 3, 5], true], 
    [[1, 2, 5, 5, 5], false], 
    [[10, 1, 2, 3, 4, 5, 6, 1], false], 
    [[1, 2, 3, 4, 3, 6], true], 
    [[1, 2, 3, 4, 99, 5, 6], true], 
    [[123, -17, -5, 1, 2, 3, 12, 43, 45], true], 
    [[3, 5, 67, 98, 3], true] 
];

for($i=0; $i<count($arrays); $i++) {
    echo '</br> ['.implode(', ', $arrays[$i][0]).'] = > ';
    $resultado = sequenciaCrescente($arrays[$i][0]);
    $validacao = $resultado==$arrays[$i][1];
    echo ($resultado)?'true':'false';
    echo ' <span style="color: '.(($validacao)?'green':'red').'; margin: 20px;"> resultado '.(($validacao)?'válido':'inválido   ').'</span>';

}