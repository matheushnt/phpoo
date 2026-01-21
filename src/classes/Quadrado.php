<?php

namespace src\classes;

class Quadrado extends FormaGeometrica
{
    public function __construct(public int $tamanhoLado) {}

    public function calcularArea(): float
    {
        return $this->tamanhoLado ** 2;
    }
}
