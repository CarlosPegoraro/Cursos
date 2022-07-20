<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <pre>
            <?php
                /*1*/$v = array("B", "J", "A", "X", "K");
                print_r($v);
                krsort($v);
                print_r($v);
                /*para o fim do vetor
                array_push($v, 8) - adiciona um valor no ultimo campo do array
                array_pop($v) - elimina o ultimo elemento do vetor*/

                /*para o comeco do vetor
                array_unshift($v, 7) - adiciona um elemento no inicio do vetor
                array_shift($n) - apaga o primeiro elemento do array*/

                /*ordernar o vetor
                sort($v) - ordena o vetor de frma crescente, para strings e numeros
                rsort($v) - ordena o vetor de forma decresente, para string e numeros
                asort($v) - ordena de forma associativa cresente, mantem os indices juntos com seus valores
                arsort($v) - ordena de forma associativa decresente, mantem os indices juntos com seus valores
                ksort($v) - ordena os indices de forma cresente, mantem os indices com seus valores
                krsort($v) - ordena os indices de forma decresente, mantem os indices com seus valores*/
            ?>
        </pre>
    </div>
</body>
</html>