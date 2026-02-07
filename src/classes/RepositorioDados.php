<?php

namespace src\classes;

abstract class RepositorioDados
{
    abstract public function salvar(array $dados): int;
    abstract public function buscar(int $id): array;
    abstract public function listar(): array;
    abstract public function atualizar(int $id, array $dados): bool;
    abstract public function deletar(int $id): bool;

    protected function dataHoraAtual(): string
    {
        return date('Y-m-d H:i:s');
    }
}
