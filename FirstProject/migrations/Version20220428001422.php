<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428001422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ratingblg DROP FOREIGN KEY FK_C2FF3CFA6B3CA4B');
        $this->addSql('DROP INDEX IDX_C2FF3CFA6B3CA4B ON ratingblg');
        $this->addSql('ALTER TABLE ratingblg DROP id_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ratingblg ADD id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ratingblg ADD CONSTRAINT FK_C2FF3CFA6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C2FF3CFA6B3CA4B ON ratingblg (id_user)');
    }
}
