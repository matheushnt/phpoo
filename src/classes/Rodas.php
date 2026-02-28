<?php

namespace src\classes;

use src\enums\TipoRodas;

class Rodas
{
    public function __construct(
        public int $aro,
        public TipoRodas $tipo,
        public int $quantidade,
    ) {}

    public function girar(): string
    {
        return "Rodas aro {$this->aro} girando";
    }

    public function frear(): string
    {
        return "Freando com {$this->quantidade} rodas";
    }
}
