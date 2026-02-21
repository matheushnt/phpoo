<?php

namespace src\classes;

class Admin extends UsuarioAbstrato
{
    public function permissoes(): array
    {
        return ["criar_usuario", "deletar_usuario", "editar_configuracoes", "visualizar_logs", "gerenciar_sistema"];
    }
}
