<?php

namespace src\classes;

class MP3 extends MidiaDigital
{
    public function __construct(
        string $titulo,
        int $duracao,
        string $ano,
        int $tamanhoMB,
        string $formato,
        private string $artista,
        private string $album,
        private int $bitrate,
    ) {
        parent::__construct($titulo, $duracao, $ano, $tamanhoMB, $formato);
    }

    public function calcularTempoDownload(int $velocidadeMbps): int
    {
        $velocidadeMBs = $velocidadeMbps / 8;
        $tempoEmSegundos = $this->tamanhoMB / $velocidadeMBs;

        return (int) round($tempoEmSegundos);
    }

    public function reproduzir(): string
    {
        return "♪ Tocando: {$this->artista} - {$this->titulo}";
    }

    public function informacoes(): string
    {
        return "
            [MP3 {$this->bitrate}kbps] {$this->titulo}
            Artista: {$this->artista}
            Álbum: {$this->album}
            Duração: {$this->duracaoFormatada()}
            Tamanho: {$this->tamanhoFormatado()}
        ";
    }
}
