<?php

namespace Alura\Banco\Modelo;

trait MetodoRecupera
{
    public function __get(string $name)
    {
        $metodo = ucfirst($name);
        $metodo = 'recupera' . $metodo;
        return $this->$metodo();
    }
}