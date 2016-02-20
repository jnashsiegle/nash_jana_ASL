# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: ASL
# Generation Time: 2016-02-20 18:31:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lists`;

CREATE TABLE `lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shoppingDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `lists` WRITE;
/*!40000 ALTER TABLE `lists` DISABLE KEYS */;

INSERT INTO `lists` (`id`, `user_id`, `title`, `description`, `shoppingDate`, `created_at`, `updated_at`)
VALUES
	(3,NULL,'This is JLSDESK Shopping list','turkey\r\nrolls','02/29/2016','2016-02-20 17:29:47','2016-02-20 17:29:47'),
	(4,NULL,'donald\'s birthday list','duck food','03/04/2016','2016-02-20 17:31:38','2016-02-20 18:13:02');

/*!40000 ALTER TABLE `lists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',2),
	('2016_02_10_202857_dusers',3),
	('2016_02_10_203338_users',4),
	('2016_02_10_210145_dropfbid',5),
	('2016_02_10_210340_dropfaceid',6),
	('2016_02_11_214906_create_social_accounts_table',7),
	('2016_02_11_223644_create_users_table',8),
	('2016_02_17_172722_create_lists_table',9);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('dduck@disney.com','6c6b54759fbc3e270c873e4f8cad5171a6764ed34b0bd9c1c46bcec257bee855','2016-02-13 22:37:18'),
	('quiet_seeker@hotmail.com','9c4afb41f152af021e53c3c80514c9811740215c11ca3b523dccdc2b205d9889','2016-02-13 23:05:05'),
	('sfaith@mymail.com','21d9b2eeaf8580423fc94fa50d681c8e13ec5d51aa26b8411d5f6888618dc139','2016-02-14 01:57:40');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table social_accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `social_accounts`;

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;

INSERT INTO `social_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`)
VALUES
	(16,'1749485865282419','facebook','2016-02-13 23:01:59','2016-02-13 23:01:59');

/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(2,'Donald Duck','dduck@disney.com','$2y$10$sFRNE7M/xc7UdLBbbHEBDuaF0vW3u14fERfKp47dAlJTxkF6Xu/VO','Dw1zRjGScaqY98OA3HGR3BIFkLqCgISwbdGlJARtxb5uOEHNoklJAl4QGqtX','2016-02-13 01:51:28','2016-02-20 17:31:44'),
	(3,'Mickey Mouse','mmouse@disney.world','$2y$10$v2m8B/IIhfCoGWd9CMIhIO2m4Y7JnLQtS5yVr3xSz5iYuxuKFqiMe','2Y4tF4JXsez0XeMUpvy17HuO9oo7DIgW1JFTtV62fhk3kzXn59bTqrKGIw0x','2016-02-13 02:01:18','2016-02-13 02:01:34'),
	(16,'Jana Siegle','jsiegle@jlsdesk.com','','8Go9oB2Ur1gtGp643zUj0jrwxf9cFJmLOSga4JiPrLRRV2xOwiSpeeB6rLyj','2016-02-13 23:01:59','2016-02-20 18:23:29'),
	(17,'Julie Douglas','quiet_seeker@hotmail.com','$2y$10$.hG1nSKIC7IgWp//uXWyn.m4KVe4Rj9e7K76uEZPAIpbR8kmUQ/VO','U5i4L00RhAcILWMtJ5n6UubPHlI5YWbLd6Muk2y7X0txavgpKu0SJ0Pisdlt','2016-02-13 23:04:01','2016-02-16 16:50:42'),
	(18,'Serenity Faith','sfaith@mymail.com','$2y$10$xc8gvi05l.ndu79Wa0R6regMKOrq/E//Dtr36tOrBN73rmTj6J2VS','ZqQtswavk7FeYvCLex6gSXwyhXES19vRWrWk5zgDbFRPdwVsHbtBGK62dLun','2016-02-14 01:57:26','2016-02-18 22:52:15'),
	(19,'Cassidy Marie','cmarie@mymail.com','$2y$10$WMBJcgVtMcWMNVSRYC6nYu7sse3e46Cod5Cr..53tOY0S5lG.nt6G',NULL,'2016-02-18 01:42:53','2016-02-18 01:42:53'),
	(20,'Sally Jones','jana@jlsdesk.com','$2y$10$P6HaQtb15SDUcFfMb49Toe2G/rZbUaLi5B/2WriPn6t8Iwy/Nsdnu','TAVu1JgxocnuHlFeCEcorSe8tYppZhIO0K8eEsXOjS9hpoEyQZfLhvM9MAjm','2016-02-18 20:06:42','2016-02-20 18:20:38'),
	(21,'Nia Gara','nia@mymail.com','$2y$10$v7.CovTc3P1AfDtxZxUFzOOIhtM.1QflPDNOeM1qYHr1HpdOa25sq','kXyskSbEsmU6Ur5JUf8b3mwtq2njct7dfJrcIr49p2aJwSBqconVTRqlEgvU','2016-02-20 17:39:52','2016-02-20 17:40:08'),
	(22,'Sara Jones','sj@mymail.com','$2y$10$PFLXxzkVoV9K1F/LBylbEeBuIXv.wTsHh02JpEC3QvQsQU0zE6WaG','6OyfqTEtdcXh5fd31nYKHMwnhy9gT2N0msjJaJcaJW7M5m2RzXpaDxqqOeko','2016-02-20 18:03:06','2016-02-20 18:03:27');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
