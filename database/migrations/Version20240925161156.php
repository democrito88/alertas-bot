<?php

declare(strict_types=1);

namespace Alertas\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240925161156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $table = $schema->createTable('destinatarios');
        $table->addColumn('id', 'integer');
        $table->addColumn('nome', 'string');
        $table->addColumn('telegram_id', 'string');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('destinatarios');
    }
}
