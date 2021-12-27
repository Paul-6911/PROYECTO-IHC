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
-- Table structure for table `fallecidos`
--

DROP TABLE IF EXISTS `fallecidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fallecidos` (
  `ID_Fallecidos` int NOT NULL,
  `Nombre_Fallecidos` varchar(45) NOT NULL,
  `Apellido_Fallecidos` varchar(45) NOT NULL,
  `DNI_Fallecidos` varchar(45) NOT NULL,
  `Diagnostico_Fallecidos` varchar(45) NOT NULL,
  `Genero_Fallecidos` varchar(45) NOT NULL,
  `Fecha_de_Deseso_Fallecidos` date NOT NULL,
  `Direccion_Fallecidos` varchar(45) NOT NULL,
  `Distrito_Fallecidos` varchar(45) NOT NULL,
  `Hospital_Fallecidos` varchar(45) NOT NULL,
  `Asegurados_ID_Asegurado` int NOT NULL,
  `Asegurados_Hospital_ID_Hospital` int NOT NULL,
  PRIMARY KEY (`ID_Fallecidos`,`Asegurados_ID_Asegurado`,`Asegurados_Hospital_ID_Hospital`),
  KEY `fk_Fallecidos_Asegurados1_idx` (`Asegurados_ID_Asegurado`,`Asegurados_Hospital_ID_Hospital`),
  CONSTRAINT `fk_Fallecidos_Asegurados1` FOREIGN KEY (`Asegurados_ID_Asegurado`, `Asegurados_Hospital_ID_Hospital`) REFERENCES `asegurados` (`ID_Asegurado`, `Hospital_ID_Hospital`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fallecidos`
--

LOCK TABLES `fallecidos` WRITE;
/*!40000 ALTER TABLE `fallecidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fallecidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-27  2:44:36
