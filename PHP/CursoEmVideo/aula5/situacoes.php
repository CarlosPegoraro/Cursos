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
            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $m = ($nota1 + $nota2) / 2;
            echo "A media entre $nota1 e $nota2 é $m";
            $sit = ($m < 6) ? "reprovado" : "Aprovado";
            echo "<br/>O aluno foi $sit";
        ?>
    </div>
</body>
</html>