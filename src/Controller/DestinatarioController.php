<?php

namespace Alertas\Controller;

use Alertas\Entity\Destinatario;

class DestinatarioController extends Controller{
    public function __construct()
    {
        parent::__construct(Destinatario::class);
    }

    public function findById(int $id) : Destinatario 
    {
        return $this->repository->findById($id);
    }
}