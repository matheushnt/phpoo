<?php

namespace src\classes;

abstract class Notificacao
{
    abstract public function enviar(): string;
}
