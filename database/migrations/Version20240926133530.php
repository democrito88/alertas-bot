<?php

declare(strict_types=1);

namespace Alertas\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240926133530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $table = $schema->createTable('falsos_chamados');
        $table->addColumn('id', 'integer');
        $table->addColumn('responsavel', 'string');
        $table->addColumn('abertura', 'date');
        $table->addColumn('titulo', 'string');
        $table->addColumn('descricao', 'string');
        $table->addColumn('status', 'integer');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable("falsos_chamados");
    }
}
