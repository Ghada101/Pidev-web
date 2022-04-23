<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412232054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3311620F05');
        $this->addSql('ALTER TABLE book CHANGE idRoom idRoom INT DEFAULT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3311620F05 FOREIGN KEY (idRoom) REFERENCES `room` (id_Room)');
        $this->addSql('ALTER TABLE book RENAME INDEX fkuser TO IDX_CBE5A331FE6E88D7');
        $this->addSql('ALTER TABLE book RENAME INDEX fkhotel TO IDX_CBE5A33114971DC4');
        $this->addSql('ALTER TABLE book RENAME INDEX fkroom TO IDX_CBE5A3311620F05');
        $this->addSql('ALTER TABLE book RENAME INDEX fkhotelchain TO IDX_CBE5A33118D78FB7');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED92510581E');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED92510581E FOREIGN KEY (fk_HotelChain) REFERENCES `hotelchain` (id_HotelChain)');
        $this->addSql('ALTER TABLE hotel RENAME INDEX fk_hotelchain TO IDX_3535ED92510581E');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519B37F52A8');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519B37F52A8 FOREIGN KEY (fk_Hotel) REFERENCES `hotel` (id_Hotel)');
        $this->addSql('ALTER TABLE room RENAME INDEX fk_hotel TO IDX_729F519B37F52A8');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A3311620F05');
        $this->addSql('ALTER TABLE `book` CHANGE idRoom idRoom INT NOT NULL');
        $this->addSql('ALTER TABLE `book` ADD CONSTRAINT FK_CBE5A3311620F05 FOREIGN KEY (idRoom) REFERENCES room (id_Room) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a3311620f05 TO fkRoom');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a331fe6e88d7 TO fkUser');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a33114971dc4 TO fkHotel');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a33118d78fb7 TO fkHotelChain');
        $this->addSql('ALTER TABLE `hotel` DROP FOREIGN KEY FK_3535ED92510581E');
        $this->addSql('ALTER TABLE `hotel` ADD CONSTRAINT FK_3535ED92510581E FOREIGN KEY (fk_HotelChain) REFERENCES hotelchain (id_HotelChain) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `hotel` RENAME INDEX idx_3535ed92510581e TO fk_HotelChain');
        $this->addSql('ALTER TABLE `room` DROP FOREIGN KEY FK_729F519B37F52A8');
        $this->addSql('ALTER TABLE `room` ADD CONSTRAINT FK_729F519B37F52A8 FOREIGN KEY (fk_Hotel) REFERENCES hotel (id_Hotel) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `room` RENAME INDEX idx_729f519b37f52a8 TO fk_Hotel');
    }
}
