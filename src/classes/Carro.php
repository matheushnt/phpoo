<?php

namespace src\classes;

class Carro
{
    public string $marca;
    public string $nome;
    private int $ano;

    public function __construct(int $ano)
    {
        $this->ano = $ano;
    }
}
