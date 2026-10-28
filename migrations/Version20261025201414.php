<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261025201414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, question_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) NOT NULL, reponse VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_6AB5B471A76ED395 (user_id), INDEX IDX_6AB5B4711E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, consigne VARCHAR(255) NOT NULL, date DATETIME NOT NULL, first_post LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', second_post LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', third_post LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', nom_gagnant VARCHAR(255) DEFAULT NULL, tel_gagnant VARCHAR(255) DEFAULT NULL, email_gagnant VARCHAR(255) DEFAULT NULL, ville_gagnant VARCHAR(255) DEFAULT NULL, nom_auteur VARCHAR(255) NOT NULL, tel_auteur VARCHAR(255) NOT NULL, INDEX IDX_B6F7494EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B4711E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE typearticle ADD breve VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B4711E27F6BF');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE question');
        $this->addSql('ALTER TABLE typearticle DROP breve');
    }
}
