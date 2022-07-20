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
                $c = 1;
                do {
                    echo "$c ";
                    $c++;
                } while ($c <= 10);
            ?>
        </form>
    </div>
</body>
</html>