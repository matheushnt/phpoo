<?php

namespace src\classes;

use src\interfaces\PagavelInterface;

class Fatura implements PagavelInterface
{
    public function __construct(
        private string $numero,
        private string $cliente,
        private float $valorTotal,
        private string $vencimento,
        private bool $paga = false,
    ) {}

    public function valor(): float
    {
        return $this->valorTotal;
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
            "numero" => $this->numero,
            "cliente" => $this->cliente,
            "valorTotal" => $this->valorTotal,
            "vencimento" => $this->vencimento,
            "paga" => $this->paga,
        ];
    }
}
