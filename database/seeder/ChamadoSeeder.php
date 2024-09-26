<?php
namespace Alertas\Seeders;

class ChamadoSeeder {
    public function run($pdo) {
        // Insert some example users
        $pdo->exec("
            INSERT INTO falsos_chamados (id,responsavel, abertura, titulo, descricao, status) VALUES
            (1,'John Doe', '2024-09-01', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (2,'Jane Doe', '2024-09-02', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 ),
            (3,'John Doe', '2024-09-03', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (4,'John Doe', '2024-09-04', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 ),
            (5,'Jane Doe', '2024-09-05', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (6,'John Doe', '2024-09-06', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 ),
            (7,'Jane Doe', '2024-09-07', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (8,'John Doe', '2024-09-08', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 ),
            (9,'John Doe', '2024-09-09', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (10,'John Doe', '2024-09-10', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 ),
            (11,'Jane Doe', '2024-09-11', 'Sem imprimir', 'impressora sem imprimir no DEF', 1 ),
            (12,'John Doe', '2024-09-12', 'Sem imprimir', 'impressora sem imprimir no DEF', 2 );
        ");
    }
}
