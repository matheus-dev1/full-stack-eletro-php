-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `data_inclusao` date NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'2020-10-14','geladeira','Geladeira Frost Free Brastemp Side Inverse 540 Litros',6389.00,5019.00,'imgs/geladeira1.jpeg'),(2,'2020-10-14','geladeira','Geladeira Brastemp Frost Free Evox',9519.00,5039.00,'imgs/geladeira2.jpeg'),(3,'2020-10-14','geladeira','Geladeira/Refrigerador Brastemp Frost Free Duplex',2799.00,2339.10,'imgs/geladeira3.jpeg'),(4,'2020-10-14','lavaloucas','Lava-louças Brastemp BLF10BB',3699.00,3329.00,'imgs/lava_pratos1.jpeg'),(5,'2020-10-14','microondas','Micro-ondas Electrolux MTD30',499.00,399.00,'imgs/microondas1.jpeg'),(6,'2020-10-14','microondas','Micro-ondas Midea 20L MTFB21',499.00,3270.00,'imgs/microondas2.jpeg'),(7,'2020-10-14','microondas','Microondas Midea 31L Branco Espelhado MTFE4 110V',494.00,343.00,'imgs/microondas3.jpeg'),(8,'2020-10-14','fogao','Fogão 4 Bocas Consul Branco',899.00,782.00,'imgs/fogao1.jpeg'),(9,'2020-10-14','fogao','Fogão À Gás 5 Bocas Atlas Agile Glass Tripla Chama Automático Preto',1249.00,1069.00,'imgs/fogao2.jpeg'),(10,'2020-10-14','lavaroupas','Lavadora de Roupas Brastemp BWK12AB 12Kg',2199.00,1779.00,'imgs/maquina_de_lavar_roupa1.jpeg'),(11,'2020-10-14','lavaroupas','Lavadora de Roupas Electrolux LAC13',1899.00,1599.00,'imgs/maquina_de_lavar_roupa2.jpeg'),(12,'2020-10-14','lavaroupas','Lavadora de Roupas Electrolux LAC12',3279.00,1690.00,'imgs/maquina_de_lavar_roupa3.jpeg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02  2:56:09
