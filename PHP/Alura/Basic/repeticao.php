<?php

$contador = 1; //valor que vai ser usado de base

//ele forma um looping (analize A) de mensagens (mensagem A) ate chegar na mensagem final, no caso, #15...
//...usando de base contador é igual a contador mais um(base A).
while ($contador <= 15) { //analize A
    echo "#$contador\n"; //mensagem A
    $contador = $contador + 1; //base A
}
