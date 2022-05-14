<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220514101719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33114971DC4 FOREIGN KEY (idHotel) REFERENCES `hotel` (id_Hotel)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3311620F05 FOREIGN KEY (idRoom) REFERENCES `room` (id_Room)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33118D78FB7 FOREIGN KEY (idHotelChain) REFERENCES `hotelchain` (id_HotelChain)');
        $this->addSql('DROP INDEX fkuser ON book');
        $this->addSql('CREATE INDEX IDX_CBE5A331FE6E88D7 ON book (idUser)');
        $this->addSql('DROP INDEX fkhotel ON book');
        $this->addSql('CREATE INDEX IDX_CBE5A33114971DC4 ON book (idHotel)');
        $this->addSql('DROP INDEX fkroom ON book');
        $this->addSql('CREATE INDEX IDX_CBE5A3311620F05 ON book (idRoom)');
        $this->addSql('DROP INDEX fkhotelchain ON book');
        $this->addSql('CREATE INDEX IDX_CBE5A33118D78FB7 ON book (idHotelChain)');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D57C2AB40');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D57C2AB40 FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C97BAF825');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CFD57CEAB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C97BAF825 FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B405FD86D04');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B406690C3F5');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B405FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B406690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B9D15CEC');
        $this->addSql('ALTER TABLE event DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B9D15CEC');
        $this->addSql('ALTER TABLE event ADD title VARCHAR(255) NOT NULL, ADD event_date DATETIME NOT NULL, ADD event_time VARCHAR(255) NOT NULL, ADD category VARCHAR(255) NOT NULL, ADD image VARCHAR(255) DEFAULT NULL, DROP Event_title, DROP EventDate, DROP EventTime, DROP EventCategory, CHANGE Venue_id venue_id INT NOT NULL, CHANGE Description description LONGTEXT NOT NULL, CHANGE Event_id id INT AUTO_INCREMENT NOT NULL, CHANGE Event_Duration duration INT NOT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA740A73EBA FOREIGN KEY (venue_id) REFERENCES venue (id)');
        $this->addSql('ALTER TABLE event ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX fk_event_fk_venue ON event');
        $this->addSql('CREATE INDEX IDX_3BAE0AA740A73EBA ON event (venue_id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B9D15CEC FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY fk_HotelChain');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY fk_HotelChain');
        $this->addSql('ALTER TABLE hotel CHANGE hotel_Staff hotel_Staff INT NOT NULL, CHANGE hotel_Phone hotel_Phone INT NOT NULL, CHANGE hotel_Img hotel_Img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED92510581E FOREIGN KEY (fk_HotelChain) REFERENCES `hotelchain` (id_HotelChain)');
        $this->addSql('DROP INDEX fk_hotelchain ON hotel');
        $this->addSql('CREATE INDEX IDX_3535ED92510581E ON hotel (fk_HotelChain)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT fk_HotelChain FOREIGN KEY (fk_HotelChain) REFERENCES hotelchain (id_HotelChain) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hotelchain CHANGE hotelChain_Staff hotelChain_Staff INT NOT NULL');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C5FD86D04');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C6690C3F5');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C5FD86D04 FOREIGN KEY (userID) REFERENCES user (id)');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C6690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id)');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC13D16E7C');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCCFE6E88D7');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC5675FB1A');
        $this->addSql('ALTER TABLE rent CHANGE StartDate StartDate DATETIME NOT NULL, CHANGE EndDate EndDate DATETIME NOT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC13D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCCFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC5675FB1A FOREIGN KEY (idCar) REFERENCES car (id_Car)');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Restau');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY userfk');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY fk_Table');
        $this->addSql('ALTER TABLE reservetable ADD StartDate DATE NOT NULL, ADD endDate DATE NOT NULL');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT FK_90528C40F19A5524 FOREIGN KEY (id_Restau) REFERENCES `restaurant` (id_Restau)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT FK_90528C40FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT FK_90528C401AB2304A FOREIGN KEY (IdCategory) REFERENCES `category` (IdCategory)');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT FK_90528C40D96DE172 FOREIGN KEY (id_Table) REFERENCES `tablee` (id_Table)');
        $this->addSql('ALTER TABLE restaurant ADD restaurantImg VARCHAR(255) NOT NULL, CHANGE IdCategory IdCategory INT DEFAULT NULL');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123F1AB2304A FOREIGN KEY (IdCategory) REFERENCES `category` (IdCategory)');
        $this->addSql('CREATE INDEX IDX_EB95123F1AB2304A ON restaurant (IdCategory)');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY fk_Hotel');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY fk_Hotel');
        $this->addSql('ALTER TABLE room ADD ratings VARCHAR(255) NOT NULL, CHANGE isEmpty isEmpty TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519B37F52A8 FOREIGN KEY (fk_Hotel) REFERENCES `hotel` (id_Hotel)');
        $this->addSql('DROP INDEX fk_hotel ON room');
        $this->addSql('CREATE INDEX IDX_729F519B37F52A8 ON room (fk_Hotel)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT fk_Hotel FOREIGN KEY (fk_Hotel) REFERENCES hotel (id_Hotel) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A8AD1049F');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AFD57CEAB');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A8AD1049F FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tablee DROP FOREIGN KEY fkRestau');
        $this->addSql('ALTER TABLE tablee DROP FOREIGN KEY fkRestau');
        $this->addSql('ALTER TABLE tablee ADD CONSTRAINT FK_7093B770F19A5524 FOREIGN KEY (id_Restau) REFERENCES `restaurant` (id_Restau)');
        $this->addSql('DROP INDEX fkrestau ON tablee');
        $this->addSql('CREATE INDEX IDX_7093B770F19A5524 ON tablee (id_Restau)');
        $this->addSql('ALTER TABLE tablee ADD CONSTRAINT fkRestau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE topic DROP FOREIGN KEY FK_9D40DE1BFD57CEAB');
        $this->addSql('ALTER TABLE topic CHANGE topic_description topic_description TEXT NOT NULL');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT FK_9D40DE1BFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD is_verified TINYINT(1) NOT NULL, ADD resetcode VARCHAR(255) DEFAULT NULL, DROP mail_address, CHANGE password password VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('ALTER TABLE venue ADD id INT AUTO_INCREMENT NOT NULL, ADD venue_name VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) DEFAULT NULL, ADD longitude VARCHAR(255) DEFAULT NULL, DROP Venue_id, CHANGE address address VARCHAR(255) NOT NULL, CHANGE ContactNumber contact_number INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A331FE6E88D7');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A33114971DC4');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A3311620F05');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A33118D78FB7');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A331FE6E88D7');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A33114971DC4');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A3311620F05');
        $this->addSql('ALTER TABLE `book` DROP FOREIGN KEY FK_CBE5A33118D78FB7');
        $this->addSql('DROP INDEX idx_cbe5a33118d78fb7 ON `book`');
        $this->addSql('CREATE INDEX fkHotelChain ON `book` (idHotelChain)');
        $this->addSql('DROP INDEX idx_cbe5a331fe6e88d7 ON `book`');
        $this->addSql('CREATE INDEX fkUser ON `book` (idUser)');
        $this->addSql('DROP INDEX idx_cbe5a33114971dc4 ON `book`');
        $this->addSql('CREATE INDEX fkHotel ON `book` (idHotel)');
        $this->addSql('DROP INDEX idx_cbe5a3311620f05 ON `book`');
        $this->addSql('CREATE INDEX fkRoom ON `book` (idRoom)');
        $this->addSql('ALTER TABLE `book` ADD CONSTRAINT FK_CBE5A331FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `book` ADD CONSTRAINT FK_CBE5A33114971DC4 FOREIGN KEY (idHotel) REFERENCES `hotel` (id_Hotel)');
        $this->addSql('ALTER TABLE `book` ADD CONSTRAINT FK_CBE5A3311620F05 FOREIGN KEY (idRoom) REFERENCES `room` (id_Room)');
        $this->addSql('ALTER TABLE `book` ADD CONSTRAINT FK_CBE5A33118D78FB7 FOREIGN KEY (idHotelChain) REFERENCES `hotelchain` (id_HotelChain)');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D57C2AB40');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D57C2AB40 FOREIGN KEY (fk_Agency) REFERENCES agency (Id_Agency) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CFD57CEAB');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C97BAF825');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C97BAF825 FOREIGN KEY (subject_Id) REFERENCES subject (subject_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B405FD86D04');
        $this->addSql('ALTER TABLE dislikee DROP FOREIGN KEY FK_D9270B406690C3F5');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B405FD86D04 FOREIGN KEY (userID) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dislikee ADD CONSTRAINT FK_D9270B406690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA740A73EBA');
        $this->addSql('ALTER TABLE event DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA740A73EBA');
        $this->addSql('ALTER TABLE event ADD Event_title VARCHAR(50) NOT NULL, ADD EventDate VARCHAR(50) NOT NULL, ADD EventTime VARCHAR(50) NOT NULL, ADD EventCategory VARCHAR(50) NOT NULL, DROP title, DROP event_date, DROP event_time, DROP category, DROP image, CHANGE venue_id Venue_id VARCHAR(50) DEFAULT NULL, CHANGE description Description TEXT NOT NULL, CHANGE id Event_id INT AUTO_INCREMENT NOT NULL, CHANGE duration Event_Duration INT NOT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B9D15CEC FOREIGN KEY (Venue_id) REFERENCES venue (Venue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD PRIMARY KEY (Event_id)');
        $this->addSql('DROP INDEX idx_3bae0aa740a73eba ON event');
        $this->addSql('CREATE INDEX fk_event_fk_venue ON event (Venue_id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA740A73EBA FOREIGN KEY (venue_id) REFERENCES venue (id)');
        $this->addSql('ALTER TABLE `hotel` DROP FOREIGN KEY FK_3535ED92510581E');
        $this->addSql('ALTER TABLE `hotel` DROP FOREIGN KEY FK_3535ED92510581E');
        $this->addSql('ALTER TABLE `hotel` CHANGE hotel_Staff hotel_Staff VARCHAR(255) NOT NULL, CHANGE hotel_Phone hotel_Phone VARCHAR(255) NOT NULL, CHANGE hotel_Img hotel_Img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE `hotel` ADD CONSTRAINT fk_HotelChain FOREIGN KEY (fk_HotelChain) REFERENCES hotelchain (id_HotelChain) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_3535ed92510581e ON `hotel`');
        $this->addSql('CREATE INDEX fk_HotelChain ON `hotel` (fk_HotelChain)');
        $this->addSql('ALTER TABLE `hotel` ADD CONSTRAINT FK_3535ED92510581E FOREIGN KEY (fk_HotelChain) REFERENCES `hotelchain` (id_HotelChain)');
        $this->addSql('ALTER TABLE `hotelchain` CHANGE hotelChain_Staff hotelChain_Staff VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C5FD86D04');
        $this->addSql('ALTER TABLE likee DROP FOREIGN KEY FK_BD1EFB2C6690C3F5');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C5FD86D04 FOREIGN KEY (userID) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likee ADD CONSTRAINT FK_BD1EFB2C6690C3F5 FOREIGN KEY (commentId) REFERENCES comment (comment_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC5675FB1A');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCC13D16E7C');
        $this->addSql('ALTER TABLE rent DROP FOREIGN KEY FK_2784DCCFE6E88D7');
        $this->addSql('ALTER TABLE rent CHANGE StartDate StartDate DATE NOT NULL, CHANGE EndDate EndDate DATE NOT NULL');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC5675FB1A FOREIGN KEY (idCar) REFERENCES car (id_Car) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCC13D16E7C FOREIGN KEY (idAgency) REFERENCES agency (Id_Agency) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rent ADD CONSTRAINT FK_2784DCCFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY FK_90528C40F19A5524');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY FK_90528C40FE6E88D7');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY FK_90528C401AB2304A');
        $this->addSql('ALTER TABLE reservetable DROP FOREIGN KEY FK_90528C40D96DE172');
        $this->addSql('ALTER TABLE reservetable DROP StartDate, DROP endDate');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Restau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT userfk FOREIGN KEY (idUser) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservetable ADD CONSTRAINT fk_Table FOREIGN KEY (id_Table) REFERENCES tablee (id_Table) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `restaurant` DROP FOREIGN KEY FK_EB95123F1AB2304A');
        $this->addSql('DROP INDEX IDX_EB95123F1AB2304A ON `restaurant`');
        $this->addSql('ALTER TABLE `restaurant` DROP restaurantImg, CHANGE IdCategory IdCategory INT NOT NULL');
        $this->addSql('ALTER TABLE `room` DROP FOREIGN KEY FK_729F519B37F52A8');
        $this->addSql('ALTER TABLE `room` DROP FOREIGN KEY FK_729F519B37F52A8');
        $this->addSql('ALTER TABLE `room` DROP ratings, CHANGE isEmpty isEmpty TINYINT(1) DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE `room` ADD CONSTRAINT fk_Hotel FOREIGN KEY (fk_Hotel) REFERENCES hotel (id_Hotel) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_729f519b37f52a8 ON `room`');
        $this->addSql('CREATE INDEX fk_Hotel ON `room` (fk_Hotel)');
        $this->addSql('ALTER TABLE `room` ADD CONSTRAINT FK_729F519B37F52A8 FOREIGN KEY (fk_Hotel) REFERENCES `hotel` (id_Hotel)');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AFD57CEAB');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A8AD1049F');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A8AD1049F FOREIGN KEY (topic_Id) REFERENCES topic (topic_Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `tablee` DROP FOREIGN KEY FK_7093B770F19A5524');
        $this->addSql('ALTER TABLE `tablee` DROP FOREIGN KEY FK_7093B770F19A5524');
        $this->addSql('ALTER TABLE `tablee` ADD CONSTRAINT fkRestau FOREIGN KEY (id_Restau) REFERENCES restaurant (id_Restau) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_7093b770f19a5524 ON `tablee`');
        $this->addSql('CREATE INDEX fkRestau ON `tablee` (id_Restau)');
        $this->addSql('ALTER TABLE `tablee` ADD CONSTRAINT FK_7093B770F19A5524 FOREIGN KEY (id_Restau) REFERENCES `restaurant` (id_Restau)');
        $this->addSql('ALTER TABLE topic DROP FOREIGN KEY FK_9D40DE1BFD57CEAB');
        $this->addSql('ALTER TABLE topic CHANGE topic_description topic_description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE topic ADD CONSTRAINT FK_9D40DE1BFD57CEAB FOREIGN KEY (User_Id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD mail_address VARCHAR(45) NOT NULL, DROP email, DROP roles, DROP is_verified, DROP resetcode, CHANGE password password VARCHAR(45) NOT NULL, CHANGE name name VARCHAR(45) DEFAULT NULL, CHANGE lastname lastname VARCHAR(45) DEFAULT NULL, CHANGE phone phone VARCHAR(45) DEFAULT NULL, CHANGE type type VARCHAR(45) DEFAULT NULL');
        $this->addSql('ALTER TABLE venue MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE venue DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE venue ADD Venue_id VARCHAR(50) NOT NULL, DROP id, DROP venue_name, DROP latitude, DROP longitude, CHANGE address address VARCHAR(50) NOT NULL, CHANGE contact_number ContactNumber INT NOT NULL');
        $this->addSql('ALTER TABLE venue ADD PRIMARY KEY (Venue_id)');
    }
}
