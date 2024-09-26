<?php

require __DIR__.'/../vendor/autoload.php';

$aC = new Alertas\Controller\AlertaController();
$cC = new Alertas\Controller\ChamadoController();

try{
    $aC->enviarMensagemParaTodos($cC->report());
}catch(\TelegramBot\Api\InvalidArgumentException $exception){
    echo $exception->getMessage();
    echo "\n\nA exceção foi lançada acima pois algum dos destinatários não iniciou uma conversa com o bot.";
}