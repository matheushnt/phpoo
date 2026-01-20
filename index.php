<?php

use src\classes\Pedido;

require __DIR__ . '/vendor/autoload.php';

$pedido = new Pedido;
$pedido->adicionarItem(4000.0);
$pedido->adicionarItem(6000.0);
$pedido->adicionarItem(7000.0);

dump($pedido->calcularTotal(420.80));
