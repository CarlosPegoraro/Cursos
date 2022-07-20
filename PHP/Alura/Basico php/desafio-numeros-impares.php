<?php

//SOLUÇÃO DO PROFESSOR
// for ($contador = 1; $contador < 100; $contador++) {
//       if ($contador %2 != 0) {        o simbolo (!=) é igual a diferente
//           echo $contador . PHP_EOL
//       }
// }

//MINHA SOLUÇÃO
for ($contador = 1; $contador <= 100; $contador = $contador + 2) {
        echo "#$contador\n";
}
