<?php

namespace Alertas\Entity;

use Doctrine\ORM\Mapping\{
    Entity,
    Id,
    GeneratedValue,
    Column,
    Table
};

#[Entity]
#[Table(name: "destinatarios")]
class Destinatario{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[Column]
    private string $nome;

    #[Column]
    private string $telegram_id;

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;    
    }

    public function getTelegramId() : string 
    {
        return $this->telegram_id;
    }

    public function settelegramId(string $telegram_id) : void 
    {
        $this->telegram_id = $telegram_id;
    }
}