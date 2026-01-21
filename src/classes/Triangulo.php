<?php

namespace src\classes;

class Triangulo extends FormaGeometrica
{
    public function __construct(public int $comprimento, public int $largura) {}

    public function calcularArea(): float
    {
        return ($this->comprimento * $this->largura) / 2;
    }
}
