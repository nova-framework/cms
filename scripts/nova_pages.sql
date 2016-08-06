# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: novacms
# Generation Time: 2016-08-06 15:58:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table nova_pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_pages`;

CREATE TABLE `nova_pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `browserTitle` varchar(255) DEFAULT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `active` varchar(3) DEFAULT 'Yes',
  `content` text,
  `publishedDate` datetime DEFAULT NULL,
  `layout` varchar(255) DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nova_pages` WRITE;
/*!40000 ALTER TABLE `nova_pages` DISABLE KEYS */;

INSERT INTO `nova_pages` (`id`, `browserTitle`, `pageTitle`, `slug`, `active`, `content`, `publishedDate`, `layout`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Home','Home','home','Yes','Hello','2016-08-01 09:00:00','default','2016-08-01 21:11:24','2016-08-01 21:11:24',NULL),
	(2,'About Page','About','about','Yes','<p>About</p>\r\n\r\n<p><img alt=\"\" src=\"/ckeditor/fm/php/../../../files/nova.png\" style=\"width: 511px; height: 240px;\" /></p>\r\n','2016-08-01 09:00:00','default','2016-08-01 21:11:24','2016-08-06 16:36:36',NULL),
	(8,'Contact','Contact','contact','Yes','content','2016-08-03 10:00:00','default','2016-08-03 19:20:43','2016-08-03 19:38:45',NULL),
	(9,'Sevices','Sevices','sevices','Yes','content here....','2016-08-06 13:54:49','default','2016-08-06 13:58:45','2016-08-06 13:58:45',NULL),
	(10,'Info','Info','info','Yes','Info','2016-08-01 09:00:00','default','2016-08-06 14:07:50','2016-08-06 14:14:08',NULL);

/*!40000 ALTER TABLE `nova_pages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
