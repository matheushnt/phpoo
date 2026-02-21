<?php

namespace src\classes;

class Moderador extends UsuarioAbstrato
{
    public function __construct(string $nome, string $email, string $senha, private string $setor)
    {
        parent::__construct($nome, $email, $senha);
    }
    public function permissoes(): array
    {
        return  ["editar_conteudo", "banir_usuario", "responder_denuncia"];
    }
}
