<?php

namespace src\classes;

use src\interfaces\TrabalhavelInterface;

class Voluntario implements TrabalhavelInterface
{
    public function __construct(public string $nome, public string $causa) {}

    public function trabalhar(): string
    {
        return "Trabalhando voluntariamente para {$this->causa}";
    }
}
