<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
        }
        pre {
            font-size: 18pt;
            color: yellowgreen;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            
            //chama as classes e outros arquivos
            require_once 'Aluno.php';
            require_once "Professor.php";
            require_once 'Funcionario.php';

            //--------------------------------
            //declaracao de variaveis

            $p[0] = new Pessoa("Carlos", 2006, "masculino");
            $p[1] = new Pessoa("Athos", 1992, "masculino");
            $p[2] = new Pessoa("Marco", 1978, "masculino");

            $a[0] = new Aluno(12580, "informática", $p[0]);
            $pr[0] = new Professor(11250, "biologia", $p[1]);
            $f[0] = new Funcionario($p[2]);

            //------------------------------
            //codigo

            $a[0]->mostrarAluno();
            $a[0]->cancelarMatricula();
            $a[0]->mostrarAluno();
            $pr[0]->mostrarProfessor();
            $pr[0]->receberAumento();
            $pr[0]->mostrarProfessor();
            $f[0]->mostrarFuncionario();
            $f[0]->arrumarEmprego("Veterinário", "Cirurgião", 2000);
            $f[0]->mostrarFuncionario();
            $f[0]->ficarDesempregado();
            $f[0]->mostrarFuncionario();
        ?>
    </pre>
</body>
</html>