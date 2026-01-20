<?php

namespace src\classes;

class Retangulo
{
    private int $base;
    private int $altura;

    public function __construct(int $base, int $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area(): int
    {
        return $this->base * $this->altura;
    }

    public function perimetro(): int
    {
        return 2 * ($this->base + $this->altura);
    }
}
