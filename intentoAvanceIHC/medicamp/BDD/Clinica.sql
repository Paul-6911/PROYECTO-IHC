-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: clinica
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
-- Table structure for table `administrativo`
--

DROP TABLE IF EXISTS `administrativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrativo` (
  `ID_Administrativo` int NOT NULL AUTO_INCREMENT,
  `Nombre_Administrativo` varchar(45) NOT NULL,
  `Apellido_Administrativo` varchar(45) NOT NULL,
  `Correo_Administrativo` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `DNI_Administrativo` varchar(45) NOT NULL,
  `Telefono_Administrativo` varchar(45) NOT NULL,
  `Genero_Administrativo` varchar(45) NOT NULL,
  `Contraseña_Administrativo` varchar(50) NOT NULL,
  `Trabajadores_ID_Trabajadores` int NOT NULL,
  PRIMARY KEY (`ID_Administrativo`,`Trabajadores_ID_Trabajadores`),
  KEY `fk_administrativo_Trabajadores1_idx` (`Trabajadores_ID_Trabajadores`),
  CONSTRAINT `fk_administrativo_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_Trabajadores`) REFERENCES `trabajadores` (`ID_Trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrativo`
--

LOCK TABLES `administrativo` WRITE;
/*!40000 ALTER TABLE `administrativo` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrativo` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`ID_Asegurado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asegurados`
--

LOCK TABLES `asegurados` WRITE;
/*!40000 ALTER TABLE `asegurados` DISABLE KEYS */;
/*!40000 ALTER TABLE `asegurados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atencion`
--

DROP TABLE IF EXISTS `atencion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atencion` (
  `ID_Atencion` int NOT NULL AUTO_INCREMENT,
  `ID_Doctor_Atencion` varchar(100) NOT NULL,
  `Nombre_Doctor_Atencion` varchar(100) NOT NULL,
  `Especialidad_Atencion` varchar(100) NOT NULL,
  `ID_Asegurado_Atencion` varchar(100) NOT NULL,
  `Nombre_Asegurado_Atencion` varchar(100) NOT NULL,
  `Apellido_Asegurado_Atencion` varchar(100) NOT NULL,
  `doctor_ID_Doctor` int NOT NULL,
  `doctor_Trabajadores_ID_Trabajadores` int NOT NULL,
  `asegurados_ID_Asegurado` int NOT NULL,
  PRIMARY KEY (`ID_Atencion`,`doctor_ID_Doctor`,`doctor_Trabajadores_ID_Trabajadores`,`asegurados_ID_Asegurado`),
  KEY `fk_Atencion_doctor1_idx` (`doctor_ID_Doctor`,`doctor_Trabajadores_ID_Trabajadores`),
  KEY `fk_Atencion_asegurados1_idx` (`asegurados_ID_Asegurado`),
  CONSTRAINT `fk_Atencion_asegurados1` FOREIGN KEY (`asegurados_ID_Asegurado`) REFERENCES `asegurados` (`ID_Asegurado`),
  CONSTRAINT `fk_Atencion_doctor1` FOREIGN KEY (`doctor_ID_Doctor`, `doctor_Trabajadores_ID_Trabajadores`) REFERENCES `doctor` (`ID_Doctor`, `Trabajadores_ID_Trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atencion`
--

LOCK TABLES `atencion` WRITE;
/*!40000 ALTER TABLE `atencion` DISABLE KEYS */;
/*!40000 ALTER TABLE `atencion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctor` (
  `ID_Doctor` int NOT NULL AUTO_INCREMENT,
  `Nombre_Doctor` varchar(45) NOT NULL,
  `Apellido_Doctor` varchar(45) NOT NULL,
  `Correo_Doctor` varchar(50) NOT NULL,
  `Especialidad` varchar(100) NOT NULL,
  `DNI_Doctor` varchar(45) NOT NULL,
  `Telefono_Doctor` varchar(45) NOT NULL,
  `Genero_Doctor` varchar(45) NOT NULL,
  `Contraseña_Doctor` varchar(50) NOT NULL,
  `Doctorcol` varchar(45) NOT NULL,
  `Trabajadores_ID_Trabajadores` int NOT NULL,
  PRIMARY KEY (`ID_Doctor`,`Trabajadores_ID_Trabajadores`),
  KEY `fk_doctor_Trabajadores1_idx` (`Trabajadores_ID_Trabajadores`),
  CONSTRAINT `fk_doctor_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_Trabajadores`) REFERENCES `trabajadores` (`ID_Trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

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
  `asegurados_ID_Asegurado` int NOT NULL,
  PRIMARY KEY (`ID_Fallecidos`,`asegurados_ID_Asegurado`),
  KEY `fk_fallecidos_asegurados1_idx` (`asegurados_ID_Asegurado`),
  CONSTRAINT `fk_fallecidos_asegurados1` FOREIGN KEY (`asegurados_ID_Asegurado`) REFERENCES `asegurados` (`ID_Asegurado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fallecidos`
--

LOCK TABLES `fallecidos` WRITE;
/*!40000 ALTER TABLE `fallecidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fallecidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajadores` (
  `ID_Trabajadores` int NOT NULL AUTO_INCREMENT,
  `Nombre_Trabajadores` varchar(100) NOT NULL,
  `Area_O_Especialidad_Trabajadores` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajadores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-27 11:03:35
