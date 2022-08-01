# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.01 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: traveler
# Generation Time: 2022-08-01 14:35:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table country_cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country_cards`;

CREATE TABLE `country_cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `activity` varchar(200) DEFAULT NULL,
  `food` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `country_cards` WRITE;
/*!40000 ALTER TABLE `country_cards` DISABLE KEYS */;

INSERT INTO `country_cards` (`id`, `name`, `place`, `landmark`, `activity`, `food`)
VALUES
	(1,'England','Lulworth','Durdle Door','Walking','sea food'),
	(2,'France','Bordeaux','La cite du vin (wine museum)','Wine tasting','canelet'),
	(3,'Greece','Chios','Windmills','Snorkeling','mousaka'),
	(4,'Italy','Rome','Colloseum','Museums','pizza'),
	(5,'Spain','Costa del Sol','Marbella','Sailboat tour','paella');

/*!40000 ALTER TABLE `country_cards` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
