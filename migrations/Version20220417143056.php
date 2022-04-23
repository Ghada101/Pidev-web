<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417143056 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fkCategory');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY fk_commentIdd');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY fk_commentId');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY fkHotel');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY fk_Hotel');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY fkHotelChain');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY fk_HotelChain');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Restau');
        $this->addSql('ALTER TABLE tablee DROP FOREIGN KEY fkRestau');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY fkRoom');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_subject_Id');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Table');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY fk_topic_Id');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY fk_event_fk_venue');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE dislikee');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE hotelchain');
        $this->addSql('DROP TABLE likee');
        $this->addSql('DROP TABLE reservetable');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE tablee');
        $this->addSql('DROP TABLE topic');
        $this->addSql('DROP TABLE userforum');
        $this->addSql('DROP TABLE venue');
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY fk_Agencyid');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY fk_userid');
        $this->addSql('ALTER TABLE agencylove CHANGE idUser idUser INT DEFAULT NULL, CHANGE idAgency idAgency INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT FK_AA4B0279FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT FK_AA4B027913D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY fk_Agency');
        $this->addSql('ALTER TABLE car CHANGE RentStatus RentStatus TINYINT(1) NOT NULL, CHANGE fk_Agency fk_Agency INT DEFAULT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D57C2AB40 FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY Agency_fk');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY fk_User');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY fk_Car');
        $this->addSql('ALTER TABLE rent CHANGE idUser idUser INT DEFAULT NULL, CHANGE idCar idCar INT DEFAULT NULL, CHANGE idAgency idAgency INT DEFAULT NULL, CHANGE StartDate StartDate DATETIME NOT NULL, CHANGE EndDate EndDate DATETIME NOT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC5675FB1A FOREIGN KEY (idCar) REFERENCES car (id_Car)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC13D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCCFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (StartDate VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, endDate VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idUser INT NOT NULL, idRoom INT NOT NULL, idHotel INT NOT NULL, idHotelChain INT NOT NULL, idBook INT AUTO_INCREMENT NOT NULL, INDEX fkUser (idUser), INDEX fkHotel (idHotel), INDEX fkRoom (idRoom), INDEX fkHotelChain (idHotelChain), PRIMARY KEY(idBook)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category (IdCategory INT AUTO_INCREMENT NOT NULL, name_Category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_Category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(IdCategory)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comment (comment_Id INT AUTO_INCREMENT NOT NULL, User_Id INT NOT NULL, subject_Id INT NOT NULL, comment_description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, comment_date DATE NOT NULL, nblike INT DEFAULT 0, nbdislike INT DEFAULT 0 NOT NULL, comment_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_subject_Id (subject_Id), INDEX fk_useridcom (User_Id), PRIMARY KEY(comment_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE dislikee (dislikeId INT AUTO_INCREMENT NOT NULL, userID INT NOT NULL, commentId INT NOT NULL, INDEX fk_commentIdd (commentId), INDEX fk_userrid (userID), PRIMARY KEY(dislikeId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (Event_id INT AUTO_INCREMENT NOT NULL, Event_title VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Venue_id VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, EventDate VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, EventTime VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Event_Duration INT NOT NULL, EventCategory VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Price INT NOT NULL, INDEX fk_event_fk_venue (Venue_id), PRIMARY KEY(Event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE hotel (id_Hotel INT AUTO_INCREMENT NOT NULL, hotel_Name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotel_Staff VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotel_Location VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotel_Phone VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotel_Description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotel_Img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, fk_HotelChain INT NOT NULL, INDEX fk_HotelChain (fk_HotelChain), PRIMARY KEY(id_Hotel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE hotelchain (id_HotelChain INT AUTO_INCREMENT NOT NULL, hotelChain_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotelChain_Staff VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hotelChain_Description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, phone VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_HotelChain)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE likee (likeID INT AUTO_INCREMENT NOT NULL, userID INT NOT NULL, commentId INT NOT NULL, INDEX fk_commentId (commentId), INDEX fk_iduser (userID), PRIMARY KEY(likeID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservetable (idReserve INT AUTO_INCREMENT NOT NULL, idUser INT NOT NULL, IdCategory INT DEFAULT NULL, id_Table INT DEFAULT NULL, id_Restau INT DEFAULT NULL, INDEX userfk (idUser), INDEX fkCategory (IdCategory), INDEX fk_Restau (id_Restau), INDEX fk_Table (id_Table), PRIMARY KEY(idReserve)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE restaurant (id_Restau INT AUTO_INCREMENT NOT NULL, name_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, phone_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, location_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, IdCategory INT NOT NULL, PRIMARY KEY(id_Restau)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE room (id_Room INT AUTO_INCREMENT NOT NULL, room_Type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, room_capacity VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, isEmpty TINYINT(1) DEFAULT 1 NOT NULL, nbrRoom INT NOT NULL, fk_Hotel INT NOT NULL, INDEX fk_Hotel (fk_Hotel), PRIMARY KEY(id_Room)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE subject (subject_Id INT AUTO_INCREMENT NOT NULL, User_Id INT NOT NULL, topic_Id INT NOT NULL, subject_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, subject_description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, subject_num_comments INT NOT NULL, subject_date DATE NOT NULL, subject_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, acceptsubject INT DEFAULT 0 NOT NULL, hidesubject INT DEFAULT 0 NOT NULL, INDEX fk_topic_Id (topic_Id), INDEX fk_useridsub (User_Id), PRIMARY KEY(subject_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tablee (id_Table INT AUTO_INCREMENT NOT NULL, nbr_place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, id_Restau INT NOT NULL, INDEX fkRestau (id_Restau), PRIMARY KEY(id_Table)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE topic (topic_Id INT AUTO_INCREMENT NOT NULL, User_Id INT NOT NULL, topic_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, topic_description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, topic_num_subjects INT NOT NULL, topic_date DATE NOT NULL, accepttopic INT DEFAULT 0, hidetopic INT DEFAULT 0, INDEX fk_useridforum (User_Id), PRIMARY KEY(topic_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE userforum (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE venue (Venue_id VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ContactNumber INT NOT NULL, PRIMARY KEY(Venue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT fkHotel FOREIGN KEY (idHotel) REFERENCES hotel (id_Hotel)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT fkRoom FOREIGN KEY (idRoom) REFERENCES room (id_Room)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT fkHotelChain FOREIGN KEY (idHotelChain) REFERENCES hotelchain (id_HotelChain)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT fkUser FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_subject_Id FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_useridcom FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT fk_commentIdd FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT fk_userrid FOREIGN KEY (userID) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT fk_event_fk_venue FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT fk_HotelChain FOREIGN KEY (fk_HotelChain) REFERENCES hotelchain (id_HotelChain)');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT fk_commentId FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT fk_iduser FOREIGN KEY (userID) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fkCategory FOREIGN KEY (IdCategory) REFERENCES category (IdCategory)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Table FOREIGN KEY (id_Table) REFERENCES tablee (id_Table)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Restau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT userfk FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT fk_Hotel FOREIGN KEY (fk_Hotel) REFERENCES hotel (id_Hotel)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT fk_topic_Id FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT fk_useridsub FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tablee ADD CONSTRAINT fkRestau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau)');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT fk_useridforum FOREIGN KEY (User_Id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT 0');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY FK_AA4B0279FE6E88D7');
        $this->addSql('ALTER TABLE agencylove DROP FOREIGN KEY FK_AA4B027913D16E7C');
        $this->addSql('ALTER TABLE agencylove CHANGE idUser idUser INT NOT NULL, CHANGE idAgency idAgency INT NOT NULL');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT fk_Agencyid FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agencylove ADD CONSTRAINT fk_userid FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D57C2AB40');
        $this->addSql('ALTER TABLE car CHANGE RentStatus RentStatus TINYINT(1) DEFAULT 0 NOT NULL, CHANGE fk_Agency fk_Agency INT NOT NULL');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT fk_Agency FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC5675FB1A');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC13D16E7C');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCCFE6E88D7');
        $this->addSql('ALTER TABLE rent CHANGE StartDate StartDate VARCHAR(255) NOT NULL, CHANGE EndDate EndDate VARCHAR(255) NOT NULL, CHANGE idCar idCar INT NOT NULL, CHANGE idAgency idAgency INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT Agency_fk FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT fk_User FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT fk_Car FOREIGN KEY (idCar) REFERENCES car (id_Car) ON DELETE CASCADE');
    }
}
