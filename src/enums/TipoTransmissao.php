<?php

namespace src\enums;

enum TipoTransmissao: string
{
    case Manual = 'manual';
    case Automatico = 'automatica';
    case CVT = 'cvt';
}
