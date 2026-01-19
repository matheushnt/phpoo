<?php

require __DIR__ . '/vendor/autoload.php';

use src\classes\ContaBancaria;

$contaBancaria = new ContaBancaria('Pedro');
dump($contaBancaria->consultarSaldo());
dump($contaBancaria->depositar(345.89));
dump($contaBancaria->consultarSaldo());
dump($contaBancaria->sacar(300));
dump($contaBancaria->consultarSaldo());
dump($contaBancaria->dados());
