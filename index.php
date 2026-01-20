<?php

require __DIR__ . '/vendor/autoload.php';

use src\classes\Carro;

$corolla = new Carro(2020);
$corolla->marca = 'Toyota';
$corolla->nome = 'Corolla';

dump($corolla);
