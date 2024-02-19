<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219181440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, lib VARCHAR(60) NOT NULL, description LONGTEXT DEFAULT NULL, photo LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, suivi VARCHAR(50) NOT NULL, date DATE NOT NULL, INDEX IDX_6EEAA67DFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE console_gaming (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, port_usb INT NOT NULL, port_hdmi INT NOT NULL, disque_dur INT NOT NULL, resolution VARCHAR(50) NOT NULL, fps INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, objet VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contient (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, facture_id INT NOT NULL, quant INT NOT NULL, pu NUMERIC(10, 2) NOT NULL, pu_ht NUMERIC(10, 2) NOT NULL, sold INT NOT NULL, INDEX IDX_DC302E56F347EFB (produit_id), INDEX IDX_DC302E567F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enceinte (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, puissance INT NOT NULL, alimentation VARCHAR(20) NOT NULL, wifi VARCHAR(10) NOT NULL, bluetooth VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, tot_ttc NUMERIC(10, 2) NOT NULL, tot_prix_ht NUMERIC(10, 2) NOT NULL, date DATE NOT NULL, adresse VARCHAR(100) NOT NULL, tva NUMERIC(10, 2) NOT NULL, INDEX IDX_FE86641082EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, ref VARCHAR(30) NOT NULL, nom VARCHAR(30) NOT NULL, adresse VARCHAR(100) NOT NULL, ville VARCHAR(50) NOT NULL, cp VARCHAR(5) NOT NULL, email VARCHAR(50) NOT NULL, tel VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imprimante (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, vit VARCHAR(50) NOT NULL, qualiter VARCHAR(50) NOT NULL, qualiter_photo VARCHAR(50) NOT NULL, format VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, adresse VARCHAR(100) NOT NULL, date DATE NOT NULL, status VARCHAR(50) NOT NULL, INDEX IDX_A60C9F1F82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordinateur_portable (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, resolution VARCHAR(50) NOT NULL, webcam VARCHAR(10) NOT NULL, proc VARCHAR(60) NOT NULL, proc_freq NUMERIC(10, 2) NOT NULL, proc_nbr_coeur INT NOT NULL, ram INT NOT NULL, ram_freq VARCHAR(50) NOT NULL, cg_modele VARCHAR(50) NOT NULL, stkage INT NOT NULL, type_stkage VARCHAR(20) NOT NULL, wifi VARCHAR(10) NOT NULL, bluetooth VARCHAR(10) NOT NULL, port_usb INT NOT NULL, port_hdmi INT NOT NULL, sys_exp VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, mode VARCHAR(50) NOT NULL, date DATE NOT NULL, status VARCHAR(80) NOT NULL, UNIQUE INDEX UNIQ_B1DC7A1E82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, sous_categorie_id INT NOT NULL, fournisseur_id INT NOT NULL, console_gaming_id INT DEFAULT NULL, enceinte_id INT DEFAULT NULL, imprimante_id INT DEFAULT NULL, ordinateur_portable_id INT DEFAULT NULL, telephone_tablette_id INT DEFAULT NULL, television_id INT DEFAULT NULL, unite_central_id INT DEFAULT NULL, ref VARCHAR(30) NOT NULL, lib VARCHAR(60) NOT NULL, description LONGTEXT NOT NULL, prix VARCHAR(255) NOT NULL, prix_ht NUMERIC(10, 2) NOT NULL, marque VARCHAR(50) NOT NULL, modele VARCHAR(100) NOT NULL, hauteur NUMERIC(10, 2) NOT NULL, largeur NUMERIC(10, 2) NOT NULL, profondeur NUMERIC(10, 2) NOT NULL, poid NUMERIC(10, 2) NOT NULL, sold INT NOT NULL, couleur VARCHAR(20) NOT NULL, photo VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27365BF48 (sous_categorie_id), INDEX IDX_29A5EC27670C757F (fournisseur_id), INDEX IDX_29A5EC27F2153094 (console_gaming_id), INDEX IDX_29A5EC27CDB596EB (enceinte_id), INDEX IDX_29A5EC271CA0A76 (imprimante_id), INDEX IDX_29A5EC272DCBFD29 (ordinateur_portable_id), INDEX IDX_29A5EC278077B727 (telephone_tablette_id), INDEX IDX_29A5EC274F356926 (television_id), INDEX IDX_29A5EC271E92B7CA (unite_central_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, lib VARCHAR(60) NOT NULL, description LONGTEXT DEFAULT NULL, photo LONGTEXT DEFAULT NULL, INDEX IDX_52743D7BBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE telephone_tablette (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, sys_exp VARCHAR(20) NOT NULL, type_sim VARCHAR(30) NOT NULL, nbr_sim INT NOT NULL, proc VARCHAR(60) NOT NULL, type_charge VARCHAR(50) NOT NULL, proc_modele VARCHAR(50) NOT NULL, bat VARCHAR(30) NOT NULL, etat_bat VARCHAR(20) NOT NULL, taille_ecran VARCHAR(50) NOT NULL, res_ecran VARCHAR(50) NOT NULL, freq_ecran VARCHAR(50) NOT NULL, reseau VARCHAR(10) NOT NULL, bluetooth VARCHAR(10) NOT NULL, wifi VARCHAR(10) NOT NULL, memoire INT NOT NULL, ram INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE television (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, resolution VARCHAR(50) NOT NULL, def VARCHAR(10) NOT NULL, techno VARCHAR(50) NOT NULL, proc VARCHAR(50) NOT NULL, son_puiss VARCHAR(10) NOT NULL, port_hdmi INT NOT NULL, port_usb INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unite_central (id INT AUTO_INCREMENT NOT NULL, lib_asso VARCHAR(50) NOT NULL, proc VARCHAR(50) NOT NULL, proc_freq NUMERIC(4, 2) NOT NULL, proc_nbr_coeur INT NOT NULL, ram INT NOT NULL, ram_type VARCHAR(20) NOT NULL, cg_modele VARCHAR(50) NOT NULL, stkage INT NOT NULL, type_stkage VARCHAR(20) NOT NULL, wifi VARCHAR(10) NOT NULL, port_usb INT NOT NULL, port_hdmi INT NOT NULL, sys_exp VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, commercial_id INT DEFAULT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, cate VARCHAR(30) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, adresse VARCHAR(100) NOT NULL, adresse_liv VARCHAR(100) NOT NULL, adresse_fac VARCHAR(100) NOT NULL, ville VARCHAR(40) NOT NULL, cp VARCHAR(5) NOT NULL, tel VARCHAR(20) NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), INDEX IDX_1D1C63B37854071C (commercial_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE contient ADD CONSTRAINT FK_DC302E56F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE contient ADD CONSTRAINT FK_DC302E567F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641082EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27365BF48 FOREIGN KEY (sous_categorie_id) REFERENCES sous_categorie (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27F2153094 FOREIGN KEY (console_gaming_id) REFERENCES console_gaming (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27CDB596EB FOREIGN KEY (enceinte_id) REFERENCES enceinte (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC271CA0A76 FOREIGN KEY (imprimante_id) REFERENCES imprimante (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC272DCBFD29 FOREIGN KEY (ordinateur_portable_id) REFERENCES ordinateur_portable (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC278077B727 FOREIGN KEY (telephone_tablette_id) REFERENCES telephone_tablette (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC274F356926 FOREIGN KEY (television_id) REFERENCES television (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC271E92B7CA FOREIGN KEY (unite_central_id) REFERENCES unite_central (id)');
        $this->addSql('ALTER TABLE sous_categorie ADD CONSTRAINT FK_52743D7BBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37854071C FOREIGN KEY (commercial_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DFB88E14F');
        $this->addSql('ALTER TABLE contient DROP FOREIGN KEY FK_DC302E56F347EFB');
        $this->addSql('ALTER TABLE contient DROP FOREIGN KEY FK_DC302E567F2DEE08');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641082EA2E54');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E82EA2E54');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27365BF48');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27670C757F');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27F2153094');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27CDB596EB');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC271CA0A76');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC272DCBFD29');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC278077B727');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC274F356926');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC271E92B7CA');
        $this->addSql('ALTER TABLE sous_categorie DROP FOREIGN KEY FK_52743D7BBCF5E72D');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37854071C');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE console_gaming');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE contient');
        $this->addSql('DROP TABLE enceinte');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE imprimante');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE ordinateur_portable');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE sous_categorie');
        $this->addSql('DROP TABLE telephone_tablette');
        $this->addSql('DROP TABLE television');
        $this->addSql('DROP TABLE unite_central');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
