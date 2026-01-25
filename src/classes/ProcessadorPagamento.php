<?php

namespace src\classes;

use DateTime;
use DomainException;

abstract class ProcessadorPagamento
{
    abstract protected function validar(): bool;
    abstract protected function executar(): bool;
    abstract protected function confirmar(): string;
    abstract protected function mensagemErroExecucao(): string;

    final public function processar(): string
    {
        try {

            $this->validar();

            if (!$this->executar()) {
                return $this->mensagemErroExecucao();
            }

            return $this->confirmar();
        } catch (DomainException $e) {
            return 'Pagamento recusado: ' . $e->getMessage();
        }
    }

    protected function dataAtual(): DateTime
    {
        return DateTime::createFromFormat('m/Y', date('m/Y'));
    }
}
