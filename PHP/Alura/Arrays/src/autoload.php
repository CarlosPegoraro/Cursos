<?php

spl_autoload_register(
    function (string $nameSpaceClasse): void {
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClasse);
        @include_once getcwd() . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);