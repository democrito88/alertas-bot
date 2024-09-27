<?php

namespace Alertas\Entity;

use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\{
    Entity,
    Id,
    GeneratedValue,
    Column,
    OneToMany,
    Table
};

#[Entity()]
#[Table(name:"alertas")]
class Alerta{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[Column]
    private string $mensagem;

    #[Column]
    private DateTime $envio;

    #[OneToMany(
        mappedBy: "destinatarios",
        targetEntity: Destinatario::class,
        cascade: ["persist", "remove"]
    )]
    private Collection $destinatarios;

    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function getEnvio(): DateTime
    {
        return $this->envio;
    }

    public function setEnvio(string $envio)
    {
        $this->envio = $envio;
    }

    public function getDestinatarios() : Collection {
        return $this->destinatarios;
    }
}
