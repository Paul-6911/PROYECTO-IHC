-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asegurados`
--

DROP TABLE IF EXISTS `asegurados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asegurados` (
  `ID_Asegurado` int NOT NULL AUTO_INCREMENT,
  `Nombre_Asegurado` varchar(45) NOT NULL,
  `Apellido_Asegurado` varchar(45) NOT NULL,
  `DNI_Asegurado` varchar(45) NOT NULL,
  `Telefono_Asegurado` varchar(45) NOT NULL,
  `Genero_Asegurado` varchar(45) NOT NULL,
  `Fecha_de_Nacimineto_Asegurado` date NOT NULL,
  `Distrito_Asegurado` varchar(45) NOT NULL,
  `Direccion_Asegurado` varchar(45) NOT NULL,
  `Correo_Asegurado` varchar(50) NOT NULL,
  `Contraseña_Asegurado` varchar(50) NOT NULL,
  `Hospital_Asegurado` varchar(45) NOT NULL,
  `Hospital_ID_Hospital` int NOT NULL,
  PRIMARY KEY (`ID_Asegurado`,`Hospital_ID_Hospital`),
  KEY `fk_Asegurados_Hospital_idx` (`Hospital_ID_Hospital`),
  CONSTRAINT `fk_Asegurados_Hospital` FOREIGN KEY (`Hospital_ID_Hospital`) REFERENCES `hospital` (`ID_Hospital`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asegurados`
--

LOCK TABLES `asegurados` WRITE;
/*!40000 ALTER TABLE `asegurados` DISABLE KEYS */;
/*!40000 ALTER TABLE `asegurados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-27  2:44:35
