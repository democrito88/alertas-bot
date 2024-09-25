<?php

require __DIR__.'/../vendor/autoload.php';

$aC = new Alertas\Controller\AlertaController();
$aC->enviarMensagemParaTodos($argv[1]);