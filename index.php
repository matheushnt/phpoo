<?php

require __DIR__ . '/vendor/autoload.php';

use src\classes\Retangulo;

$retangulo = new Retangulo(12, 7);

dump($retangulo->area());
dump($retangulo->perimetro());
