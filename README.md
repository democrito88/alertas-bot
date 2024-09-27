# Alertas Bot

Projeto para emitir alertas automáticos via telegram

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Telegram](https://img.shields.io/badge/Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white)
![License](https://img.shields.io/badge/MIT-%23FFFC00.svg?style=for-the-badge)
![Version](https://img.shields.io/badge/v1.0.0-%23009639.svg?style=for-the-badge)

### Uso
Instale as bibliotecas com: 
```composer install```

Configure o Token do robô no **.env**

Execute a migração:
```console migrate```

...O seed:
```console seed```

...e envie a mensagem
```console enviar "sua mensagem"```

Para mensagens que disparam automaticamente, referencie o projeto em um script e aliste-o em uma *crontab*.

### Autor
[Demócrito d'Anunciação](https://github.com/democrito88)