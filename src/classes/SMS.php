<?php

namespace src\classes;

use DomainException;

class SMS extends Notificacao
{
    protected string $numeroTelefone;
    protected string $mensagem;

    public function __construct(string $numeroTelefone, string $mensagem)
    {
        if (strlen($mensagem) > 160) {
            throw new DomainException('A mensagem deve conter até 160 caracteres');
        }

        $this->mensagem = $mensagem;
        $this->numeroTelefone = $numeroTelefone;
    }

    public function enviar(): string
    {
        return "SMS enviado para {$this->numeroTelefone}";
    }
}
