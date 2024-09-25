<?php

namespace Alertas\Controller;

use Alertas\Entity\Alerta;
use TelegramBot\Api\BotApi;

class AlertaController extends Controller{
    protected string $telegramBotToken;
    protected int $telegramChatId;
    protected BotApi $botApi;

    protected DestinatarioController $dC;
    
    public function __construct()
    {
        parent::__construct(Alerta::class);
        $this->dC = new DestinatarioController();
        //$this->telegramBotToken = $_ENV['TELEGRAM_BOT_TOKEN'];
        $this->botApi = new BotApi(/*$this->telegramBotToken*/ "7478092355:AAGOuIX9nI4gZ1ejVrR-B-VTguAk6TK_1e8");
        $this->botApi->setCurlOption(CURLOPT_SSL_VERIFYPEER, false);
        $this->botApi->setCurlOption(CURLOPT_SSL_VERIFYHOST, false);
    }

    public function enviarMensagem(string $mensagem, array $idsDestinatarios ) : void
    {
        foreach ($idsDestinatarios as $id) {
            $destinatario = $this->dC->findById($id);
            $this->botApi->sendMessage($destinatario->getTelegramId(), $mensagem);
        }
    }

    public function enviarMensagemParaTodos(string $mensagem) : void
    {
        $destinatarios = $this->dC->repository->findAll();
        foreach ($destinatarios as $destinatario) {
            $this->botApi->sendMessage($destinatario->getTelegramId(), $mensagem);
        }
    }
}