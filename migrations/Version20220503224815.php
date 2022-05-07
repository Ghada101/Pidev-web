<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503224815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B406690C3F5');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C6690C3F5');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Restau');
        $this->addSql('ALTER TABLE tablee DROP FOREIGN KEY fkRestau');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C97BAF825');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Table');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A8AD1049F');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B9D15CEC');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE dislikee');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE likee');
        $this->addSql('DROP TABLE reservetable');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE tablee');
        $this->addSql('DROP TABLE topic');
        $this->addSql('DROP TABLE userforum');
        $this->addSql('DROP TABLE venue');
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT NULL');
        $this->addSql('ALTER TABLE book RENAME INDEX fkuser TO IDX_CBE5A331FE6E88D7');
        $this->addSql('ALTER TABLE book RENAME INDEX fkhotel TO IDX_CBE5A33114971DC4');
        $this->addSql('ALTER TABLE book RENAME INDEX fkroom TO IDX_CBE5A3311620F05');
        $this->addSql('ALTER TABLE book RENAME INDEX fkhotelchain TO IDX_CBE5A33118D78FB7');
        $this->addSql('ALTER TABLE hotel CHANGE hotel_Staff hotel_Staff INT NOT NULL, CHANGE hotel_Phone hotel_Phone INT NOT NULL, CHANGE hotel_Img hotel_Img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE hotel RENAME INDEX fk_hotelchain TO IDX_3535ED92510581E');
        $this->addSql('ALTER TABLE hotelchain CHANGE hotelChain_Staff hotelChain_Staff INT NOT NULL');
        $this->addSql('ALTER TABLE rent CHANGE StartDate StartDate DATETIME NOT NULL, CHANGE EndDate EndDate DATETIME NOT NULL');
        $this->addSql('ALTER TABLE room CHANGE isEmpty isEmpty TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE room RENAME INDEX fk_hotel TO IDX_729F519B37F52A8');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (IdCategory INT AUTO_INCREMENT NOT NULL, name_Category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_Category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(IdCategory)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comment (comment_Id INT AUTO_INCREMENT NOT NULL, User_Id INT DEFAULT NULL, subject_Id INT DEFAULT NULL, comment_description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, comment_date DATE NOT NULL, nblike INT DEFAULT NULL, nbdislike INT NOT NULL, comment_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_useridcom (User_Id), INDEX fk_subject_Id (subject_Id), PRIMARY KEY(comment_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE dislikee (dislikeId INT AUTO_INCREMENT NOT NULL, userID INT DEFAULT NULL, commentId INT DEFAULT NULL, INDEX fk_userrid (userID), INDEX fk_commentIdd (commentId), PRIMARY KEY(dislikeId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (Event_id INT AUTO_INCREMENT NOT NULL, Event_title VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Venue_id VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, EventDate VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, EventTime VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Event_Duration INT NOT NULL, EventCategory VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Price INT NOT NULL, INDEX fk_event_fk_venue (Venue_id), PRIMARY KEY(Event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE likee (likeID INT AUTO_INCREMENT NOT NULL, userID INT DEFAULT NULL, commentId INT DEFAULT NULL, INDEX fk_iduser (userID), INDEX fk_commentId (commentId), PRIMARY KEY(likeID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservetable (idReserve INT AUTO_INCREMENT NOT NULL, idUser INT DEFAULT NULL, IdCategory INT DEFAULT NULL, id_Table INT DEFAULT NULL, id_Restau INT DEFAULT NULL, INDEX fk_Restau (id_Restau), INDEX userfk (idUser), INDEX fkCategory (IdCategory), INDEX fk_Table (id_Table), PRIMARY KEY(idReserve)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE restaurant (id_Restau INT AUTO_INCREMENT NOT NULL, name_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, phone_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, location_Restau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, IdCategory INT NOT NULL, PRIMARY KEY(id_Restau)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE subject (subject_Id INT AUTO_INCREMENT NOT NULL, User_Id INT DEFAULT NULL, topic_Id INT DEFAULT NULL, subject_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, subject_description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, subject_num_comments INT NOT NULL, subject_date DATE NOT NULL, subject_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, acceptsubject INT NOT NULL, hidesubject INT NOT NULL, INDEX fk_useridsub (User_Id), INDEX fk_topic_Id (topic_Id), PRIMARY KEY(subject_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tablee (id_Table INT AUTO_INCREMENT NOT NULL, nbr_place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, id_Restau INT DEFAULT NULL, INDEX fkRestau (id_Restau), PRIMARY KEY(id_Table)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE topic (topic_Id INT AUTO_INCREMENT NOT NULL, User_Id INT DEFAULT NULL, topic_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, topic_description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, topic_num_subjects INT NOT NULL, topic_date DATE NOT NULL, accepttopic INT DEFAULT NULL, hidetopic INT DEFAULT NULL, INDEX fk_useridforum (User_Id), PRIMARY KEY(topic_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE userforum (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE venue (Venue_id VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ContactNumber INT NOT NULL, PRIMARY KEY(Venue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C97BAF825 FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B405FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B406690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B9D15CEC FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id)');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C5FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C6690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Restau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT userfk FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Table FOREIGN KEY (id_Table) REFERENCES tablee (id_Table)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A8AD1049F FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tablee ADD CONSTRAINT fkRestau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau)');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT FK_9D40DE1BFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE agency CHANGE nbrLike nbrLike INT DEFAULT 0');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a3311620f05 TO fkRoom');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a331fe6e88d7 TO fkUser');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a33114971dc4 TO fkHotel');
        $this->addSql('ALTER TABLE `book` RENAME INDEX idx_cbe5a33118d78fb7 TO fkHotelChain');
        $this->addSql('ALTER TABLE `hotel` CHANGE hotel_Staff hotel_Staff VARCHAR(255) NOT NULL, CHANGE hotel_Phone hotel_Phone VARCHAR(255) NOT NULL, CHANGE hotel_Img hotel_Img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE `hotel` RENAME INDEX idx_3535ed92510581e TO fk_HotelChain');
        $this->addSql('ALTER TABLE `hotelchain` CHANGE hotelChain_Staff hotelChain_Staff VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rent CHANGE StartDate StartDate DATE NOT NULL, CHANGE EndDate EndDate DATE NOT NULL');
        $this->addSql('ALTER TABLE `room` CHANGE isEmpty isEmpty TINYINT(1) DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE `room` RENAME INDEX idx_729f519b37f52a8 TO fk_Hotel');
    }
}
