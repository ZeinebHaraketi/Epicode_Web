<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428031035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE like_dislike DROP FOREIGN KEY FK_ADB6A6893028FE56');
        $this->addSql('DROP INDEX IDX_ADB6A6893028FE56 ON like_dislike');
        $this->addSql('ALTER TABLE like_dislike CHANGE id_blg idcom INT DEFAULT NULL');
        $this->addSql('ALTER TABLE like_dislike ADD CONSTRAINT FK_ADB6A6897DB39D81 FOREIGN KEY (idcom) REFERENCES commentaire (Id_com)');
        $this->addSql('CREATE INDEX IDX_ADB6A6897DB39D81 ON like_dislike (idcom)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE like_dislike DROP FOREIGN KEY FK_ADB6A6897DB39D81');
        $this->addSql('DROP INDEX IDX_ADB6A6897DB39D81 ON like_dislike');
        $this->addSql('ALTER TABLE like_dislike CHANGE idcom id_blg INT DEFAULT NULL');
        $this->addSql('ALTER TABLE like_dislike ADD CONSTRAINT FK_ADB6A6893028FE56 FOREIGN KEY (id_blg) REFERENCES blg (Id_b) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_ADB6A6893028FE56 ON like_dislike (id_blg)');
    }
}
