<?php

namespace src\classes;

use DomainException;

class Pedido
{
    private array $itens = [];

    public function subtotal(): float
    {
        return $this->calcularSubtotal();
    }
    public function adicionarItem(float $preco): void
    {
        if ($preco < 0) {
            throw new DomainException();
        }

        $this->itens[] = $preco;
    }

    public function calcularTotal(float $taxaEntrega): float
    {
        return $this->calcularSubtotal() + $taxaEntrega;
    }

    private function calcularSubtotal(): float
    {
        return array_reduce($this->itens, fn($subtotal, $itemAtual) => $subtotal += $itemAtual, 0);
    }
}
