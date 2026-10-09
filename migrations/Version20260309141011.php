<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260309141011 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
// cette migration up() est auto-générée, veuillez la modifier selon vos besoins
        $this->addSql('ALTER TABLE users ADD secret_pin VARCHAR(4) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
// cette migration down() est auto-générée, veuillez la modifier selon vos besoins
        $this->addSql('ALTER TABLE users DROP secret_pin');
    }
}
