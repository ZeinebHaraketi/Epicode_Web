<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220421194057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, reservation_cours_id INT DEFAULT NULL, reservation_coach_id INT DEFAULT NULL, date_r DATETIME NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_42C84955E37A9AA4 (reservation_cours_id), INDEX IDX_42C84955A1A5B485 (reservation_coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E37A9AA4 FOREIGN KEY (reservation_cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A1A5B485 FOREIGN KEY (reservation_coach_id) REFERENCES coach (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation');
    }
}
