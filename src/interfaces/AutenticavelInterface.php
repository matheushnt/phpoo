<?php

namespace src\interfaces;

interface AutenticavelInterface
{
    public function login(string $email, string $senha): bool;
    public function logout(): void;
    public function autenticado(): bool;
    public function encriptarSenha(string $senha): ?string;
}
