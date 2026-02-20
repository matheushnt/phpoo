<?php

namespace src\enums;

enum OrcamentoStatus
{
    case Rascunho;
    case Enviad;
    case EmAnalise;
    case Aprovado;
    case Rejeitado;
    case Expirado;
    case Cancelado;
}
