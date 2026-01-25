<?php

namespace src\classes;

class Email extends Notificacao
{
    protected string $destinatario;
    protected string $assunto;
    protected string $corpo;

    public function __construct(string $destinatario, string $assunto, string $corpo)
    {
        $this->destinatario = $destinatario;
        $this->assunto = $assunto;
        $this->corpo = $corpo;
    }

    public function enviar(): string
    {
        return "Email enviado para {$this->destinatario} - Assunto: {$this->assunto}";
    }
}
