<?php

use src\classes\Fatura;
use src\classes\Mensalidade;
use src\classes\Multa;
use src\executores\ExecutorPagamento;

$objetivo = "
    Usar interfaces como tipo de parâmetro (type hint) permitindo que funções trabalhem
    com qualquer objeto que implemente o contrato, independente da classe concreta.
";

$testes = [
    "2 faturas",
    "1 mensalidade",
    "1 multa",
    "Pague a primeira fatura",
    "Processe TODAS as cobranças (incluindo a já paga)",
];

echo str_pad(" Tipo de Parâmetro com Interface ", 50, "=-", STR_PAD_BOTH) . PHP_EOL;

$primeiraFatura = new Fatura("FAT-132435", "Ferdinando", 3589.99, "26/02/2026");
$segundaFatura = new Fatura("FAT-152637", "Paula", 1239.99, "01/03/2026");
$mensalidade = new Mensalidade("2026", "03", "Pereira", 2979.89);
$multa = new Multa("MT-314253", "Depredação do patrimônio público", 679.89, "01/06/2026");
$executor = new ExecutorPagamento($primeiraFatura);

echo str_repeat("=", 50) . PHP_EOL;

dump($executor->executar());

echo str_repeat("=", 50) . PHP_EOL;

$pagamentoPrimeiraFatura = new ExecutorPagamento($primeiraFatura)->executar();
$pagamentoSegundaFatura = new ExecutorPagamento($segundaFatura)->executar();
$pagamentoMensalidade = new ExecutorPagamento($mensalidade)->executar();
$pagamentoMulta = new ExecutorPagamento($multa)->executar();

dump($pagamentoPrimeiraFatura);
dump($pagamentoSegundaFatura);
dump($pagamentoMensalidade);
dump($pagamentoMulta);
