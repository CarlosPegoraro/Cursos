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
            $ano = $_GET['ano'];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
            $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório" : "Não obrigatorio";
            echo " e dessa forma, o voto é $tipo";
        ?>
    </div>
</body>
</html>