<?php

namespace src\classes;

class Cliente extends UsuarioAbstrato
{
    public function __construct(string $nome, string $email, string $senha, private string $cpf)
    {
        parent::__construct($nome, $email, $senha);
    }

    public function permissoes(): array
    {
        return ["visualizar_produtos", "fazer_pedido", "visualizar_historico"];
    }
}
