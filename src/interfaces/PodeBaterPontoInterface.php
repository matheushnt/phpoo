<?php

namespace src\interfaces;

use src\enums\BatidaPonto;

interface PodeBaterPontoInterface
{
    public function baterPonto(BatidaPonto $batida): string;
    public function horasTrabalhadas(): float;
}
