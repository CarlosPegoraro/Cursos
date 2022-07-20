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
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c max='100' min='0' value='0'/><br/>";
                    $c++;
                }
            ?>
            <input class="botao" type="submit" value="Enviar"/>
        </form>
    </div>
</body>
</html>