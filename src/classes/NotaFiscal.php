<?php

namespace src\classes;

use src\interfaces\ImprimivelInterface;

class NotaFiscal implements ImprimivelInterface
{
    private float $valorTotal = 0;

    public function __construct(
        private string $numero,
        private string $cliente,
        private array $itens,
    ) {}

    public function imprimir(): string
    {
        return "
            ===== NOTA FISCAL Nº {$this->numero} =====
            Cliente: {$this->cliente}

            TOTAL: R$ {$this->calcularValorTotal()}
            ====================================
        ";
    }

    private function calcularValorTotal(): float
    {
        $total = $this->valorTotal;
        $valores = array_values($this->itens);

        foreach ($valores as $val) {
            $total += $val;
        }

        return round($total, 2);
    }
}
