<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510224943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evennement (Id_event INT AUTO_INCREMENT NOT NULL, Nom VARCHAR(255) NOT NULL, Date VARCHAR(255) NOT NULL, Id_user INT NOT NULL, PRIMARY KEY(Id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, idcom INT DEFAULT NULL, likec INT NOT NULL, dislikec INT NOT NULL, INDEX IDX_49CA4E7D7DB39D81 (idcom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (Id_Pa INT AUTO_INCREMENT NOT NULL, Quantite INT NOT NULL, Coupon VARCHAR(25) NOT NULL, Id_P INT DEFAULT NULL, INDEX Id_P (Id_P), PRIMARY KEY(Id_Pa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (Id_P INT AUTO_INCREMENT NOT NULL, Nom_P VARCHAR(25) NOT NULL, Prix DOUBLE PRECISION NOT NULL, Photo VARCHAR(255) NOT NULL, Categories VARCHAR(25) NOT NULL, PRIMARY KEY(Id_P)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (Id INT AUTO_INCREMENT NOT NULL, Nom_p VARCHAR(255) DEFAULT NULL, Date_r VARCHAR(255) DEFAULT NULL, Id_Kine INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, Id_c INT DEFAULT NULL, INDEX Id_c (Id_c), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ratingblg (id INT AUTO_INCREMENT NOT NULL, id_blg INT DEFAULT NULL, rat DOUBLE PRECISION NOT NULL, INDEX IDX_C2FF3CFA3028FE56 (id_blg), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, Nom_U VARCHAR(255) NOT NULL, Prenom VARCHAR(255) NOT NULL, Adresse VARCHAR(255) NOT NULL, Date_N VARCHAR(255) NOT NULL, Login VARCHAR(255) NOT NULL, Mdp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2DECEBB38 FOREIGN KEY (Id_P) REFERENCES produit (Id_P)');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF611EDA2E FOREIGN KEY (Id_c) REFERENCES consultation (Id_c)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555151280B94F FOREIGN KEY (id_enfant) REFERENCES enfant (id_enfant)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC1619EAB8 FOREIGN KEY (Id_b) REFERENCES blg (Id_b)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2DECEBB38');
        $this->addSql('DROP TABLE evennement');
        $this->addSql('DROP TABLE likes');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE ratingblg');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555151280B94F');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC1619EAB8');
    }
}
