<?php

namespace src\classes;

abstract class Documento
{
    protected string $titulo;
    protected string $autor;
    protected string $dataCriacao;
    protected string $status;
    protected const string FORMATO_DATA = 'm/Y';

    public function __construct(string $titulo, string $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->dataCriacao = date('m/Y');
        $this->status = 'rascunho';
    }

    public function publicar(): bool
    {
        if (count($this->validar()) > 0) {
            return false;
        }

        $this->status = 'publicado';

        return true;
    }

    public function dataAtual(): \DateTime
    {
        return \DateTime::createFromFormat('m/Y', date('m/Y'));
    }

    abstract protected function validar(): array;
    abstract public function gerarConteudo(): string;
}
