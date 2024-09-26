<?php

namespace Alertas\Entity;

use DateTime;
use Doctrine\ORM\Mapping\{
    Column,
    Entity,
    GeneratedValue,
    Id,
    Table
};

#[Entity()]
#[Table(name:"falsos_chamados")]
class Chamado{
    #[Id, Column, GeneratedValue]
    private int $id;

    #[Column]
    private string $responsavel;

    #[Column]
    private DateTime $abertura;

    #[Column]
    private string $titulo;

    #[Column]
    private string $descricao;

    #[Column]
    private int $status;

    public function getId()
    {
        return $this->id;
    }

    public function getResponsavel()
    {
        return $this->responsavel;
    }

    public function getAbertura()
    {
        return $this->abertura->format('d/m/Y');
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getStatus()
    {
        return $this->status;
    }
}