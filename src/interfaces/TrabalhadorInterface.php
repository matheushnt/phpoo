<?php

namespace src\interfaces;

use src\enums\BatidaPonto;

// Essa interface faz coisas demais. Classes que a implementarem terão que declarar funções desnecessárias
// Seria interessante criar interfaces específicas que serão implementadas por classes  que de fato utilizarão seus métodos

interface TrabalhadorInterface
{
    public function trabalhar(): string;
    public function receberSalario(): float;
    public function tirarFerias(): string;
    public function baterPonto(): BatidaPonto;
    public function receberValeTransporte(): string;
}
