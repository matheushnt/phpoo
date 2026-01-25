<?php

namespace src\classes;

use DateTime;
use DomainException;

class PagamentoCartao extends ProcessadorPagamento
{
    protected string $numeroCartao;
    protected string $cvv;
    protected DateTime $validade;
    protected float $valor;


    public function __construct(string $numeroCartao, string $cvv, string $validade, float $valor)
    {
        $this->numeroCartao = $numeroCartao;
        $this->cvv = $cvv;
        $this->validade = DateTime::createFromFormat('m/Y', $validade);
        $this->valor = $valor;
    }


    protected function validar(): bool
    {
        if (strlen($this->numeroCartao) !== 16) {
            throw new DomainException('Número inválido do cartão');
        }

        if (strlen($this->cvv) !== 3) {
            throw new DomainException('CVV inválido');
        }

        if ($this->validade <= $this->dataAtual()) {
            throw new DomainException('Data de validade é inferior ou igual a data atual');
        }

        return true;
    }

    protected function executar(): bool
    {
        return $this->valor < 1000;
    }

    protected function confirmar(): string
    {
        return 'Pagamento de R$ ' . $this->valor . ' aprovado no cartão com final ' . substr($this->numeroCartao, -4);
    }

    protected function mensagemErroExecucao(): string
    {
        return 'Pagamento recusado: Valor acima do limite permitido';
    }
}
