<?php

namespace Alertas\Controller;

use Alertas\Entity\Chamado;
use DateTime;

class ChamadoController extends Controller{
    
    public function __construct()
    {
        parent::__construct(Chamado::class);
    }

    public function findOpened(): array
    {
        return $this->repository->findBy(['status' => 1]);
    }

    public function findClosed(): array
    {
        return $this->repository->findBy(['status' => 2]);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function report(): string
    {
        $answer = " Relatório de chamados abertos GLPI - ".(new DateTime())->format('d/m/Y')."\n";
        $unclosed = $this->findOpened();
        
        if(count($unclosed) > 0){
            foreach($unclosed as $chamado){
                $answer .= "\n".$chamado->getAbertura()." - ".$chamado->getTitulo()." atribuido a ".$chamado->getResponsavel();
            }
            return $answer;
        }

        $answer .= "\nTodos os chamados foram fechados.";
        return $answer;
    }
}