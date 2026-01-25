<?php

namespace src\classes;

use DomainException;

class PagamentoPix extends ProcessadorPagamento
{
    protected string $chavePix;
    protected float $valor;
    private const string REGEX_TEL = '/^(?:\+?55\s?)?(?:\(?\d{2}\)?[\s-]?)?\d{4,5}[\s-]?\d{4}$/';
    private const string REGEX_CPF = '/^(\d{3})[\s.-]?(\d{3})[\s.-]?(\d{3})[\s.-]?(\d{2})$/';

    public function __construct(string $chavePix, float $valor)
    {
        $this->chavePix = $chavePix;
        $this->valor = $valor;
    }


    protected function validar(): bool
    {
        if (empty($this->chavePix)) {
            throw new DomainException('É necessário informar uma chave PIX');
        }

        $ehTelefone = preg_match(self::REGEX_TEL, $this->chavePix);
        $ehCPF = preg_match(self::REGEX_CPF, $this->chavePix);
        $ehEmail = filter_var($this->chavePix, FILTER_VALIDATE_EMAIL);

        if (!$ehTelefone && !$ehCPF && !$ehEmail) {
            throw new DomainException('Chave PIX inválida');
        }

        return true;
    }

    protected function executar(): bool
    {
        return true;
    }

    protected function confirmar(): string
    {
        return "Pagamento de R$ {$this->valor} realizado via Pix para {$this->chavePix}";
    }

    protected function mensagemErroExecucao(): string
    {
        return 'Pagamento recusado: Saldo insuficiente';
    }
}
