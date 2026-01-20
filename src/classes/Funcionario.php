<?php

namespace src\classes;

class Funcionario extends Pessoa
{
    private float $salario;
    private string $cargo;

    public function __construct(float $salario, string $cargo, string $nome, string $cpf)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function dados(): array
    {
        return [
            'nome' => $this->nome,
            'cpf' => self::formatarCPF($this->cpf),
            'cargo' => $this->cargo,
            'salario' => $this->salario,
        ];
    }
}
