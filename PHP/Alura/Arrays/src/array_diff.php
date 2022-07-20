<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
  ];

  $correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);