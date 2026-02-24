<?php

namespace src\classes;

use src\enums\BatidaPonto;
use src\interfaces\PodeBaterPontoInterface;
use src\interfaces\RecebeValeTransporteInterface;
use src\interfaces\RemuneravelInterface;
use src\interfaces\TrabalhavelInterface;

class Estagiario implements TrabalhavelInterface, RemuneravelInterface, PodeBaterPontoInterface, RecebeValeTransporteInterface
{
    public function __construct(private string $nome, private float $bolsaAuxilio, private float $horasTrabalhadas) {}

    public function trabalhar(): string
    {
        return "Estagiário aprendendo e trabalhando";
    }

    public function receberSalario(): float
    {
        return $this->bolsaAuxilio;
    }

    public function calcularSalarioMensal(): float
    {
        return $this->bolsaAuxilio;
    }

    public function baterPonto(BatidaPonto $batida): string
    {
        $tipo = $batida->name;
        $hora = date('H:i:s');
        return "{$tipo} de estágio às {$hora}";
    }

    public function horasTrabalhadas(): float
    {
        return $this->horasTrabalhadas;
    }

    public function calcularValeTransporte(): float
    {
        return 88.0;
    }

    public function receberValeTransporte(): string
    {
        return "Vale-transporte estudantil de R$ 88 creditado";
    }
}
