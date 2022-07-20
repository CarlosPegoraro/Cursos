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
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variável X é $x";
            echo "<br/>A variável criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>