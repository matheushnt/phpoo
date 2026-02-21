<?php

use src\classes\Admin;
use src\classes\Cliente;
use src\classes\Moderador;

$objetivo = "
    Objetivo: Entender que interfaces definem O QUE fazer (contrato)
    e classes abstratas podem fornecer COMO fazer (implementação padrão),
    além de forçar subclasses a implementar comportamentos específicos.
";

$testes = [
    "Faça login com credenciais corretas",
    "Exiba as permissões",
    "Verifique se está autenticado",
    "Faça logout",
    "Tente fazer login com senha errada",
];

echo str_pad(" Interface vs Classe Abstrata ", 50, "=-", STR_PAD_BOTH) . PHP_EOL;

$admin = new Admin("João", "admin@mail.com", "Admin@123",);
$cliente = new Cliente("Jean", "cliente@mail.com", "Cliente@123", "123.456.789-10");
$moderador = new Moderador("Jonas", "moderador@mail.com", "Moderador@123", "Suporte");

dump($admin->login("admin@mail.com", "Admin@123"));
dump($cliente->login("cliente@mail.com", "Cliente@123"));
dump($moderador->login("moderador@mail.com", "Moderador@123"));

echo str_repeat("=", 50) . PHP_EOL;

dump($admin->permissoes());
dump($cliente->permissoes());
dump($moderador->permissoes());

echo str_repeat("=", 50) . PHP_EOL;

dump($admin->autenticado());
dump($cliente->autenticado());
dump($moderador->autenticado());

echo str_repeat("=", 50) . PHP_EOL;

dump($admin->logout());
dump($cliente->logout());
dump($moderador->logout());

echo str_repeat("=", 50) . PHP_EOL;

dump($admin->login("admin@mail.com", "Errado@123"));
dump($cliente->login("cliente@mail.com", "Errado@123"));
dump($moderador->login("moderador@mail.com", "Errado@123"));
