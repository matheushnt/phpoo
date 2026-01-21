<?php

namespace src\classes;

class Carro extends VeiculoMotorizado
{
    public function __construct(
        string $cor,
        int $ano,
        int $potenciaMotor,
        float $combustivel,
        protected int $numeroPortas,
        protected string $tipoCarroceria
    ) {
        parent::__construct($cor, $ano, $potenciaMotor, $combustivel);
    }
}
