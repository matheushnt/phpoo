<?php

namespace src\classes;

abstract class Midia
{
    public function __construct(
        protected string $titulo,
        protected int $duracao,
        protected string $ano,
    ) {}

    abstract public function reproduzir(): string;
    abstract public function informacoes(): string;
    public function duracaoFormatada(): string
    {
        $hora = floor($this->duracao / 60);
        $min = $this->duracao % 60;
        return "{$hora}h {$min}min";
    }
}
