<?php

require __DIR__ . '/vendor/autoload.php';

use src\classes\Calculadora;

dump(Calculadora::somar(0.1, 0.2));
dump(Calculadora::multiplicar(8, 4));
dump(Calculadora::subtrair(2.9, 9));
dump(Calculadora::dividir(5));
