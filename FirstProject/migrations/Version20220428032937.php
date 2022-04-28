<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428032937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, idcom INT DEFAULT NULL, `like` INT NOT NULL, dislike INT NOT NULL, INDEX IDX_49CA4E7D7DB39D81 (idcom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7D7DB39D81 FOREIGN KEY (idcom) REFERENCES commentaire (Id_com)');
        $this->addSql('DROP TABLE lik_dis');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lik_dis (id INT AUTO_INCREMENT NOT NULL, idcom INT DEFAULT NULL, `like` INT NOT NULL, dislike INT NOT NULL, INDEX IDX_B1E06D417DB39D81 (idcom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE lik_dis ADD CONSTRAINT FK_B1E06D417DB39D81 FOREIGN KEY (idcom) REFERENCES commentaire (Id_com) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE likes');
    }
}
