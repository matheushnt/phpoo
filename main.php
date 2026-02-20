<?php

use src\classes\Orcamento;
use src\enums\OrcamentoStatus;

$orcamento = new Orcamento('123456', 'Pedro', ['PS5', 'Nintendo Switch 2'], 6289.99, '01/01/2027', OrcamentoStatus::Cancelado);

dump($orcamento->carregar());
dump($orcamento->exportarPDF());
