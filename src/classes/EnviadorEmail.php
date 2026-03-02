<?php

namespace src\classes;

class EnviadorEmail
{
    public function __construct(private string $servidorSMTP, private int $porta, private string $usuario) {}

    public function enviar(string $destinatario, ?string $assunto, ?string $mensagem): bool
    {
        if (empty($destinatario)) {
            return false;
        }

        echo "[Email via {$this->servidorSMTP}:{$this->porta}] Enviando para {$destinatario}" . PHP_EOL;
        echo "Assunto: {$assunto}" . PHP_EOL;
        echo "Mensagem: {$mensagem}" . PHP_EOL;

        return true;
    }
}
