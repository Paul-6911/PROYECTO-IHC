

DROP TABLE IF EXISTS `administrativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrativo` (
  `ID_Administrativo` int NOT NULL AUTO_INCREMENT,
  `Nombre_Administrativo` varchar(45) ,
  `Apellido_Administrativo` varchar(45) ,
  `Correo_Administrativo` varchar(50) ,
  `Area` varchar(50) ,
  `DNI_Administrativo` varchar(45),
  `Telefono_Administrativo` varchar(45) ,
  `Genero_Administrativo` varchar(45) ,
  `Contraseña_Administrativo` varchar(50) ,
  `Trabajadores_ID_Trabajadores` int ,
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
  `Nombre_Asegurado` varchar(45) ,
  `Apellido_Asegurado` varchar(45) ,
  `DNI_Asegurado` varchar(45) ,
  `Telefono_Asegurado` varchar(45) ,
  `Genero_Asegurado` varchar(45) ,
  `Fecha_de_Nacimineto_Asegurado` date ,
  `Distrito_Asegurado` varchar(45)L,
  `Direccion_Asegurado` varchar(45) ,
  `Correo_Asegurado` varchar(50)  ,
  `Contraseña_Asegurado` varchar(50) ,
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
  `ID_Doctor_Atencion` varchar(100) ,
  `Nombre_Doctor_Atencion` varchar(100) ,
  `Especialidad_Atencion` varchar(100) ,
  `ID_Asegurado_Atencion` varchar(100) ,
  `Nombre_Asegurado_Atencion` varchar(100) ,
  `Apellido_Asegurado_Atencion` varchar(100) ,
  PRIMARY KEY (`ID_Atencion`,`doctor_ID_Doctor`,`doctor_Trabajadores_ID_Trabajadores`,`asegurados_ID_Asegurado`),
  KEY `fk_Atencion_doctor1_idx` (`doctor_ID_Doctor`,`doctor_Trabajadores_ID_Trabajadores`),
  KEY `fk_Atencion_asegurados1_idx` (`asegurados_ID_Asegurado`),
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
  `Nombre_Doctor` varchar(45) ,
  `Apellido_Doctor` varchar(45) ,
  `Correo_Doctor` varchar(50),
  `Especialidad` varchar(100) ,
  `DNI_Doctor` varchar(45) ,
  `Telefono_Doctor` varchar(45) ,
  `Genero_Doctor` varchar(45) ,
  `Contraseña_Doctor` varchar(50) ,
  `Trabajadores_ID_Trabajadores` ,
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
  `Nombre_Fallecidos` varchar(45),
  `Apellido_Fallecidos` varchar(45) ,
  `DNI_Fallecidos` varchar(45) ,
  `Diagnostico_Fallecidos` varchar(45) ,
  `Genero_Fallecidos` varchar(45) ,
  `Fecha_de_Deseso_Fallecidos` date ,
  `Direccion_Fallecidos` varchar(45) ,
  `Distrito_Fallecidos` varchar(45) ,
  `Hospital_Fallecidos` varchar(45) ,
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
  `Nombre_Trabajadores` varchar(100) ,
  `Area_O_Especialidad_Trabajadores` varchar(100),
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

