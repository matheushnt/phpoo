<?php

namespace src\classes;

class Calculadora
{
    public static function somar(int | float $x = 0, int | float $y = 0): int | float
    {
        return $x + $y;
    }

    public static function subtrair(int | float $x = 0, int | float $y = 0): int | float
    {
        return $x - $y;
    }

    public static function multiplicar(int | float $x = 0, int | float $y = 0): int | float
    {
        return $x * $y;
    }

    public static function dividir(int | float $x = 1, int | float $y = 1): int | float
    {
        return $x / $y;
    }
}
