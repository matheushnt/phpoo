<?php

namespace src\classes;

use src\enums\BatidaPonto;
use src\interfaces\PodeBaterPontoInterface;
use src\interfaces\PodeTirarFeriasInteface;
use src\interfaces\RecebeValeTransporteInterface;
use src\interfaces\RemuneravelInterface;
use src\interfaces\TrabalhavelInterface;

class Funcionario extends Pessoa implements TrabalhavelInterface, RemuneravelInterface, PodeBaterPontoInterface, PodeTirarFeriasInteface, RecebeValeTransporteInterface
{
    public function __construct(
        private float $salario,
        private string $cargo,
        private int $diasFerias = 30,
        private float $horasTrabalhadas,
        string $nome,
        string $cpf,
    ) {
        parent::__construct($nome, $cpf);
    }

    public function trabalhar(): string
    {
        return "Trabalhando no escritório";
    }

    public function horasTrabalhadas(): float
    {
        return $this->horasTrabalhadas;
    }

    public function receberSalario(): float
    {
        return $this->salario;
    }

    public function calcularSalarioMensal(): float
    {
        return $this->salario;
    }

    public function tirarFerias(int $dias): string
    {
        if ($dias > $this->diasFerias) {
            return "Não há dias de férias suficientes. Disponíveis: {$this->diasFerias}";
        }

        $this->diasFerias -= $dias;
        return "Férias de {$dias} dias aprovadas. Dias restantes: {$this->diasFerias}";
    }

    public function diasFeriasDisponiveis(): int
    {
        return $this->diasFerias;
    }

    public function baterPonto(BatidaPonto $batida): string
    {
        return "{$batida->name} registrada às " . date("H:i:s");
    }

    public function calcularValeTransporte(): float
    {
        return (int) 22 * 5.50;
    }

    public function receberValeTransporte(): string
    {
        return "Vale-transporte de R$ " . $this->calcularValeTransporte() . " creditado";
    }

    public function dados(): array
    {
        return [
            'nome' => $this->nome,
            'cpf' => self::formatarCPF($this->cpf),
            'cargo' => $this->cargo,
            'salario' => $this->salario,
        ];
    }
}
