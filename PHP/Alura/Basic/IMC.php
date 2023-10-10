<?php
//Programa para calcular o seu IMC

$peso = 74;
$altura = 1.90;
$alturaAoQuadrado = $altura ** 2;
$imc = round($peso / $alturaAoQuadrado);

echo "Olá, vamos calcular o seu IMC?\n";
echo "O IMC é uma media entre o seu peso com a sua altura!\n";
echo "O seu peso é $peso.\n";
echo "Sua altura é de $altura.\n";
echo "Logo o seu IMC é de $imc.\n";

if ($imc <=19) {
    echo "O seu IMC está um pouco baixo, tente consumir mais carboidratos!\n";
} else if ($imc <= 24) {
    echo "O seu IMC está dentro da media, continue se cuidando!\n";
} else if ($imc <= 29) {
    echo "O seu IMC está um pouco elevado, tente fazer uma caminhada!\n";
} else if ($imc <= 35) {
    echo "O seu IMC está elevado, tente consumir menos carboidratos!\n";
} else {
    echo "O seu IMC está muito elevado, procure um médico!\n";
}

echo "Até a proxima, tchau!";
