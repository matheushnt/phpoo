<?php

namespace src\interfaces;

interface PodeTirarFeriasInteface
{
    public function tirarFerias(int $dias): string;
    public function diasFeriasDisponiveis(): int;
}
