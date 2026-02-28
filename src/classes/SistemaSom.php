<?php

namespace src\classes;

class SistemaSom
{
    public function __construct(public string $marca, public string $potencia, public bool $bluetooth) {}

    public function tocar(string $musica): string
    {
        return "♪ Tocando '{$musica}' no som {$this->marca}";
    }

    public function ajustarVolume(int $nivel): string
    {
        if ($nivel < 0 || $nivel > 100) {
            return "Nível de volume inválido. Por favor, insira um valor entre 0 e 100.";
        }

        return "Volume ajustado para {$nivel}%";
    }
}
