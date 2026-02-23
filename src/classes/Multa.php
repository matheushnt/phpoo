<?php

namespace src\classes;

use src\interfaces\PagavelInterface;

class Multa implements PagavelInterface
{
    public function __construct(
        private string $codigo,
        private string $infracao,
        private float $valor,
        private string $dataEmissao,
        private bool $paga = false,
    ) {}

    public function valor(): float
    {
        return $this->valor;
    }

    public function pagar(): bool
    {
        if ($this->paga) {
            return false;
        }

        $this->paga = true;
        return true;
    }

    public function informacoes(): array
    {
        return [
            "codigo" => $this->codigo,
            "infracao" => $this->infracao,
            "valor" => $this->valor,
            "dataEmissao" => $this->dataEmissao,
            "paga" => $this->paga,
        ];
    }
}
