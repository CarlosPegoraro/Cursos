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
                    $s = $a + $b;
                    echo "<p>A soma vale $s</p>";
                }
                soma(2,4);
                soma(8, 10);
                $x = 9;
                $y = 15;
                soma($x, $y);
            ?>
        </form>
    </div>
</body>
</html>