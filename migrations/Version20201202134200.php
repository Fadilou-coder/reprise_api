<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201202134200 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fil_de_discution DROP FOREIGN KEY FK_3FF0FEA4D33E9744');
        $this->addSql('DROP INDEX UNIQ_3FF0FEA4D33E9744 ON fil_de_discution');
        $this->addSql('ALTER TABLE fil_de_discution DROP apprenant_livrale_partiel_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fil_de_discution ADD apprenant_livrale_partiel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fil_de_discution ADD CONSTRAINT FK_3FF0FEA4D33E9744 FOREIGN KEY (apprenant_livrale_partiel_id) REFERENCES apprenant_livrable_partiel (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3FF0FEA4D33E9744 ON fil_de_discution (apprenant_livrale_partiel_id)');
    }
}
