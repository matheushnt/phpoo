<?php

namespace src\executores;

use src\enums\PagamentoStatus;
use src\interfaces\PagavelInterface;

class ExecutorPagamento
{
    public function __construct(private PagavelInterface $pagamento,) {}

    public function executar(): PagamentoStatus
    {
        return $this->pagamento->pagar()
            ? PagamentoStatus::Pago
            : PagamentoStatus::NaoPago;
    }
}
