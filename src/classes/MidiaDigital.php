<?php

namespace src\classes;

abstract class MidiaDigital extends Midia
{
    protected string $tamanhoMB;
    protected string $formato;

    public function __construct(string $titulo, int $duracao, string $ano, string $tamanhoMB, string $formato)
    {
        parent::__construct($titulo, $duracao, $ano);
        $this->tamanhoMB = $tamanhoMB;
        $this->formato = $formato;
    }

    abstract public function calcularTempoDownload(int $velocidadeMbps): int;

    public function tamanhoFormatado(): string
    {
        $tamanho = $this->tamanhoMB;

        if ($this->tamanhoMB > 1024) {
            $tamanho /= 1024;
        }

        return round($tamanho, 2) . 'GB';
    }
}
