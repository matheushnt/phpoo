<?php

namespace src\interfaces;

interface RemuneravelInterface
{
    public function receberSalario(): float;
    public function calcularSalarioMensal(): float;
}
