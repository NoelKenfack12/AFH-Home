<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250118150714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement CHANGE indicateur_id indicateur_id INT DEFAULT NULL, CHANGE annee_id annee_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EDF3D9B63 FOREIGN KEY (imgevenement_id) REFERENCES imgevenement (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EDA3B8F3D FOREIGN KEY (indicateur_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E543EC5F0 FOREIGN KEY (annee_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_B26681EED5CA9E6 ON evenement (service_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B26681EDF3D9B63 ON evenement (imgevenement_id)');
        $this->addSql('CREATE INDEX IDX_B26681EDA3B8F3D ON evenement (indicateur_id)');
        $this->addSql('CREATE INDEX IDX_B26681E543EC5F0 ON evenement (annee_id)');
        $this->addSql('CREATE INDEX IDX_B26681EF347EFB ON evenement (produit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EED5CA9E6');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EDF3D9B63');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EDA3B8F3D');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E543EC5F0');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EF347EFB');
        $this->addSql('DROP INDEX IDX_B26681EED5CA9E6 ON evenement');
        $this->addSql('DROP INDEX UNIQ_B26681EDF3D9B63 ON evenement');
        $this->addSql('DROP INDEX IDX_B26681EDA3B8F3D ON evenement');
        $this->addSql('DROP INDEX IDX_B26681E543EC5F0 ON evenement');
        $this->addSql('DROP INDEX IDX_B26681EF347EFB ON evenement');
        $this->addSql('ALTER TABLE evenement CHANGE indicateur_id indicateur_id INT NOT NULL, CHANGE annee_id annee_id INT NOT NULL, CHANGE produit_id produit_id INT NOT NULL');
    }
}
