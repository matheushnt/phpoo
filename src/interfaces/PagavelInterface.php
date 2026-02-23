<?php

namespace src\interfaces;

interface PagavelInterface
{
    public function valor(): float;
    public function pagar(): bool;
}
