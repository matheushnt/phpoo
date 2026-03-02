<?php

use src\classes\EnviadorEmail;
use src\classes\NotificadorUsuario;

$objetivo = "
    Entender que classes não devem CRIAR suas dependências, devem RECEBÊ-LAS. Isso é
    Injeção de Dependência - a base da programação desacoplada e testável.
";


$testes = [
    "enviadorEmail" => [
        "servidorSMTP" => "smtp.gmail.com",
        "porta" => 587,
        "usuario" => "sistema@empresa.com"
    ],
    "notificacoes" => [
        [
            "tipo" => "cadastro",
            "nomeUsuario" => "João Silva",
            "email" => "joao@email.com"
        ],
        [
            "tipo" => "compra",
            "nomeUsuario" => "Maria Santos",
            "email" => "maria@email.com",
            "valor" => 150.00
        ],
        [
            "tipo" => "recuperacao_senha",
            "email" => "ana@email.com",
            "token" => "ABC123XYZ"
        ]
    ]
];

echo str_pad("  Injeção de Dependência Básica  ", 50, "=-", STR_PAD_BOTH) . PHP_EOL;
echo str_repeat("=", 50) . PHP_EOL;

$enviadorEmail = new EnviadorEmail("smtp.gmail.com", 587, "sistema@empresa.com");
$notificador = new NotificadorUsuario($enviadorEmail);

dump($notificador->notificarCadastro("João Silva", "joao@email.com"));
dump($notificador->notificarCompra("Maria Santos", "maria@email.com", 150.00));
dump($notificador->notificarRecuperacaoSenha("ana@email.com", "ABC123XYZ"));
