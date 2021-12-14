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
    [1, 3, 2, 1],  
    [1, 3, 2],  
    [1, 2, 1, 2],  
    [3, 6, 5, 8, 10, 20, 15], 
    [1, 1, 2, 3, 4, 4], 
    [1, 4, 10, 4, 2], 
    [10, 1, 2, 3, 4, 5], 
    [1, 1, 1, 2, 3], 
    [0, -2, 5, 6], 
    [1, 2, 3, 4, 5, 3, 5, 6], 
    [40, 50, 60, 10, 20, 30], 
    [1, 1], 
    [1, 2, 5, 3, 5], 
    [1, 2, 5, 5, 5], 
    [10, 1, 2, 3, 4, 5, 6, 1], 
    [1, 2, 3, 4, 3, 6], 
    [1, 2, 3, 4, 99, 5, 6], 
    [123, -17, -5, 1, 2, 3, 12, 43, 45], 
    [3, 5, 67, 98, 3] 
];

for($i=0; $i<count($arrays); $i++) {
    echo '</br> ['.implode(', ', $arrays[$i]).'] = ';
    echo (sequenciaCrescente($arrays[$i]))?'true':'false';
}