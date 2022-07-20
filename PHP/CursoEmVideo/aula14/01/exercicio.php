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
            // vetor simples
            $a = [2,6,9];
            foreach ($a as $b) {
                    echo "$b ";
            }
            echo "<br/>";
            //vetor com campos personalizados
            $c = array(
                "nome" => "Carlos",
                "idade" => 26,
                "peso" => 89.6
            );
            foreach ($c as $d => $e) {
                echo "o valor de $d é $e<br/>";
            }
            echo "<br/>";
            // vetor de vetores ou matriz
            $m = array(
                array(2,3),
                array(3,4),
                array(9,5)
            );
            $m[0][1] = $m[2][0];
            print_r($m);
            ?>
        </pre>
    </div>
</body>
</html>