<?php
require __DIR__."/../../vendor/autoload.php";
//namespace Alertas\Seeders;

$pdo = new \PDO('sqlite:' . __DIR__ . '/../alertas.sqlite');

$seeders = [
    new  Alertas\Seeders\DestinatarioSeeder(),
];

foreach ($seeders as $seeder) {
    $seeder->run($pdo);
}

echo "Seeding complete.\n";
