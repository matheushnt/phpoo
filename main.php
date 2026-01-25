<?php

use src\classes\PagamentoCartao;
use src\classes\PagamentoPix;

// $pmtoCartao = new PagamentoCartao('1234567812345678', '123', '12/2026', 1239);
// dump($pmtoCartao->processar());

$pmtoPix = new PagamentoPix('+558540028922', 50);
dump($pmtoPix->processar());
