<?php

use src\classes\Circulo;
use src\classes\Quadrado;
use src\classes\Triangulo;

$formasGeometricas = [new Triangulo(3, 2), new Quadrado(5), new Circulo(10)];

foreach ($formasGeometricas as $formasGeometrica) {
    dump($formasGeometrica->calcularArea());
}
