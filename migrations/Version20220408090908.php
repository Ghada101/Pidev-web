<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408090908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY fk_userid');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY fk_Agencyid');
        $this->addSql('ALTER TABLE agencylove CHANGE idUser idUser INT DEFAULT NULL, CHANGE idAgency idAgency INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT FK_AA4B0279FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT FK_AA4B027913D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE book CHANGE idUser idUser INT DEFAULT NULL, CHANGE idRoom idRoom INT DEFAULT NULL, CHANGE idHotel idHotel INT DEFAULT NULL, CHANGE idHotelChain idHotelChain INT DEFAULT NULL');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY fk_Agency');
        $this->addSql('ALTER TABLE car CHANGE RentStatus RentStatus TINYINT(1) NOT NULL, CHANGE fk_Agency fk_Agency INT DEFAULT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D57C2AB40 FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_useridcom');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_subject_Id');
        $this->addSql('ALTER TABLE comment CHANGE User_Id User_Id INT DEFAULT NULL, CHANGE subject_Id subject_Id INT DEFAULT NULL, CHANGE nblike nblike INT DEFAULT NULL, CHANGE nbdislike nbdislike INT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C97BAF825 FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id)');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY fk_userrid');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY fk_commentIdd');
        $this->addSql('ALTER TABLE dislikee CHANGE userID userID INT DEFAULT NULL, CHANGE commentId commentId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B405FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B406690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY fk_event_fk_venue');
        $this->addSql('ALTER TABLE event CHANGE Venue_id Venue_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B9D15CEC FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id)');
        $this->addSql('ALTER TABLE hotel CHANGE fk_HotelChain fk_HotelChain INT DEFAULT NULL');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY fk_iduser');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY fk_commentId');
        $this->addSql('ALTER TABLE likee CHANGE userID userID INT DEFAULT NULL, CHANGE commentId commentId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C5FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C6690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY fk_User');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY fk_Car');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY Agency_fk');
        $this->addSql('ALTER TABLE rent CHANGE idUser idUser INT DEFAULT NULL, CHANGE idCar idCar INT DEFAULT NULL, CHANGE idAgency idAgency INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC5675FB1A FOREIGN KEY (idCar) REFERENCES car (id_Car)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC13D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCCFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservetable CHANGE idUser idUser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE room CHANGE fk_Hotel fk_Hotel INT DEFAULT NULL');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY fk_useridsub');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY fk_topic_Id');
        $this->addSql('ALTER TABLE subject CHANGE User_Id User_Id INT DEFAULT NULL, CHANGE topic_Id topic_Id INT DEFAULT NULL, CHANGE acceptsubject acceptsubject INT NOT NULL, CHANGE hidesubject hidesubject INT NOT NULL');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A8AD1049F FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id)');
        $this->addSql('ALTER TABLE tablee CHANGE id_Restau id_Restau INT DEFAULT NULL');
        $this->addSql('ALTER TABLE topic DROP FOREIGN KEY fk_useridforum');
        $this->addSql('ALTER TABLE topic CHANGE User_Id User_Id INT DEFAULT NULL, CHANGE accepttopic accepttopic INT DEFAULT NULL, CHANGE hidetopic hidetopic INT DEFAULT NULL');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT FK_9D40DE1BFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT 0');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY FK_AA4B0279FE6E88D7');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY FK_AA4B027913D16E7C');
        $this->addSql('ALTER TABLE agencylove CHANGE idUser idUser INT NOT NULL, CHANGE idAgency idAgency INT NOT NULL');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT fk_userid FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT fk_Agencyid FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book CHANGE idHotelChain idHotelChain INT NOT NULL, CHANGE idUser idUser INT NOT NULL, CHANGE idHotel idHotel INT NOT NULL, CHANGE idRoom idRoom INT NOT NULL');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D57C2AB40');
        $this->addSql('ALTER TABLE car CHANGE RentStatus RentStatus TINYINT(1) DEFAULT 0 NOT NULL, CHANGE fk_Agency fk_Agency INT NOT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT fk_Agency FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CFD57CEAB');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C97BAF825');
        $this->addSql('ALTER TABLE comment CHANGE nblike nblike INT DEFAULT 0, CHANGE nbdislike nbdislike INT DEFAULT 0 NOT NULL, CHANGE User_Id User_Id INT NOT NULL, CHANGE subject_Id subject_Id INT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_useridcom FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_subject_Id FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B405FD86D04');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B406690C3F5');
        $this->addSql('ALTER TABLE dislikee CHANGE userID userID INT NOT NULL, CHANGE commentId commentId INT NOT NULL');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT fk_userrid FOREIGN KEY (userID) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT fk_commentIdd FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B9D15CEC');
        $this->addSql('ALTER TABLE event CHANGE Venue_id Venue_id VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT fk_event_fk_venue FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hotel CHANGE fk_HotelChain fk_HotelChain INT NOT NULL');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C5FD86D04');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C6690C3F5');
        $this->addSql('ALTER TABLE likee CHANGE userID userID INT NOT NULL, CHANGE commentId commentId INT NOT NULL');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT fk_iduser FOREIGN KEY (userID) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT fk_commentId FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC5675FB1A');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC13D16E7C');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCCFE6E88D7');
        $this->addSql('ALTER TABLE rent CHANGE idCar idCar INT NOT NULL, CHANGE idAgency idAgency INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT fk_User FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT fk_Car FOREIGN KEY (idCar) REFERENCES car (id_Car) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT Agency_fk FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservetable CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE room CHANGE fk_Hotel fk_Hotel INT NOT NULL');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AFD57CEAB');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A8AD1049F');
        $this->addSql('ALTER TABLE subject CHANGE acceptsubject acceptsubject INT DEFAULT 0 NOT NULL, CHANGE hidesubject hidesubject INT DEFAULT 0 NOT NULL, CHANGE User_Id User_Id INT NOT NULL, CHANGE topic_Id topic_Id INT NOT NULL');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT fk_useridsub FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT fk_topic_Id FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tablee CHANGE id_Restau id_Restau INT NOT NULL');
        $this->addSql('ALTER TABLE topic DROP FOREIGN KEY FK_9D40DE1BFD57CEAB');
        $this->addSql('ALTER TABLE topic CHANGE accepttopic accepttopic INT DEFAULT 0, CHANGE hidetopic hidetopic INT DEFAULT 0, CHANGE User_Id User_Id INT NOT NULL');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT fk_useridforum FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
