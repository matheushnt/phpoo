<?php

namespace src\classes;

use src\interfaces\PagavelInterface;

class Mensalidade implements PagavelInterface
{
    public function __construct(
        private string $mes,
        private string $ano,
        private string $aluno,
        private float $valor,
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
            "mes" => $this->mes,
            "ano" => $this->ano,
            "aluno" => $this->aluno,
            "valor" => $this->valor,
            "paga" => $this->paga,
        ];
    }
}
