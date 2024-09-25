<?php
namespace Alertas\Seeders;

class DestinatarioSeeder {
    public function run($pdo) {
        // Insert some example users
        $pdo->exec("
            INSERT INTO destinatarios (id,nome, telegram_id) VALUES
            (1,'John Doe', '6851253204'),
            (2,'John Doe', '611639279');
        ");
    }
}
