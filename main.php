<?php

use src\classes\Carro;
use src\classes\Veiculo;
use src\classes\VeiculoMotorizado;

$veiculo = new Veiculo('vermelho', 2026);
dump($veiculo);

$veiculoMotorizado = new VeiculoMotorizado('verde', 2027, 300, 2.0);
dump($veiculoMotorizado);

$carro = new Carro('azul', 2028, 800, 7.5, 2, 'coupé');
dump($carro);
