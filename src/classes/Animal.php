<?php

namespace src\classes;

class Animal
{
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function emitirSom(): string
    {
        return 'Som emitido';
    }
}
