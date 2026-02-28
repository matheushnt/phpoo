<?php

namespace src\classes;

use src\enums\TipoMotor;

class Motor
{
    public function __construct(
        public TipoMotor $tipo,
        public int $potencia,
        private int $cilindradas,
    ) {}

    public function ligar(): string
    {
        return "Motor {$this->tipo->value} de {$this->potencia}cv ligado";
    }

    public function desligar(): string
    {
        return "Motor desligado";
    }

    public function acelerar(): string
    {
        return "Acelerando motor {$this->tipo}";
    }
}
