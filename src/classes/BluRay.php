<?php

namespace src\classes;

use src\enums\MidiaFisicaCondicao;
use src\enums\ResolucaoBluRay;

class BluRay extends MidiaFisica
{
    private const float PRECO_BASE = 40.0;

    public function __construct(
        string $titulo,
        int $duracao,
        string $ano,
        MidiaFisicaCondicao $condicao,
        private ResolucaoBluRay $resolucao,
        private array $formatos,
    ) {
        parent::__construct($titulo, $duracao, $ano, $condicao);
    }

    public function calcularValorRevenda(): float
    {
        $resolucao = match ($this->resolucao) {
            ResolucaoBluRay::UltraHD => 2,
            ResolucaoBluRay::FullHD => 1.2,
        };

        $condicao = match ($this->condicao) {
            MidiaFisicaCondicao::Nova => 1.5,
            MidiaFisicaCondicao::Usada => 0.7,
            MidiaFisicaCondicao::Danificada => 0.3,
        };

        return self::PRECO_BASE * $resolucao * $condicao;
    }

    public function informacoes(): string
    {
        return "
            [BLU-RAY {$this->resolucao->value}] {$this->titulo}
            Ano: {$this->ano}
            Duração: {$this->duracaoFormatada()}
            Condição: {$this->avaliarCondicao()}
            Áudio: {$this->formatosDisponiveis()}
        ";
    }

    public function reproduzir(): string
    {
        return "Reproduzindo DVD: {$this->titulo} ({$this->ano})" . PHP_EOL;
    }

    private function formatosDisponiveis(): string
    {
        $formatosDisponiveis = '';
        foreach ($this->formatos as $formato) {
            $formatosDisponiveis .= strtoupper($formato) . '; ';
        }

        return $formatosDisponiveis;
    }
}
