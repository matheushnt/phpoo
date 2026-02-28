<?php

namespace src\classes;

class CarroBase
{

    public function __construct(
        private string $marca,
        private string $modelo,
        private int $ano,
        private Motor $motor,
        private Transmissao $transmissao,
        private Rodas $rodas,
        private ?SistemaSom $sistemaSom,
    ) {}

    public function ligar(): string
    {
        return $this->motor->ligar();
    }

    public function desligar(): string
    {
        return $this->motor->desligar();
    }

    public function acelerar(): string
    {
        return $this->motor->acelerar();
    }

    public function trocarMarcha(int $marcha): string
    {
        return $this->transmissao->trocarMarcha($marcha);
    }

    public function frear(): string
    {
        return $this->rodas->frear();
    }

    public function tocarMusica(string $musica): string
    {
        if ($this->sistemaSom) {
            return $this->sistemaSom->tocar($musica);
        }

        return "Este carro não possui sistema de som.";
    }

    public function info(): array
    {
        return [
            "carro" => " {$this->marca} {$this->modelo} ({$this->ano})",
            "motor" => "{$this->motor->tipo->value} {$this->motor->potencia}cv",
            "transmissao" => "{$this->transmissao->tipo->value} {$this->transmissao->marchas} marchas",
            "rodas" => "Aro {$this->rodas->aro} {$this->rodas->tipo->value}",
            "Som" => $this->sistemaSom
                ? "{$this->sistemaSom->marca} {$this->sistemaSom->potencia}W Bluetooth: " . ($this->sistemaSom->bluetooth ? "Sim" : "Não")
                : "Sem som",
        ];
    }
}
