<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230316071653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT UNSIGNED AUTO_INCREMENT NOT NULL, type SMALLINT UNSIGNED NOT NULL, name VARCHAR(50) NOT NULL, can_swim TINYINT(1) DEFAULT 0 NOT NULL, can_walk TINYINT(1) DEFAULT 0 NOT NULL, can_fly TINYINT(1) DEFAULT 0 NOT NULL, is_dangerous TINYINT(1) DEFAULT 0 NOT NULL, weight INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE animal');
    }
}
