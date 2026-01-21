<?php

namespace src\classes;

class VeiculoMotorizado extends Veiculo
{
    public function __construct(
        string $cor,
        int $ano,
        protected int $potenciaMotor,
        protected float $combustivel
    ) {
        parent::__construct($cor, $ano);
    }
}
