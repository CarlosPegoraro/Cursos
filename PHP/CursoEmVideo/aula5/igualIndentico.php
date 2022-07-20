<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "sim" : "não";
            echo "Ass variáveis A e B são iguais? $r";
        ?>
    </div>
</body>
</html>