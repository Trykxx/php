-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: library_db
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `pays_origine` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Hemingway','Ernest','USA','1899-07-21'),(2,'Tolstoï','Léon','Russie','1828-09-09'),(3,'Austen','Jane','Royaume-Uni','1775-12-16'),(4,'Marquez','Gabriel Garcia','Colombie','1927-03-06');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `annee_parution` year(4) DEFAULT NULL,
  `id_auteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_auteur` (`id_auteur`),
  CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `author` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'The Old Man and the Sea','A classic novella about an old fisherman\'s struggle with a marlin.',1952,1),(2,'For Whom the Bell Tolls','An exploration of honor, sacrifice, and love during the Spanish Civil War.',1940,1),(3,'War and Peace','Epic novel set during the Napoleonic Wars in Russia.',0000,2),(4,'Anna Karenina','Tragic love story of a married aristocrat and her affair with the affluent Count Vronsky.',0000,2),(5,'Pride and Prejudice','Romantic novel revolving around the lives of the Bennet sisters.',0000,3),(6,'Sense and Sensibility','A tale of two sisters and their contrasting personalities in love and life.',0000,3),(7,'One Hundred Years of Solitude','Magical realist novel chronicling the Buendía family over generations.',1967,4),(8,'Love in the Time of Cholera','Story of unrequited love and enduring passion over decades.',1985,4),(9,'Chronicle of a Death Foretold','Investigation into the circumstances surrounding a murder in a small Colombian town.',1981,4),(10,'Of Love and Other Demons','A tale of love, illness, and religious fervor set in 18th-century South America.',1994,4),(11,'rererere','rererer',1906,2),(12,'rererere','rererer',1906,2),(13,'rererere','rererer',1906,2),(14,'a la bieng a la plage','c\'est l\'histoire de quand tu va a la plage et que tu es bieng a la plage',2008,4),(15,'Hunger games','Katniss est une fille courageuse qui décide de mettre sa vie en danger pour sa soeur, elle decide donc de se porter volontaire pour un jeu de la mort.',2010,2);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-28 16:17:41
