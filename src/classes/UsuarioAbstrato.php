<?php

namespace src\classes;

use src\interfaces\AutenticavelInterface;

abstract class UsuarioAbstrato implements AutenticavelInterface
{
    protected string $id;
    protected bool $autenticado = false;

    public function __construct(
        protected string $nome,
        protected string $email,
        protected string $senha,
    ) {
        $this->id = uniqid(true);
        $this->encriptarSenha($this->senha);
    }

    abstract public function permissoes(): array;

    public function login(string $email, string $senha): bool
    {
        $this->autenticado = $email === $this->email && password_verify($senha, $this->senha);
        return $this->autenticado;
    }

    public function logout(): void
    {
        $this->autenticado = false;
    }

    public function autenticado(): bool
    {
        return $this->autenticado;
    }

    public function encriptarSenha(string $senha): ?string
    {
        if (strlen($senha) < 8) {
            return null;
        }

        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
        return $this->senha;
    }
}
