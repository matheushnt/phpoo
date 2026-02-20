<?php

use src\classes\NotaFiscal;

$notaFiscal = new NotaFiscal('NF-123456', 'João da Carochinha', ['PS5' => 3389.99, 'Monitor Gamer LG' => 1789.99]);

var_dump($notaFiscal->imprimir());
