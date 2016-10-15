# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: novacms
# Generation Time: 2016-10-15 11:37:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table nova_global_blocks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_global_blocks`;

CREATE TABLE `nova_global_blocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nova_global_blocks` WRITE;
/*!40000 ALTER TABLE `nova_global_blocks` DISABLE KEYS */;

INSERT INTO `nova_global_blocks` (`id`, `title`, `type`, `content`)
VALUES
	(1,'Phone Number','input',''),
	(2,'Footer','input',''),
	(3,'Header Nav','input','[main-menu]');

/*!40000 ALTER TABLE `nova_global_blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_menus`;

CREATE TABLE `nova_menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `nova_menus` WRITE;
/*!40000 ALTER TABLE `nova_menus` DISABLE KEYS */;

INSERT INTO `nova_menus` (`id`, `title`, `tag`, `type`, `content`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Main Menu','[main-menu]','Bootstrap','[{\"slug\":\"/\",\"title\":\"Home\",\"id\":1476530631338},{\"slug\":\"/about\",\"title\":\"About\",\"id\":1476530631340},{\"slug\":\"/contact\",\"title\":\"Contact\",\"id\":1476530631342},{\"slug\":\"/sevices\",\"title\":\"Sevices\",\"id\":1476530631344}]','2016-10-15 12:12:15','2016-10-15 12:23:54',NULL);

/*!40000 ALTER TABLE `nova_menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_options`;

CREATE TABLE `nova_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(100) NOT NULL,
  `item` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `nova_options` WRITE;
/*!40000 ALTER TABLE `nova_options` DISABLE KEYS */;

INSERT INTO `nova_options` (`id`, `group`, `item`, `value`)
VALUES
	(1,'app','name','Nova CMS'),
	(2,'app','color_scheme','blue'),
	(3,'mail','driver','mail'),
	(4,'mail','host',''),
	(5,'mail','port','587'),
	(6,'mail','from.address','admin@novaframework.dev'),
	(7,'mail','from.name','The Nova Staff'),
	(8,'mail','encryption','tls'),
	(9,'mail','username',''),
	(10,'mail','password','');

/*!40000 ALTER TABLE `nova_options` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_page_blocks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_page_blocks`;

CREATE TABLE `nova_page_blocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pageID` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nova_page_blocks` WRITE;
/*!40000 ALTER TABLE `nova_page_blocks` DISABLE KEYS */;

INSERT INTO `nova_page_blocks` (`id`, `pageID`, `title`, `type`, `content`)
VALUES
	(1,1,'Sample Block','textarea',NULL),
	(2,1,'Social Media Info','textarea',NULL),
	(3,2,'Sample Block','textarea',NULL),
	(4,2,'Social Media Info','textarea',NULL),
	(5,9,'Sample Block','textarea',NULL),
	(6,9,'Social Media Info','textarea',NULL),
	(7,8,'Sample Block','textarea',NULL),
	(8,8,'Social Media Info','textarea',NULL);

/*!40000 ALTER TABLE `nova_page_blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_page_revisions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_page_revisions`;

CREATE TABLE `nova_page_revisions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pageID` int(11) DEFAULT NULL,
  `content` text,
  `addedBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
  `sidebars` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nova_pages` WRITE;
/*!40000 ALTER TABLE `nova_pages` DISABLE KEYS */;

INSERT INTO `nova_pages` (`id`, `browserTitle`, `pageTitle`, `slug`, `active`, `content`, `publishedDate`, `layout`, `sidebars`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Home','Home',NULL,'Yes','<p>Hello Right OK!!</p>\r\n','2016-08-01 09:00:00','default','3,1','2016-08-01 20:11:24','2016-10-15 12:23:28',NULL),
	(2,'About Page','About','about','Yes','<p>About</p>\r\n','2016-08-01 09:00:00','default','1','2016-08-01 20:11:24','2016-08-20 10:59:35',NULL),
	(8,'Contact','Contact','contact','Yes','content','2016-08-03 10:00:00','default',NULL,'2016-08-03 18:20:43','2016-08-03 18:38:45',NULL),
	(9,'Sevices','Sevices','sevices','Yes','content here....','2016-08-06 13:54:49','default',NULL,'2016-08-06 12:58:45','2016-08-06 12:58:45',NULL);

/*!40000 ALTER TABLE `nova_pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_password_reminders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_password_reminders`;

CREATE TABLE `nova_password_reminders` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `email` (`email`),
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table nova_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_roles`;

CREATE TABLE `nova_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(40) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `nova_roles` WRITE;
/*!40000 ALTER TABLE `nova_roles` DISABLE KEYS */;

INSERT INTO `nova_roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'Root','root','Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.','2016-06-05 01:48:00','2016-06-05 01:48:00'),
	(2,'Administrator','administrator','Full access to create, edit, and update companies, and orders.','2016-06-05 01:48:00','2016-06-05 01:48:00'),
	(3,'Manager','manager','Ability to create new companies and orders, or edit and update any existing ones.','2016-06-05 01:48:00','2016-06-05 01:48:00'),
	(4,'Company Manager','company-manager','Able to manage the company that the user belongs to, including adding sites, creating new users and assigning licences.','2016-06-05 01:48:00','2016-06-05 01:48:00'),
	(5,'User','user','A standard user that can have a licence assigned to them. No administrative features.','2016-06-05 01:48:00','2016-06-05 01:48:00');

/*!40000 ALTER TABLE `nova_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_sidebars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_sidebars`;

CREATE TABLE `nova_sidebars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `position` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nova_sidebars` WRITE;
/*!40000 ALTER TABLE `nova_sidebars` DISABLE KEYS */;

INSERT INTO `nova_sidebars` (`id`, `title`, `content`, `position`, `class`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Contact ','<p>hello contact.</p>\r\n','Right','randomclass','2016-08-20 10:28:02','2016-08-20 11:10:56',NULL),
	(3,'Services','<p>Services</p>\r\n','Left','','2016-08-20 10:38:44','2016-08-20 10:43:35',NULL);

/*!40000 ALTER TABLE `nova_sidebars` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nova_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nova_users`;

CREATE TABLE `nova_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `activation_code` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `nova_users` WRITE;
/*!40000 ALTER TABLE `nova_users` DISABLE KEYS */;

INSERT INTO `nova_users` (`id`, `role_id`, `username`, `password`, `realname`, `email`, `active`, `activation_code`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,1,'admin','$2y$10$MZpxcVZpwTCCotIkkfPP5O1sDC7GiKzD9klh4MoM/aE44YaVm4Xga','Administrator','admin@novaframework.dev',1,NULL,'6HF7E7PMtxzTt7k31FuA65cMUPQZq3bo1RVCqLVetg1H6r3NpLE8iQiyLmQY','2016-06-03 10:15:00','2016-08-20 22:30:24');

/*!40000 ALTER TABLE `nova_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
