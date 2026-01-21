<?php

use src\classes\Circulo;
use src\classes\Quadrado;
use src\classes\Triangulo;

$triangulo = new Triangulo(3, 2);
dump($triangulo->calcularArea());

$quadrado = new Quadrado(5);
dump($quadrado->calcularArea());

$circulo = new Circulo(10);
dump($circulo->calcularArea());
