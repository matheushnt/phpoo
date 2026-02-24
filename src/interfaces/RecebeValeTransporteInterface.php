<?php

namespace src\interfaces;

interface RecebeValeTransporteInterface
{
    public function calcularValeTransporte(): float;
    public function receberValeTransporte(): string;
}
