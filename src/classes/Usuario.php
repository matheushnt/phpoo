<?php

namespace src\classes;

use DomainException;

class Usuario
{
    public function __construct(private string $nome, private int $idade, private string $email,)
    {
        $this->validarIdade($idade);
        $this->validarEmail($email);
    }

    private function validarIdade(int $idade): void
    {
        // $idade < 18 || $idade > 120
        if (!filter_var($idade, FILTER_VALIDATE_INT, ['options' => ['min_range' => 18, 'max_range' => 120]])) {
            throw new DomainException('A idade deve estar entre os valores 18 e 120.');
        }

        $this->idade = $idade;
    }

    private function validarEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new DomainException('O email é inválido.');
        }

        $this->email = $email;
    }

    public function dados(): array
    {
        return [
            'nome' => $this->nome,
            'idade' => $this->idade,
            'email' => $this->email,
        ];
    }
}
