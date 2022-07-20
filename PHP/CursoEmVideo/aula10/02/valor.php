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
            $v = isset($_GET['val']) ? $_GET['val'] : 1;
            echo "<h1>Calculando o fatorial de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);
            echo "<h2>$v! = $fat</h2>";
        ?>
        <a class="botao" href="exercicio.php">Voltar</a>
    </div>
</body>
</html>