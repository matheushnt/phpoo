<?php

namespace src\classes;

class Contrato extends Documento
{

    protected array $partes;
    protected int $valor;
    protected string $prazo;
    protected array $clausulas;

    public function __construct(string $titulo, string $autor, array $partes, int $valor, string $prazo, array $clausulas)
    {
        parent::__construct($titulo, $autor);
        $this->partes = $partes;
        $this->valor = $valor;
        $this->prazo = $prazo;
        $this->clausulas = $clausulas;
    }

    protected function validar(): array
    {
        $erros = [];

        if (empty($this->titulo)) {
            $erros['titulo'] = 'É necessário informar o título.';
        }

        $prazo = \DateTime::createFromFormat(self::FORMATO_DATA, $this->prazo);
        if (!$prazo) {
            $erros['prazo'] = 'O prazo deve ser no formato MM/AAAA.';
        }

        if ($prazo < $this->dataAtual()) {
            $erros['prazo'] = 'Prazo deve ser uma data futura.';
        }

        if ($this->valor < 1) {
            $erros['valor'] = 'Valor deve ser maior que 0.';
        }

        if (count($this->partes) !== 2) {
            $erros['partes'] = 'Deve ter exatamente duas partes.';
        }

        if (count($this->clausulas) < 3) {
            $erros['clausulas'] = 'Deve ter exatamente três cláusulas.';
        }

        return $erros;
    }

    public function gerarConteudo(): string
    {
        $conteudo = "
        CONTRATO: {$this->titulo}

        CONTRATANTE: {$this->partes[0]}
        CONTRATADO: {$this->partes[1]}

        VALOR: R$ {$this->valor}
        PRAZO: {$this->prazo}

        CLÁUSULAS:
        ";

        foreach ($this->clausulas as $i => $cl) {
            $c = $i + 1;
            $conteudo .=   (string) $c . '. ' . $cl . PHP_EOL;
        }


        $conteudo .= "
            Elaborado por: {$this->autor}
            Data: {$this->dataCriacao}
        ";

        return $conteudo;
    }
}
