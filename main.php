<?php

use src\classes\CarroBase;
use src\classes\Motor;
use src\classes\Rodas;
use src\classes\SistemaSom;
use src\classes\Transmissao;
use src\enums\TipoMotor;
use src\enums\TipoRodas;
use src\enums\TipoTransmissao;

$objetivo = "
    Entender que COMPOSIÇÃO (ter objetos como propriedades) é mais flexível que HERANÇA (estender classes). Com composição você monta objetos como LEGO, combinando peças de forma livre. Com herança você fica preso a uma hierarquia rígida.
";

$testes = [
    "carroEsportivo" => [
        "Marca: Ferrari, Modelo: F8, Ano: 2023",
        "Motor: gasolina, 720cv, 3900 cilindradas",
        "Transmissão: automatica, 8 marchas",
        "Rodas: aro 20, carbono, 4 rodas",
        "Som: Bang & Olufsen, 1200W, bluetooth true",
    ],
    "carroPopular" => [
        "Marca: Fiat, Modelo: Uno, Ano: 2015",
        "Motor: gasolina, 75cv, 1000 cilindradas",
        "Transmissão: manual, 5 marchas",
        "Rodas: aro 14, ferro, 4 rodas",
        "Sem som",
    ],
    "carroEletrico" => [
        "Marca: Tesla, Modelo: Model 3, Ano: 2024",
        "Motor: eletrico, 350cv, 0 cilindradas",
        "Transmissão: cvt, 1 marcha",
        "Rodas: aro 19, liga-leve, 4 rodas",
        "Som: Tesla Audio, 560W, bluetooth true",
    ],
    "Exiba especificações completas",
    "Ligue o motor",
    "Acelere",
    "Troque marcha (manual ou automático)",
    "Toque uma música (se tiver som)",
    "Freie",
    "Desligue",
];

echo str_pad("  Composição vs Herança  ", 50, "=-", STR_PAD_BOTH) . PHP_EOL;

$carroEsportivo = new CarroBase(
    "Ferrari",
    "F8",
    2023,
    new Motor(TipoMotor::Gasolina, 720, 3900),
    new Transmissao(TipoTransmissao::Automatico, 8),
    new Rodas(20, TipoRodas::Carbono, 4),
    new SistemaSom("Bang & Olufsen", "1200W", true)
);

$carroPopular = new CarroBase(
    "Fiat",
    "Uno",
    2015,
    new Motor(TipoMotor::Gasolina, 75, 1000),
    new Transmissao(TipoTransmissao::Manual, 5),
    new Rodas(14, TipoRodas::Ferro, 4),
    null
);

$carroEletrico = new CarroBase(
    "Tesla",
    "Model 3",
    2024,
    new Motor(TipoMotor::Eletrico, 350, 0),
    new Transmissao(TipoTransmissao::CVT, 1),
    new Rodas(19, TipoRodas::LigaLeve, 4),
    new SistemaSom("Tesla Audio", "560W", true)
);

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->info());
dump($carroPopular->info());
dump($carroEletrico->info());

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->ligar());
dump($carroPopular->ligar());
dump($carroEletrico->ligar());

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->trocarMarcha(5));
dump($carroPopular->trocarMarcha(1));
dump($carroPopular->trocarMarcha(7));
dump($carroEletrico->trocarMarcha(2));

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->tocarMusica("Fur Elise"));
dump($carroPopular->tocarMusica("Garota de Ipanema"));
dump($carroEletrico->tocarMusica("Bohemian Rhapsody"));

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->frear());
dump($carroPopular->frear());
dump($carroEletrico->frear());

echo str_repeat("=", 50) . PHP_EOL;

dump($carroEsportivo->desligar());
dump($carroPopular->desligar());
dump($carroEletrico->desligar());
