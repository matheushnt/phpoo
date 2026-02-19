<?php

namespace src\classes;

use src\enums\MidiaFisicaCondicao;

abstract class MidiaFisica extends Midia
{
    protected MidiaFisicaCondicao $condicao;

    public function __construct(string $titulo, int $duracao, string $ano, MidiaFisicaCondicao $condicao,)
    {
        parent::__construct($titulo, $duracao, $ano);
        $this->condicao = $condicao;
    }

    abstract public function calcularValorRevenda(): float;

    protected function avaliarCondicao(): string
    {
        return $this->condicao->value;
    }
}
