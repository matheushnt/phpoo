<?php

namespace src\classes;

class Circulo extends FormaGeometrica
{
    public function __construct(public int $raio) {}

    public function calcularArea(): float
    {
        return round(pi() * ($this->raio ** 2), 2);
    }
}
