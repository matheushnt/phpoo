<?php

use src\classes\Estagiario;
use src\classes\Freelancer;
use src\classes\Funcionario;
use src\classes\Voluntario;
use src\enums\BatidaPonto;

$objetivo = "
    Entender o Interface Segregation Principle (ISP) - classes não devem ser forçadas a implementar
    métodos que não usam. Interfaces pequenas e específicas são melhores que interfaces grandes e genéricas.
";

$testes = [
    "1 Funcionário: Carlos (salário R$ 3000, 30 dias férias, 160h trabalhadas)",
    "1 Freelancer: Ana (R$ 80/hora, trabalhou 120 horas no mês)",
    "1 Voluntário: João (causa: Proteção Animal)",
    "1 Estagiário: Maria (bolsa R$ 1000, 100h trabalhadas)",
    "Para cada um, chame trabalhar()",
    "Para os que recebem: mostre o salário",
    "Para os que batem ponto: registre entrada e saída",
    "Para os que tiram férias: tire 10 dias",
    "Para os que recebem vale: mostre o valor",
];

echo str_pad("  Segregação de Interface  ", 50, "=-", STR_PAD_BOTH) . PHP_EOL;

$func = new Funcionario(3000.0, "TI", 30, 160, "Pereira", "12345678910");
$freelancer = new Freelancer("Ana", 80, 120);
$voluntario = new Voluntario("João", "Proteção Animal");
$estagiario = new Estagiario("Maria", 1000.0, 100);

echo str_repeat("=", 50) . PHP_EOL;

dump($func->trabalhar());
dump($freelancer->trabalhar());
dump($voluntario->trabalhar());
dump($estagiario->trabalhar());

echo str_repeat("=", 50) . PHP_EOL;

dump($func->receberSalario());
dump($freelancer->receberSalario());
dump($estagiario->receberSalario());

echo str_repeat("=", 50) . PHP_EOL;

dump($func->baterPonto(BatidaPonto::Entrada));
dump($func->baterPonto(BatidaPonto::Saida));
dump($estagiario->baterPonto(BatidaPonto::Entrada));
dump($estagiario->baterPonto(BatidaPonto::Saida));

echo str_repeat("=", 50) . PHP_EOL;

dump($func->tirarFerias(10));

echo str_repeat("=", 50) . PHP_EOL;

dump($func->receberValeTransporte());
dump($estagiario->receberValeTransporte());
