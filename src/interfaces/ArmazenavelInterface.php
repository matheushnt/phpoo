<?php

namespace src\interfaces;

interface ArmazenavelInterface
{
    function salvar(): bool;
    function carregar(): array;
}
