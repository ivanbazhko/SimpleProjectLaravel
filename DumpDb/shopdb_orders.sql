CREATE DATABASE  IF NOT EXISTS `shopdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `shopdb`;
-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shopdb
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `complete` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,'Airbus A320neo x 10','Lina de Mir','ldm@doi.mumu','Larrysson Highway, 1627B, 143','Philadelphia','United States','Philadelphia Intl',1150000000,1,'2020-10-13 10:21:56','2020-10-13 10:23:03'),(3,'Pilatus PC-12NGX x 40','admin','admin@admin.com','Serrey Street 78, 887','South Lake Tahoe','United States','South Lake Tahoe',212000000,0,'2020-10-13 11:15:11','2020-10-13 11:15:11'),(4,'Boeing 777-8X x 25','Lina de Mir','ldm@doi.mumu','Serrey Street 78, 885','South Lake Tahoe','United States','San Francisco Intl',11100000000,0,'2020-10-13 11:18:03','2020-10-13 11:18:03'),(5,'Cessna 172 x 1','Lina de Mir','ldm@doi.mumu','Serrey Street 78, 885','South Lake Tahoe','United States','Half Moon Bay',300000,1,'2020-10-13 11:19:17','2020-10-13 11:26:06'),(6,'Airbus A320neo x 5; ATR 72 x 5; Pilatus PC-12NGX x 5; Sukhoi Superjet 100 x 5; Cessna 208 Grand Caravan x 5; CRJ 1000 x 5; Boeing 737 MAX 8 x 5','Lina de Mir','ldm@doi.mumu','Serrey Street 78, 885','South Lake Tahoe','United States','South Lake Tahoe',1780000000,0,'2020-10-13 11:22:04','2020-10-13 11:22:04'),(7,'Embraer 175-E2 x 3','Lina de Mir','ldm@doi.mumu','Serrey Street 78, 885','South Lake Tahoe','United States','South Lake Tahoe',180000000,0,'2020-10-13 12:35:25','2020-10-13 12:35:25'),(8,'Airbus A319neo x 8; Airbus A321-XLR x 7','Lina de Mir','ldm@doi.mumu','Serrey Street 78, 885','South Lake Tahoe','United States','South Lake Tahoe',3850000000,0,'2020-10-13 12:56:32','2020-10-13 12:59:34');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-15 19:09:59
