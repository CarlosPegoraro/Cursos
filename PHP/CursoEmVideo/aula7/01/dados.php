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
            if ($_GET) {
                $ano = $_GET['ano'];
                echo "Você nasceu em $ano";
            } else {
                echo "Informações inválidas";
            }
        ?>
    </div>
</body>
</html>