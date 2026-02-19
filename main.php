<?php

use src\classes\BluRay;
use src\classes\MP3;
use src\enums\MidiaFisicaCondicao;
use src\enums\ResolucaoBluRay;

$bluray = new BluRay(
    'Vingadores: Guerra Infinita',
    181,
    '2018',
    MidiaFisicaCondicao::Usada,
    ResolucaoBluRay::UltraHD,
    [
        "DTS-HD Master Audio 7.1",
        "Dolby TrueHD",
        "Dolby Atmos",
        "DTS:X"
    ],
);

dump($bluray->informacoes());
dump($bluray->reproduzir());
dump($bluray->calcularValorRevenda());

$mp3 = new MP3(
    titulo: 'Bohemian Rhapsody',
    duracao: 6,
    ano: '1975',
    formato: 'mp3',
    artista: 'Queen',
    album: 'A Night at the Opera',
    bitrate: 320,
    tamanhoMB: 2048
);

dump($mp3->reproduzir());
dump($mp3->informacoes());
dump("Tempo de download com 100Mbps: {$mp3->calcularTempoDownload(100)} segundos");
