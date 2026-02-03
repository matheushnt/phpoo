<?php

namespace src\classes;

class Relatorio extends Documento
{
    private string $periodo;
    private array $dados;
    private string $conclusao;

    public function __construct(string $titulo, string $autor, string $periodo, array $dados, string $conclusao)
    {
        parent::__construct($titulo, $autor);
        $this->periodo = $periodo;
        $this->dados = $dados;
        $this->conclusao = $conclusao;
    }

    protected function validar(): array
    {
        $erros = [];

        if (empty($this->titulo)) {
            $erros['titulo'] = 'É necessário informar o título.';
        }

        $data = \DateTime::createFromFormat(self::FORMATO_DATA, $this->periodo);
        if (!$data) {
            $erros['periodo'] = 'A data deve ser no formato MM/AAAA.';
        }

        if (count($this->dados) < 1) {
            $erros['dados'] = 'É necessário informar os dados.';
        }

        if (empty($this->conclusao)) {
            $erros['conclusao'] = 'É necessário informar a conclusão.';
        }

        return $erros;
    }

    public function gerarConteudo(): string
    {
        $quantidadeDados = count($this->dados);
        return "
            RELATÓRIO: {$this->titulo}
            Autor: {$this->autor}
            Período: {$this->periodo}

            Dados analisados: {$quantidadeDados}

            Conclusão: {$this->conclusao}
        ";
    }
}
