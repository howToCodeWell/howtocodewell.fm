<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211010141542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE episode (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, external_id VARCHAR(255) NOT NULL, show_number INTEGER NOT NULL, season INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, file_url CLOB NOT NULL, link CLOB NOT NULL, duration INTEGER NOT NULL, published_date DATETIME NOT NULL, created_date DATETIME NOT NULL, updated_date DATETIME DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE episode');
    }
}
