<?php

namespace src\classes;

/*
Crie uma classe ContaBancaria com propriedades titular e saldo. Adicione
métodos depositar($valor) e sacar($valor). O saldo inicial deve ser 0.
*/

class ContaBancaria
{
    public string $titular;
    private float $saldo = 0.0;

    public function __construct(string $titular, float $saldo = 0.0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string
    {
        if ($valor <= 0) {
            return 'O depósito deve ser acima de zero';
        }

        $this->saldo += $valor;

        return 'Depósito de ' . $valor . ' realizado com sucesso';
    }

    public function sacar(float $valor): string | float
    {
        if ($valor > $this->saldo) {
            return 'Valor de saque maior do que saldo atual';
        }

        $this->saldo -= $valor;

        return $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function dados(): array
    {
        return [
            'titular' => $this->titular,
            'saldo' => $this->saldo,
        ];
    }
}
