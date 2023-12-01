<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231130220634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE currency_history (id INT AUTO_INCREMENT NOT NULL, from_currency_id INT NOT NULL, to_currency_id INT NOT NULL, date DATE NOT NULL, sell DOUBLE PRECISION NOT NULL, buy DOUBLE PRECISION NOT NULL, created_at DATE NOT NULL, INDEX IDX_FA138AA4A66BB013 (from_currency_id), INDEX IDX_FA138AA416B7BF15 (to_currency_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE currency_history ADD CONSTRAINT FK_FA138AA4A66BB013 FOREIGN KEY (from_currency_id) REFERENCES currency (id)');
        $this->addSql('ALTER TABLE currency_history ADD CONSTRAINT FK_FA138AA416B7BF15 FOREIGN KEY (to_currency_id) REFERENCES currency (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE currency_history DROP FOREIGN KEY FK_FA138AA4A66BB013');
        $this->addSql('ALTER TABLE currency_history DROP FOREIGN KEY FK_FA138AA416B7BF15');
        $this->addSql('DROP TABLE currency_history');
    }
}
