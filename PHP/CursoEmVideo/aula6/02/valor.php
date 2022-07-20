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
            $nome = isset($_GET['nome']) ? $_GET['nome'] : "[Não informado]";
            $ano = isset($_GET['ano']) ? $_GET['ano'] : 0;
            $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "[Sem sexo]";
            $idade = date("Y") - $ano;
            echo "$nome tem $idade e é do sexo $sexo<br/>";
        ?>
        <a href="exercicio.html">Voltar</a>
    </div>
</body>
</html>