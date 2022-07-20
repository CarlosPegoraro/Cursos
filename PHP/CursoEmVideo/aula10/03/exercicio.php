<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <form method="get" action="valor.php">
            Numero:
            <select name="num">
            <?php 
                $c = 1;
                do {
                    echo "<option value='$c'>$c</option>";
                    $c++;
                } while ($c <= 10);
            ?>
            </select><br/>
            <input type="submit" value="Enviar" class="botao"/>
        </form>
    </div>
</body>
</html>