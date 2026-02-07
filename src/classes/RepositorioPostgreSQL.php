<?php

namespace src\classes;

class RepositorioPostgreSQL extends RepositorioDados
{
    private array $dados = [];
    private string $tabela;
    private string $conexao = 'postgresql://user:senha@localhost/meubancopg';
    private int $proximoId = 1;

    public function __construct(string $tabela)
    {
        $this->tabela = $tabela;
    }

    public function salvar(array $dados): int
    {
        $dados['criado_em'] = $this->dataHoraAtual();
        $dados['atualizado_em'] = null;
        $this->dados[$this->tabela][$this->proximoId] = $dados;

        $id = $this->proximoId;
        $this->proximoId++;

        echo "[PostgreSQL:{$this->tabela}] INSERT executado - ID: {$id}" . PHP_EOL;
        return $id;
    }

    public function buscar(int $id): array
    {
        echo "[PostgreSQL:{$this->tabela}] SELECT WHERE id={$id}" . PHP_EOL;
        return $this->dados[$this->tabela][$id];
    }

    public function listar(): array
    {
        echo "[PostgreSQL:{$this->tabela}] SELECT * - {$this->quantidade()} registros" . PHP_EOL;
        return $this->dados[$this->tabela];
    }

    public function atualizar(int $id, array $dados): bool
    {
        if (!isset($this->dados[$this->tabela][$id])) {
            return false;
        }

        $dadosAtuais = $this->dados[$this->tabela][$id];
        $dados['atualizado_em'] = $this->dataHoraAtual();
        $result = array_merge($dadosAtuais, $dados);
        $this->dados[$this->tabela][$id] = $result;

        echo "[PostgreSQL:{$this->tabela}] UPDATE WHERE id={$id}" . PHP_EOL;

        return true;
    }

    public function deletar(int $id): bool
    {
        if (!isset($this->dados[$this->tabela][$id])) {
            return false;
        }

        unset($this->dados[$this->tabela][$id]);
        echo "[PostgreSQL:{$this->tabela}] DELETE WHERE id={$id}" . PHP_EOL;

        return true;
    }

    private function quantidade(): int
    {
        return count($this->dados[$this->tabela]);
    }
}
