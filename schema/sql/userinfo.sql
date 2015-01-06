-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: thalounge
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.13.10.1

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
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(130) NOT NULL,
  `facebook` varchar(90) NOT NULL,
  `location` varchar(130) NOT NULL,
  `twitch` varchar(90) NOT NULL,
  `userid` int(11) NOT NULL,
  `vod` varchar(130) NOT NULL,
  `twitter` varchar(90) NOT NULL,
  `main` int(11) NOT NULL,
  `sponsor` varchar(90) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` int(11) NOT NULL,
  `friendcode` varchar(12) NOT NULL,
  `garpr` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (9,'','logan6694','Santa Cruz','xuaqua',2,'ZKsyg8iw5sk','logan6694',21,'Smash Lounge',36.985,-122,'123456789124',''),(10,'','MIOMPewPewU','Bay Area','pewpewu',3,'BMlxvpOhK7o','miom_pewpewu',14,'Melee it On Me',0,0,'123456789123','1'),(14,'','','NorCal','ikedota',19,'','Ikedota',23,'',39.682,-122,'0',''),(15,'','','Winnipeg','',23,'','',2,'',49.886,-97,'0',''),(17,'','','Fort Myers','mychemmeghan',24,'','imchemx',14,'',0,0,'0',''),(18,'','ObsoletePixel','Charlotte','ObsoletePixel',14,'2VEAGolWdHs','ObsoletePixel',14,'',35.165,-81,'103217111983',''),(19,'','William Macpherson','Victoria','bringster',25,'325Nbl98Mtc','@Reformational',14,'',48.387,-124,'180521825564',''),(20,'','','','',26,'','',1,'',39.648,-76,'',''),(21,'','','Oklahoma','',30,'','evan_drumm',23,'',0,0,'0',''),(22,'','','New Jersey','sigmelee',31,'fXulLugf94A','bubblerugs',14,'',40.722,-75,'0',''),(23,'','','','',40,'','',1,'',13.451,145,'',''),(24,'','','','SelcChaboi',42,'','SelcChaboi',24,'',45.445,-123,'0',''),(25,'','','Santa Cruz','ryanraygun',44,'','smishssbm',6,'',0,0,'0',''),(26,'','','New Orleans','jhanima',46,'','jondriggers',5,'',29.873,-90,'0',''),(27,'','','Germany, Frankfurt, Europe','TheArasz',33,'','TheArasz',14,'',50.095,9,'0',''),(28,'','','','',52,'','',2,'',0,0,'',''),(29,'','Santi Suri','Spartanburg SC','the_stomp',53,'','erikssuri',7,'',34.976,-82,'0',''),(30,'','','','',55,'','',13,'',0,0,'',''),(31,'','','San Luis Obispo/San Francisco','slosmashcommunity',56,'o7vrS5c-IBg','suzarya',18,'',0,0,'0',''),(32,'','','','',57,'','',6,'',0,0,'',''),(33,'','','Santa Cruz','',58,'','dspagharion',14,'Smash Lounge',37.011,-122,'0',''),(34,'','','Santa Cruz','',59,'','dspagharion',6,'',0,0,'',''),(35,'','','New Jersey','',60,'','pantsnameguy',25,'',40.313,-74,'',''),(36,'','valeriani','San Luis Obispo','slosmashcommunity',62,'','M_Valeriani',2,'',35.285,-121,'0','');
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-06 17:51:43
