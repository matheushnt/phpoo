<?php

namespace src\classes;

use src\interfaces\RemuneravelInterface;
use src\interfaces\TrabalhavelInterface;

class Freelancer implements TrabalhavelInterface, RemuneravelInterface
{
    public function __construct(
        private string $nome,
        private float $valorHora,
        private float $horasTrabalhadasNoMes,
    ) {}

    public function trabalhar(): string
    {
        return "Trabalhando remotamente no projeto";
    }

    public function receberSalario(): float
    {
        return $this->valorHora * $this->horasTrabalhadasNoMes;
    }

    public function calcularSalarioMensal(): float
    {
        return $this->valorHora * $this->horasTrabalhadasNoMes;
    }
}
