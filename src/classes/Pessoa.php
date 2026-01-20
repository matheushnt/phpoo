<?php

namespace src\classes;

use ValueError;

class Pessoa
{
    public string $nome;
    protected string $cpf;

    public function __construct(string $nome, string $cpf)
    {

        $this->validarCPF($cpf);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function dados(): array
    {
        return [
            'nome' => $this->nome,
            'cpf' => self::formatarCPF($this->cpf),
        ];
    }

    protected function validarCPF(string $cpf): void
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) !== 11) {
            throw new ValueError('CPF Inválido.');
        }
    }

    public static function formatarCPF(string $cpf): string
    {
        $cpfFormatado = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
        return $cpfFormatado;
    }
}
