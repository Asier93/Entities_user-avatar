<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322141131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avatars ADD COLUMN description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__avatars AS SELECT id, character, url FROM avatars');
        $this->addSql('DROP TABLE avatars');
        $this->addSql('CREATE TABLE avatars (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, character VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO avatars (id, character, url) SELECT id, character, url FROM __temp__avatars');
        $this->addSql('DROP TABLE __temp__avatars');
    }
}
