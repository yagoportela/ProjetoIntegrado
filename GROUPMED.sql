-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: GROUPMED
-- ------------------------------------------------------
-- Server version 5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(9) NOT NULL,
  `tipo_logradouro` varchar(50) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_fornecedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_endereco` (`id_cliente`),
  KEY `fk_fornecedor_endereco` (`id_fornecedor`),
  CONSTRAINT `fk_endereco_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `customers` (`id`),
  CONSTRAINT `fk_fornecedor_endereco` FOREIGN KEY (`id_fornecedor`) REFERENCES `providers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'07991-010','rua','rosemary ferreira','6589','','jd rosa','morato','sp',NULL,16),(2,'07991-080','rua','skjdhf','798','','kjhkjh','kjhkjh','sp',NULL,17),(4,'07090-000','rua','hjkhkjh','kjhkjh','kjkjh','kjjkh','kjhkjh','sp',NULL,3),(5,'07090-000','tut','hkjh','kjh','kjh','kjh','kjh','rj',NULL,4),(6,'09284899','iouou','oiuoiu','oiuiou','uoiu','oiuoiu','ouoiu','sp',9,NULL),(7,'0-9-09','ipoipi','poipo','poipoi','poiopi','poiopi','poii','oo',10,NULL),(8,'9-90-9','hsdjfkh','kjhkjshdf','kjhkjh','kjhkjh','kjhkjh','kjh','uh',NULL,18),(9,'07991010','huru','hjkh','hjkh','hkjh','kjhkjkjh','hkjh','hj',11,NULL),(10,'987987','9878','87979','787','9797','98','hkjh','hj',12,NULL);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) DEFAULT NULL,
  `cnpj` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'teste','testando','239874544','teste@teste.com.br',NULL),(2,'teste','testendo','757657','tesete@teste.com.br',NULL),(3,'mouse','jerry','987987','jerry@mouse.com','2017-06-11'),(4,'tom','tom the cat','098098','tom@cat.com','2017-06-11'),(5,'kljklj','jlkj','lkjlj','lkjk@nckjshdf.com','2017-06-11'),(6,'sndfsnm',',mn,mn','jlkjlkj','jkjlk@jljk.com','2017-06-11'),(7,'sdfsmdnf,m','n,slkdfjlskdfj','lskdjflskdjf','lkjlksjdf@jdjfjjf.com','2017-06-11'),(8,'lkjlkjlkj','lkjkj','lkjlk','lkjkkk@hjhdkh.com','2017-06-11'),(9,'brutus','brutao','2394872897','brutao@hotmail.com','2017-06-11'),(10,'popeye','olivia','8797987','popeye@sdfsdf.com','2017-06-11'),(11,'TestenewTeste','Teste','748929220','Teste@Teste.com','2017-06-11'),(12,'Teste pai da kat','pai da kat e da ana julia','29387423','papai@pai.com.br','2017-06-12');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_fornecedor` int(11) DEFAULT NULL,
  `usuario` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `permissao` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_id_cliente` (`id_cliente`),
  KEY `fk_id_fornecedor` (`id_fornecedor`),
  CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `customers` (`id`),
  CONSTRAINT `fk_id_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `providers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (2,NULL,3,'pudim','$2y$10$FhQqpMrxX8zeotBmN4ahCeJJRI4WPYzFVibJe7mKyQhWk7lRKn5US',1),(3,NULL,4,'bala','$2y$10$dmtlb98A8JW/dtea5HxU3O4zRW/2F9G4gF9UtO6ZESQq2nOaKgoIO',1),(4,NULL,NULL,'brutus','$2y$10$PB0Ch.MDav.9unYRKZtJHuBXA080QuWyu.YbN608qTgaI/mjmLs8i',1),(5,10,NULL,'popeye','$2y$10$XFYKFY1dWGmwZnC5Dymq8uomkdBhrdQx./UGVlin1YJKNlk7n1uKm',1),(6,NULL,18,'forne','$2y$10$hulsMnf0uLbpSDrIMex3QuupTVXK1Ba1S420zYEEMJUp/J8fd7EkG',2),(7,11,NULL,'Teste','$2y$10$f6lVm3pzNE7bv0UGhjr0COPj.mfNXeKh5b3ewV9w110FwlI0aGkBS',1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco_custo` double NOT NULL,
  `preco_venda` double NOT NULL,
  `peso_bruto` double NOT NULL,
  `peso_liquido` double NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `quantiade` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `informacoes_adicionais` text,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fornecedor` (`id_fornecedor`),
  KEY `fk_produto_categoria` (`id_categoria`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categories` (`id`),
  CONSTRAINT `fk_produto_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `providers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `providers`
--

DROP TABLE IF EXISTS `providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) DEFAULT NULL,
  `cnpj` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `providers`
--

LOCK TABLES `providers` WRITE;
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT INTO `providers` VALUES (1,'teste de fornecedor','testando o fornecedor','1234567890','teste@fornecedor.com.br','2017-06-11'),(2,'jhghjg','gjhgjh','67668686','jhghjjg@hkjhkjh.com','2017-06-11'),(3,'mais um teste','teste','68767867','teste@testes.com','2017-06-11'),(4,'teste','tuyt','tyut','Teste@Teste.com','2017-06-11'),(5,'sfhskdh','kjhkjh','kjhkj','Teste@Teste.com','2017-06-11'),(6,'sfhskdh','kjhkjh','kjhkj','Teste@Teste.com.br','2017-06-11'),(7,'testano endereco','teste de endereco','37262839390','endereco@teste.com','2017-06-11'),(8,'testeando endereco','teste','242346','tesete@teste.com.br.co','2017-06-11'),(9,'testeando endereco','teste','242346','tesete@teste.com.br.com','2017-06-11'),(10,'testeando endereco','teste','242346','tesete@teste.com.bt','2017-06-11'),(11,'abacate','abacate','2424','abacate@abacate.com','2017-06-11'),(12,'abacate','abacate','2424','abacate@abacate.com.br','2017-06-11'),(13,'mais um teste','slkdfjlkj','iuyiuyuiy','mas@mais.com','2017-06-11'),(14,'clkcvjclkj','lkjlkj','lkjlkjlkj','tshek@hdhd.com','2017-06-11'),(15,'novo','tes','khkjhkjh','novo@tete.com','2017-06-11'),(16,'novinho','novo','686876','novinho@tete.com','2017-06-11'),(17,'newTesteSoft','newTesteSoft','63899220','Teste@newTeste.com.br','2017-06-11'),(18,'forne','forni','873829292','fonr@forne.com','2017-06-11');
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_fornecedor` int(11) DEFAULT NULL,
  `usuario` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `permissao` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_user_cliente` (`id_cliente`),
  KEY `fk_user_fornecedor` (`id_fornecedor`),
  CONSTRAINT `fk_user_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `customers` (`id`),
  CONSTRAINT `fk_user_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `providers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,12,NULL,'teste','$2y$10$4AV9gVJ0YBaOSELTe8sq0OYvzXrxYp1n5EgHX0ZIYNiZRemFKi3mi',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-12 20:38:18