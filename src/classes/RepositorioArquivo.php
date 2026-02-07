<?php

namespace src\classes;

class RepositorioArquivo extends RepositorioDados
{
    private string $caminho;
    private array $dados;
    private int $contador = 1;

    public function __construct(string $caminho)
    {
        $this->caminho = $caminho;
        $this->dados = [];
    }

    public function salvar(array $dados): int
    {
        $dados['salvado_em'] = $this->dataHoraAtual();
        $id = $this->contador;
        $this->dados[$this->contador] = $dados;
        $this->contador++;

        return $id;
    }

    public function buscar(int $id): array
    {
        return $this->dados[$id];
    }

    public function listar(): array
    {
        return $this->dados;
    }

    public function atualizar(int $id, array $dados): bool
    {
        if (!isset($this->dados[$id])) {
            return false;
        }

        $dadosAtuais = $this->dados[$id];
        $result = array_merge($dadosAtuais, $dados);
        $result['salvado_em'] = $this->dataHoraAtual();
        $this->dados[$id] = $result;

        return true;
    }

    public function deletar(int $id): bool
    {
        if (!isset($this->dados[$id])) {
            return false;
        }

        unset($this->dados[$id]);

        return true;
    }
}
