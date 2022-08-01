<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220801183553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cheese_listing ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cheese_listing ADD description TEXT NOT NULL');
        $this->addSql('ALTER TABLE cheese_listing ADD price INT NOT NULL');
        $this->addSql('ALTER TABLE cheese_listing ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cheese_listing ADD is_published BOOLEAN NOT NULL');
        $this->addSql('COMMENT ON COLUMN cheese_listing.created_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cheese_listing DROP title');
        $this->addSql('ALTER TABLE cheese_listing DROP description');
        $this->addSql('ALTER TABLE cheese_listing DROP price');
        $this->addSql('ALTER TABLE cheese_listing DROP created_at');
        $this->addSql('ALTER TABLE cheese_listing DROP is_published');
    }
}
