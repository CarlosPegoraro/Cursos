<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <form method="get" action="dados.php">
            <?php
                function soma($a, $b) {
                    return $a + $b;
                }
                $x = 3;
                $y = 9;
                $r = soma($x, $y);
                echo "A soma entre $x e $y é $r";
            ?>
        </form>
    </div>
</body>
</html>