<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219184642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur_portable CHANGE ram_freq ram_freq VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE sous_categorie_id sous_categorie_id INT NOT NULL, CHANGE prix prix VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE unite_central CHANGE proc_freq proc_freq NUMERIC(4, 2) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur_portable CHANGE ram_freq ram_freq NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE sous_categorie_id sous_categorie_id INT DEFAULT NULL, CHANGE prix prix NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE unite_central CHANGE proc_freq proc_freq NUMERIC(10, 2) NOT NULL');
    }
}
