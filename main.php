<?php

use src\classes\Contrato;
use src\classes\Relatorio;

$contrato = new Contrato('Brinquedos', 'Hugo', ['Marcelo', 'Ana'], 2000, '06/2030', ['Cláusula 1', 'Cláusula 2', 'Cláusula 3']);

dump($contrato->gerarConteudo());
