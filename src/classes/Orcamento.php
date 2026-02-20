<?php

namespace src\classes;

use src\interfaces\ArmazenavelInterface;
use src\interfaces\ExportavelInterface;
use src\enums\OrcamentoStatus;

class Orcamento implements ArmazenavelInterface, ExportavelInterface
{
    public function __construct(
        private string $numero,
        private string $cliente,
        private array $itens,
        private float $valorTotal,
        private string $validade,
        private OrcamentoStatus $status,
    ) {}

    public function salvar(): bool
    {
        if ($this->valorTotal <= 0 && count($this->itens) === 0) {
            echo "[Erro] Dados inválidos" . PHP_EOL;
            return false;
        }

        echo "[Armazenamento] Orçamento {$this->numero} salvo no banco" . PHP_EOL;
        return true;
    }

    public function carregar(): array
    {
        echo "[Armazenamento] Carregando orçamento {$this->numero}" . PHP_EOL;
        sleep(2);

        return [
            'numero' => $this->numero,
            'cliente' => $this->cliente,
            'valorTotal' => $this->valorTotal,
            'validade' => $this->validade,
            'status' => $this->status,
        ];
    }

    public function exportarPDF(): ?string
    {
        if ($this->status === OrcamentoStatus::Cancelado) {
            return null;
        }

        echo "[Export] Gerando PDF do orçamento {$this->numero}" . PHP_EOL;
        sleep(2);

        return "/exports/orcamento_{$this->numero}.pdf";
    }

    public function exportarExcel(): ?string
    {
        if (count($this->itens) < 1) {
            return null;
        }

        echo "[Export] Gerando Excel do orçamento {$this->numero}" . PHP_EOL;
        sleep(2);

        return  "/exports/orcamento_{$this->numero}.xlsx";
    }
}
