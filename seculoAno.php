<?php

function seculoAno(int $ano) {
    if($ano<=0) {
        return 'Os séculos são contados a partir do Ano 1';
    }
    if(preg_match('/^([0-9]+)0{2}$/', $ano, $matches)) {
        return 'Século '.$matches[1];
    }

    $aux = substr($ano, 0, strlen($ano)-2);
    return 'Século '. ($aux+1);

}

echo '</br> <span style="color: gray;"> //seculoAno(0); </span> </br>';
echo seculoAno(0);

echo '</br> </br> <span style="color: gray;"> //seculoAno(1905); </span> </br>';
echo seculoAno(1905);

echo '</br> </br> <span style="color: gray;"> //seculoAno(1700); </span> </br>';
echo seculoAno(1700);