<?php

namespace src\classes;

use src\enums\TipoTransmissao;

class Transmissao
{
    public function __construct(
        public TipoTransmissao $tipo,
        public int $marchas,
    ) {}

    public function trocarMarcha(int $marcha): string
    {
        if ($this->tipo === TipoTransmissao::Automatico || $this->tipo === TipoTransmissao::CVT) {
            return "Transmissão {$this->tipo->value} ajustou automaticamente";
        }

        if ($this->tipo === TipoTransmissao::Manual && $marcha >= 1 && $marcha <= $this->marchas) {
            return "Marcha {$marcha} engatada";
        }

        return "Marcha inválida";
    }
}
