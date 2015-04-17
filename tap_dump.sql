-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: tapster
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `beerman_lib`
--

DROP TABLE IF EXISTS `beerman_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beerman_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beerman_lib`
--

LOCK TABLES `beerman_lib` WRITE;
/*!40000 ALTER TABLE `beerman_lib` DISABLE KEYS */;
INSERT INTO `beerman_lib` VALUES (1,'Red Ale'),(3,'Fireside Chat');
/*!40000 ALTER TABLE `beerman_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ericd_lib`
--

DROP TABLE IF EXISTS `ericd_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ericd_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ericd_lib`
--

LOCK TABLES `ericd_lib` WRITE;
/*!40000 ALTER TABLE `ericd_lib` DISABLE KEYS */;
INSERT INTO `ericd_lib` VALUES (1,'Amber');
/*!40000 ALTER TABLE `ericd_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kyleL_lib`
--

DROP TABLE IF EXISTS `kyleL_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kyleL_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kyleL_lib`
--

LOCK TABLES `kyleL_lib` WRITE;
/*!40000 ALTER TABLE `kyleL_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `kyleL_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kyle_lib`
--

DROP TABLE IF EXISTS `kyle_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kyle_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kyle_lib`
--

LOCK TABLES `kyle_lib` WRITE;
/*!40000 ALTER TABLE `kyle_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `kyle_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_lib`
--

DROP TABLE IF EXISTS `t1_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t1_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_lib`
--

LOCK TABLES `t1_lib` WRITE;
/*!40000 ALTER TABLE `t1_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tap_users`
--

DROP TABLE IF EXISTS `tap_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tap_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `library` varchar(100) DEFAULT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_passphrase` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tap_users`
--

LOCK TABLES `tap_users` WRITE;
/*!40000 ALTER TABLE `tap_users` DISABLE KEYS */;
INSERT INTO `tap_users` VALUES (1,'beerman','214ebc26481ad573e71582661472444a','beerman_lib','',''),(2,'tseliot','e3a70eb6b69833b6abb578bd5e314c06','tseliot_lib','',''),(7,'thedude','dcd57558c87a690ae5fcb8930d55950a','thedude_lib','',''),(8,'ericd','fcea920f7412b5da7be0cf42b8c93759','ericd_lib','',''),(19,'tt','accc9105df5383111407fd5b41255e23','tt_lib','C','accc9105df5383111407fd5b41255e23');
/*!40000 ALTER TABLE `tap_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thedude_lib`
--

DROP TABLE IF EXISTS `thedude_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thedude_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thedude_lib`
--

LOCK TABLES `thedude_lib` WRITE;
/*!40000 ALTER TABLE `thedude_lib` DISABLE KEYS */;
INSERT INTO `thedude_lib` VALUES (5,'Brew Free! or Die'),(6,'(512) Bruin');
/*!40000 ALTER TABLE `thedude_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tseliot_lib`
--

DROP TABLE IF EXISTS `tseliot_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tseliot_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tseliot_lib`
--

LOCK TABLES `tseliot_lib` WRITE;
/*!40000 ALTER TABLE `tseliot_lib` DISABLE KEYS */;
INSERT INTO `tseliot_lib` VALUES (1,'Ginger Beer'),(2,'(512) ONE');
/*!40000 ALTER TABLE `tseliot_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tt_lib`
--

DROP TABLE IF EXISTS `tt_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tt_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tt_lib`
--

LOCK TABLES `tt_lib` WRITE;
/*!40000 ALTER TABLE `tt_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `tt_lib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vnath_lib`
--

DROP TABLE IF EXISTS `vnath_lib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vnath_lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vnath_lib`
--

LOCK TABLES `vnath_lib` WRITE;
/*!40000 ALTER TABLE `vnath_lib` DISABLE KEYS */;
/*!40000 ALTER TABLE `vnath_lib` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-17  3:03:28
