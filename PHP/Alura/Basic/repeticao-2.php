<?php

//$contador = contador + 1 e a mesma coisa que $contador += 1, que e a mesma coisa que $contador++

//para contador igual a 1, analiza se contador e menor ou igual a 15, usando a base de contador igual...
//...a contador mais 1
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue;
    } else {
        echo "#$contador\n";
    }
}
