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
            $v = isset($_GET['num']) ? $_GET['num'] : 1;
            $c = 1;
            do {
                $tab = $v * $c;
                echo "$v x $c = $tab<br/>";
                $c++;
            } while ($c <= 10);
        ?>
        <a class="botao" href="exercicio.php">Voltar</a>
    </div>
</body>
</html>