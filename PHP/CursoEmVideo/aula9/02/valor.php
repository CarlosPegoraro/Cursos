<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
            $fim = isset($_GET['fim']) ? $_GET['fim'] : 10;
            $incre = isset($_GET['incre']) ? $_GET['incre'] : 1;
            $c = $ini;
            $n = 1;
            if($ini > $fim) {
                $incre = $incre * (-1);
                while ($c >= $fim) {
                    echo "Numero $n é: $c <br/>";
                    $n++;
                    $c = $c + $incre;
                }
            } else {
                while ($c <= $fim) {
                    echo "Numero $n é: $c <br/>";
                    $n++;
                    $c = $c + $incre;
                }
            }
        ?>
        <a href="exercicio.html">Voltar</a>
    </div>
</body>
</html>