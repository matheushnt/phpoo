<?php

namespace src\classes;

use src\classes\EnviadorEmail;

class NotificadorUsuario
{
    public function __construct(private EnviadorEmail $enviador) {}

    public function notificarCadastro(string $nomeUsuario, string $email): void
    {
        $mensagem = "Bem-vindo, {$nomeUsuario}! Seu cadastro foi realizado com sucesso.";
        $this->enviador->enviar($email, "Cadastro Realizado", $mensagem);
    }

    public function notificarCompra(string $nomeUsuario, string $email, float $valor): void
    {
        $mensagem = "Olá {$nomeUsuario}, sua compra de R$ {$valor} foi confirmada!";
        $this->enviador->enviar($email, "Compra Confirmada", $mensagem);
    }

    public function notificarRecuperacaoSenha(string $email, string $token): void
    {
        $mensagem = "Use este código para recuperar sua senha: {$token}";
        $this->enviador->enviar($email, "Recuperação de Senha", $mensagem);
    }
}
