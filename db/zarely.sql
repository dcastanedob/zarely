CREATE DATABASE  IF NOT EXISTS `oneclick_zarely` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `oneclick_zarely`;
-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: oneclick_zarely
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_nombre` varchar(45) NOT NULL,
  `cliente_apaterno` varchar(45) NOT NULL,
  `cliente_amaterno` varchar(45) NOT NULL,
  `cliente_rfc` varchar(45) DEFAULT NULL,
  `cliente_razonsocial` varchar(45) DEFAULT NULL,
  `cliente_callefiscal` varchar(45) DEFAULT NULL,
  `cliente_numerofiscal` varchar(45) DEFAULT NULL,
  `cliente_interiorfiscal` varchar(45) DEFAULT NULL,
  `cliente_coloniafiscal` varchar(45) DEFAULT NULL,
  `cliente_ciudadfiscal` varchar(45) DEFAULT NULL,
  `cliente_cpfiscal` varchar(45) DEFAULT NULL,
  `cliente_estadofiscal` varchar(45) DEFAULT NULL,
  `cliente_calle` varchar(45) DEFAULT NULL,
  `cliente_numero` varchar(45) DEFAULT NULL,
  `cliente_interior` varchar(45) DEFAULT NULL,
  `cliente_colonia` varchar(45) DEFAULT NULL,
  `cliente_cp` varchar(45) DEFAULT NULL,
  `cliente_ciudad` varchar(45) DEFAULT NULL,
  `cliente_estado` varchar(45) DEFAULT NULL,
  `cliente_tipo` enum('mayorista','general') NOT NULL,
  `cliente_fecharegistro` date NOT NULL COMMENT 'se setea con la fecha del sistema',
  `cliente_estatus` tinyint(1) NOT NULL,
  `cliente_credito` tinyint(4) NOT NULL,
  `cliente_limitecredito` decimal(15,5) DEFAULT NULL,
  `cliente_creditorestante` decimal(15,5) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Venta','al ','publico','adsf','adsf','jsdfk','324','243','Jasdf','Guadaljara','23432','Jalisco','Isla salinas','2422','2324','Jardines del sur','48599','Guadalajra','Jalisco','mayorista','2017-03-01',0,0,1000.00000,NULL),(2,'Armando','Alonso','Orozco','adsf','adsf','jsdfk','324','243','Jasdf','Guadaljara','23432','Jalisco','Isla salinas','2422','2324','Jardines del sur','48599','Guadalajra','Jalisco','mayorista','2017-03-01',0,1,1000.00000,33.00000),(4,'ToÃ±o','Garcia','Perez','73','3897834734897','89374','83749','837489374983748979847','3894789','37498','73489','7389478','asdf','234','234','79834','324','78933','7894793887','general','2017-04-27',0,1,2500.00000,2500.00000);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clienterelacionado`
--

DROP TABLE IF EXISTS `clienterelacionado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clienterelacionado` (
  `idclienterelacionado` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idclienteasociado` int(11) NOT NULL,
  PRIMARY KEY (`idclienterelacionado`),
  KEY `idcliente` (`idcliente`),
  KEY `idclienteasociado` (`idclienteasociado`),
  CONSTRAINT `idcliente_clienterelacionado` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idclienteasociado_clienterelacionado` FOREIGN KEY (`idclienteasociado`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clienterelacionado`
--

LOCK TABLES `clienterelacionado` WRITE;
/*!40000 ALTER TABLE `clienterelacionado` DISABLE KEYS */;
/*!40000 ALTER TABLE `clienterelacionado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `idcolor` int(11) NOT NULL AUTO_INCREMENT,
  `color_nombre` text NOT NULL,
  PRIMARY KEY (`idcolor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (2,'Rojo'),(3,'Verde'),(4,'Azul'),(5,'Negro'),(6,'Blanco'),(7,'VIOLETA'),(8,'Naranja'),(9,'Gris'),(10,'Plateado'),(11,'Beige'),(12,'Dorado');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comisiones`
--

DROP TABLE IF EXISTS `comisiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comisiones` (
  `idcomisiones` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `comisiones_cantidad` int(11) NOT NULL,
  `comisiones_fecha` date NOT NULL,
  PRIMARY KEY (`idcomisiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comisiones`
--

LOCK TABLES `comisiones` WRITE;
/*!40000 ALTER TABLE `comisiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `comisiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `compra_fechacreacion` date NOT NULL COMMENT 'fecha que se setea por default, de acuerdo a la hora del sistema',
  `compra_fechacompra` date NOT NULL COMMENT 'fecha que ingresa el usuario',
  `compra_total` decimal(10,5) NOT NULL,
  `compra_estatuspago` tinyint(1) NOT NULL,
  `compra_estatus` enum('pendiente','enviada','procesando','en transito','recibido','revisado') NOT NULL,
  `compra_nota` varchar(45) DEFAULT NULL,
  `compra_comprobante` varchar(45) DEFAULT NULL,
  `compra_fechaentrega` date DEFAULT NULL,
  PRIMARY KEY (`idcompra`),
  KEY `idproveedor` (`compra_fechacreacion`),
  KEY `idproveedor_compra_idx` (`idproveedor`),
  CONSTRAINT `idproveedor_compra` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES (25,12,'2017-05-02','2017-05-04',124.40000,1,'enviada','asdf','/files/compras/25.','2017-05-12'),(26,12,'2017-05-02','2017-05-06',124.40000,0,'procesando','asdf','/files/compras/25.','2017-05-12'),(27,12,'2017-05-02','2017-05-07',124.40000,1,'recibido','asdf','/files/compras/25.','2017-05-12');
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compradetalle`
--

DROP TABLE IF EXISTS `compradetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compradetalle` (
  `idcompradetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idcompra` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `compradetalle_cantidad` decimal(10,2) NOT NULL,
  `compradetalle_preciounitario` decimal(10,2) NOT NULL,
  `compradetalle_subtotal` decimal(10,2) NOT NULL,
  `compradetalle_costo` varchar(45) NOT NULL,
  PRIMARY KEY (`idcompradetalle`),
  KEY `idcompra` (`idcompra`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `idcompra_compradetalle` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_compradetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compradetalle`
--

LOCK TABLES `compradetalle` WRITE;
/*!40000 ALTER TABLE `compradetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `compradetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracion` (
  `idconfiguracion` int(11) NOT NULL AUTO_INCREMENT,
  `configuracion_` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idconfiguracion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracion`
--

LOCK TABLES `configuracion` WRITE;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cortecaja`
--

DROP TABLE IF EXISTS `cortecaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cortecaja` (
  `idcortecaja` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `idempleadoenvia` int(11) NOT NULL,
  `cortecaja_fecha` date NOT NULL,
  `cortecaja_total` decimal(15,5) NOT NULL,
  `cortecaja_efectivo` decimal(15,5) NOT NULL,
  `cortecaja_tarjetas` decimal(15,5) NOT NULL,
  `cortecaja_vales` decimal(15,5) NOT NULL,
  `cortecaja_enviado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcortecaja`),
  KEY `idsucursal` (`idsucursal`),
  KEY `idempleadoenvia` (`idempleadoenvia`),
  CONSTRAINT `idempleadoenvia_cortecaja` FOREIGN KEY (`idempleadoenvia`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_cortecaja` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cortecaja`
--

LOCK TABLES `cortecaja` WRITE;
/*!40000 ALTER TABLE `cortecaja` DISABLE KEYS */;
/*!40000 ALTER TABLE `cortecaja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuentabancaria`
--

DROP TABLE IF EXISTS `cuentabancaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuentabancaria` (
  `idcuentabancaria` int(11) NOT NULL AUTO_INCREMENT,
  `cuentabancaria_banco` varchar(255) NOT NULL,
  `cuentabancaria_cuenta` varchar(45) NOT NULL,
  `cuentabancaria_saldo` decimal(15,5) NOT NULL,
  PRIMARY KEY (`idcuentabancaria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentabancaria`
--

LOCK TABLES `cuentabancaria` WRITE;
/*!40000 ALTER TABLE `cuentabancaria` DISABLE KEYS */;
INSERT INTO `cuentabancaria` VALUES (3,'Bancomer','34234234',1000.00000),(4,'Santander','909547858',10000.00000);
/*!40000 ALTER TABLE `cuentabancaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuentabancariamovimiento`
--

DROP TABLE IF EXISTS `cuentabancariamovimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuentabancariamovimiento` (
  `idcuentabancariamovimiento` int(11) NOT NULL AUTO_INCREMENT,
  `idcuentabancaria` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `cuentabancariamovimiento_proceso` enum('compra','venta') NOT NULL,
  `idproceso` int(11) NOT NULL,
  `cuentabancariamovimiento_cantidad` decimal(10,2) NOT NULL,
  `cuentabancariamovimiento_comprobante` text,
  `cuentabancariamovimiento_fechamovimiento` datetime NOT NULL,
  `cuentabancariamovimiento_fechacreacion` datetime NOT NULL COMMENT 'este campo lo setea el sisteam',
  `cuentabancariamovimiento_balance` decimal(10,2) NOT NULL COMMENT 'el balance de la cuenta afectada después del movmiento\n',
  `cuentabancariamovimiento_referencia` varchar(45) DEFAULT NULL,
  `cuentabancariamovimiento_medio` enum('cheque','efectivo','transferencia') DEFAULT NULL,
  PRIMARY KEY (`idcuentabancariamovimiento`),
  KEY `idcuentabancaria` (`idcuentabancaria`),
  KEY `idempleado` (`idempleado`),
  CONSTRAINT `idcuentabancaria_cuentabancariamovimiento` FOREIGN KEY (`idcuentabancaria`) REFERENCES `cuentabancaria` (`idcuentabancaria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idempleado_cuentabancariamovimiento` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentabancariamovimiento`
--

LOCK TABLES `cuentabancariamovimiento` WRITE;
/*!40000 ALTER TABLE `cuentabancariamovimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuentabancariamovimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuento`
--

DROP TABLE IF EXISTS `descuento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descuento` (
  `iddescuento` int(11) NOT NULL AUTO_INCREMENT,
  `descuento_nombre` text NOT NULL,
  `descuento_fechainicio` date NOT NULL,
  `descuento_fechafin` date NOT NULL,
  `descuento_estatus` tinyint(1) NOT NULL,
  `descuento_tipo` enum('porcentaje','cantidad') NOT NULL,
  `descuento_descripcion` text,
  `descuento_cantidad` decimal(10,5) DEFAULT NULL,
  PRIMARY KEY (`iddescuento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuento`
--

LOCK TABLES `descuento` WRITE;
/*!40000 ALTER TABLE `descuento` DISABLE KEYS */;
INSERT INTO `descuento` VALUES (1,'2x1','2017-04-27','2017-05-11',1,'porcentaje','Los productos al 2x1',21.00000),(2,'10 Adidas','2017-05-04','2017-05-17',1,'porcentaje','Tiene un 10% de descuento adidas',10.00000);
/*!40000 ALTER TABLE `descuento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentodetalle`
--

DROP TABLE IF EXISTS `descuentodetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descuentodetalle` (
  `iddescuentodetalle` int(11) NOT NULL AUTO_INCREMENT,
  `iddescuento` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `idproductovariante` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddescuentodetalle`),
  KEY `iddescuento` (`iddescuento`),
  KEY `idproducto` (`idproducto`),
  KEY `idmarca` (`idmarca`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `iddescuento_descuentodetalle` FOREIGN KEY (`iddescuento`) REFERENCES `descuento` (`iddescuento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idmarca_descuentodetalle` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_descuentodetalle` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_descuentodetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuentodetalle`
--

LOCK TABLES `descuentodetalle` WRITE;
/*!40000 ALTER TABLE `descuentodetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `descuentodetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devolucion`
--

DROP TABLE IF EXISTS `devolucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devolucion` (
  `iddevolucion` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `devolucion_fecha` date NOT NULL,
  `devolucion_total` decimal(10,5) NOT NULL,
  `devolucion_estatus` enum('pendiente','completado') NOT NULL,
  `devolucion_nota` text,
  `devolucion_comprobante` text,
  PRIMARY KEY (`iddevolucion`),
  KEY `idproveedor` (`idproveedor`),
  CONSTRAINT `idproveedor_devolucion` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devolucion`
--

LOCK TABLES `devolucion` WRITE;
/*!40000 ALTER TABLE `devolucion` DISABLE KEYS */;
INSERT INTO `devolucion` VALUES (56,1,'2017-04-08',6.00000,'pendiente','sdfgasdfasdasdfadsf','/files/devoluciones/56.');
/*!40000 ALTER TABLE `devolucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devoluciondetalle`
--

DROP TABLE IF EXISTS `devoluciondetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devoluciondetalle` (
  `iddevoluciondetalle` int(11) NOT NULL AUTO_INCREMENT,
  `iddevolucion` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `devoluciondetalle_cantidad` decimal(10,2) NOT NULL,
  `devoluciondetalle_preciounitario` decimal(10,2) NOT NULL,
  `devoluciondetalle_subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`iddevoluciondetalle`),
  KEY `iddevolucion` (`iddevolucion`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `iddevolucion_devoluciondetalle` FOREIGN KEY (`iddevolucion`) REFERENCES `devolucion` (`iddevolucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_devoluciondetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devoluciondetalle`
--

LOCK TABLES `devoluciondetalle` WRITE;
/*!40000 ALTER TABLE `devoluciondetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `devoluciondetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_nombre` varchar(45) NOT NULL,
  `empleado_apaterno` varchar(45) NOT NULL,
  `empleado_amaterno` varchar(45) NOT NULL,
  `empleado_rfc` varchar(45) DEFAULT NULL,
  `empleado_nss` varchar(45) DEFAULT NULL,
  `empleado_curp` varchar(45) DEFAULT NULL,
  `empleado_telefono` varchar(45) DEFAULT NULL,
  `empleado_email` varchar(45) DEFAULT NULL,
  `empleado_estatus` tinyint(1) NOT NULL,
  `empleado_username` varchar(45) NOT NULL,
  `empleado_password` varchar(45) NOT NULL,
  `empleado_comision` tinyint(1) NOT NULL,
  `empleado_fechaentrada` datetime NOT NULL,
  `empleado_fechanacimiento` date NOT NULL,
  `empleado_calle` varchar(45) DEFAULT NULL,
  `empleado_numexterno` varchar(45) DEFAULT NULL,
  `empleado_numinterno` varchar(45) DEFAULT NULL,
  `empleado_colonia` varchar(45) DEFAULT NULL,
  `empleado_codigopostal` varchar(45) DEFAULT NULL,
  `empleado_ciudad` varchar(45) DEFAULT NULL,
  `empleado_estado` varchar(45) DEFAULT NULL,
  `idrol` int(11) DEFAULT NULL,
  PRIMARY KEY (`idempleado`),
  KEY `idrol` (`idrol`),
  CONSTRAINT `idrol_empleado` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES (1,'Armando Caja','Alonso','-Orozco','wf23fa','ajlksdf','asldjkf','3317238689','arm_chiva@hotmail.com',1,'armandoalonso','asdf',0,'2017-02-15 14:29:25','1996-04-18','Fletes','260','234','La AscenciÃ²n','48500','Cocula','Jalisco',4),(2,'Juan vendedor','Alonso','-Orozco','wf23fa','ajlksdf','asldjkf','3317238689','adsf',1,'caja','e10adc3949ba59abbe56e057f20f883e',0,'2017-02-15 11:48:27','1996-04-18','Fletes','260','234','La AscenciÃ²n','48500','Cocula','Jalisco',4),(3,'Petra vendedor','Hernandez','-Orozco','wf23fa','ajlksdf','asldjkf','3317238689','asdf',1,'secretaria a','e10adc3949ba59abbe56e057f20f883e',0,'2017-02-15 12:34:39','1996-04-18','Fletes','260','234','La AscenciÃ²n','48500','Cocula','Jalisco',2),(4,'Armando ','Alonso','-Orozco','wf23fa','ajlksdf','asldjkf','3317238689','arm_chiva@hotmail.com',1,'administrador','e10adc3949ba59abbe56e057f20f883e',0,'2017-02-15 10:43:34','1996-04-18','Fletes','260','234','La AscenciÃ²n','48500','Cocula','Jalisco',1),(5,'Armando ','Alonso','-Orozco',NULL,NULL,NULL,NULL,NULL,1,'secretaria b','e10adc3949ba59abbe56e057f20f883e',0,'2017-03-23 11:23:07','2017-03-23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3),(6,'Vendedor','Juarez','',NULL,NULL,NULL,NULL,NULL,0,'vendedora','e10adc3949ba59abbe56e057f20f883e',0,'0000-00-00 00:00:00','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,5),(7,'Armando ','Alonso','-Orozco','wf23fa','ajlksdf','asldjkf','3317238689','arm_chiva@hotmail.com',1,'administradorb','e10adc3949ba59abbe56e057f20f883e',0,'2017-02-15 10:43:34','1996-04-18','Fletes','260','234','La AscenciÃ²n','48500','Cocula','Jalisco',7);
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gasto`
--

DROP TABLE IF EXISTS `gasto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gasto` (
  `idgasto` int(11) NOT NULL AUTO_INCREMENT,
  `gasto_nombre` varchar(100) NOT NULL,
  `gasto_descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`idgasto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gasto`
--

LOCK TABLES `gasto` WRITE;
/*!40000 ALTER TABLE `gasto` DISABLE KEYS */;
INSERT INTO `gasto` VALUES (1,'Porcentual','se gastÃ² mucho en porcentaje');
/*!40000 ALTER TABLE `gasto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL AUTO_INCREMENT,
  `marca_nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'Converse'),(2,'Adidas'),(3,'Nike'),(4,'Jordan'),(5,'Si');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcatallaje`
--

DROP TABLE IF EXISTS `marcatallaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcatallaje` (
  `idmarcatallaje` int(11) NOT NULL AUTO_INCREMENT,
  `idmarca` int(11) NOT NULL,
  `idtallaje` int(11) NOT NULL,
  PRIMARY KEY (`idmarcatallaje`),
  KEY `idmarca` (`idmarca`),
  KEY `idtallaje` (`idtallaje`),
  CONSTRAINT `idmarca_marcatallaje` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtallaje_marcatallaje` FOREIGN KEY (`idtallaje`) REFERENCES `tallaje` (`idtallaje`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcatallaje`
--

LOCK TABLES `marcatallaje` WRITE;
/*!40000 ALTER TABLE `marcatallaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcatallaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `idmaterial` int(11) NOT NULL AUTO_INCREMENT,
  `material_nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaterial`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (2,'Piel'),(3,'Cuero');
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medida`
--

DROP TABLE IF EXISTS `medida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medida` (
  `idmedida` int(11) NOT NULL AUTO_INCREMENT,
  `medida_nombre` varchar(45) DEFAULT NULL,
  `medida_xs` tinyint(1) DEFAULT NULL,
  `medida_s` tinyint(1) DEFAULT NULL,
  `medida_m` tinyint(1) DEFAULT NULL,
  `medida_l` tinyint(1) DEFAULT NULL,
  `medida_xl` tinyint(1) DEFAULT NULL,
  `medida_xxl` tinyint(1) DEFAULT NULL,
  `medida_unitalla` tinyint(1) DEFAULT NULL,
  `medidasrango` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmedida`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medida`
--

LOCK TABLES `medida` WRITE;
/*!40000 ALTER TABLE `medida` DISABLE KEYS */;
INSERT INTO `medida` VALUES (7,'NiÃ±o',1,1,0,0,0,0,0,'xs - s');
/*!40000 ALTER TABLE `medida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `pedido_fecha` date NOT NULL,
  `idproducto` int(11) NOT NULL,
  `pedido_cantidad` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `pedido_nota` text,
  `pedido_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL DEFAULT 'pendiente',
  PRIMARY KEY (`idpedido`),
  KEY `idsucursal` (`idsucursal`),
  KEY `idproductovariante` (`idproductovariante`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `idproducto_pedido` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_pedido` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_pedido` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidomayorista`
--

DROP TABLE IF EXISTS `pedidomayorista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidomayorista` (
  `idpedidomayorista` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `pedidomayorista_fechasolicitud` date NOT NULL,
  `pedidomayorista_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
  `pedidomayorista_fechaentrega` date NOT NULL,
  `pedidomayorista_nota` text,
  PRIMARY KEY (`idpedidomayorista`),
  KEY `idcliente` (`idcliente`),
  CONSTRAINT `idcliente_pedidomayorista` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidomayorista`
--

LOCK TABLES `pedidomayorista` WRITE;
/*!40000 ALTER TABLE `pedidomayorista` DISABLE KEYS */;
INSERT INTO `pedidomayorista` VALUES (36,2,'2017-08-27','pendiente','2017-06-07','qwer'),(37,2,'2017-08-27','completado','2017-06-07','qwer'),(38,2,'2017-08-27','pendiente','2017-06-07','qwer');
/*!40000 ALTER TABLE `pedidomayorista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidomayoristadetalle`
--

DROP TABLE IF EXISTS `pedidomayoristadetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidomayoristadetalle` (
  `idpedidomayoristadetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idpedidomayorista` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `pedidomayoristadetalle_cantidad` int(11) NOT NULL,
  `pedidomayoristadetalle_estatus` enum('pendiente','solicitado','transito','completado','cancelado') NOT NULL,
  `pedidomayoristadetalle_fecha` date NOT NULL,
  PRIMARY KEY (`idpedidomayoristadetalle`),
  KEY `idpedidomayorista` (`idpedidomayorista`),
  KEY `idproducto_pedidomayoristadetalle_idx` (`idproducto`),
  KEY `idproductovariante_pedidomayoristadetalle_idx` (`idproductovariante`),
  CONSTRAINT `idpedidomayorista_pedidomayoristadetalle` FOREIGN KEY (`idpedidomayorista`) REFERENCES `pedidomayorista` (`idpedidomayorista`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_pedidomayoristadetalle` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_pedidomayoristadetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidomayoristadetalle`
--

LOCK TABLES `pedidomayoristadetalle` WRITE;
/*!40000 ALTER TABLE `pedidomayoristadetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidomayoristadetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosucursal`
--

DROP TABLE IF EXISTS `pedidosucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosucursal` (
  `idpedidosucursal` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `pedidosucursal_fechasolicitud` date NOT NULL,
  `pedidosucursal_fechaentrega` date NOT NULL,
  `pedidosucursal_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
  `pedidosucursal_nota` text,
  PRIMARY KEY (`idpedidosucursal`),
  KEY `idempleado` (`idempleado`),
  KEY `idsucursal` (`idsucursal`),
  CONSTRAINT `idempleado_pedidosucursal` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_pedidosucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosucursal`
--

LOCK TABLES `pedidosucursal` WRITE;
/*!40000 ALTER TABLE `pedidosucursal` DISABLE KEYS */;
INSERT INTO `pedidosucursal` VALUES (5,2,2,'2017-05-29','2017-05-31','pendiente','Hola a todosasdf'),(6,1,4,'2017-05-30','2017-06-06','completado','asdf');
/*!40000 ALTER TABLE `pedidosucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidosucursaldetalle`
--

DROP TABLE IF EXISTS `pedidosucursaldetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosucursaldetalle` (
  `idpedidosucursaldetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idpedidosucursal` int(11) NOT NULL,
  `idproductovariante` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `pedidosucursaldetalle_cantidad` int(11) DEFAULT NULL,
  `pedidosucursaldetalle_estatus` enum('pendiente','solicitado','transito','completado','cancelado') DEFAULT NULL,
  PRIMARY KEY (`idpedidosucursaldetalle`),
  KEY `idpedidosucursal` (`idpedidosucursal`),
  KEY `idproductovariante` (`idproductovariante`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `idpedidosucursal_pedidosucursaldetalle` FOREIGN KEY (`idpedidosucursal`) REFERENCES `pedidosucursal` (`idpedidosucursal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_pedidosucursaldetalle` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_pedidosucursaldetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosucursaldetalle`
--

LOCK TABLES `pedidosucursaldetalle` WRITE;
/*!40000 ALTER TABLE `pedidosucursaldetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidosucursaldetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `producto_modelo` varchar(100) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `idtemporada` int(11) NOT NULL,
  `producto_comisionable` tinyint(4) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `producto_dirigidoa` enum('dama','caballero','nino','nina','jovenes') NOT NULL,
  `producto_precioventa` decimal(15,5) NOT NULL,
  `producto_preciomayoreo` decimal(15,5) NOT NULL,
  `producto_minimo` int(11) NOT NULL,
  `producto_reorden` int(11) NOT NULL,
  `producto_maximo` int(11) DEFAULT NULL,
  `idtipocalzado` int(11) NOT NULL,
  `producto_descripcion` varchar(500) DEFAULT NULL,
  `producto_costo` decimal(10,5) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `idmarca` (`idmarca`),
  KEY `idtemporada` (`idtemporada`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idtipocalzado` (`idtipocalzado`),
  CONSTRAINT `idmarca_producto` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproveedor_producto` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtemporada_producto` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtipocalzado_producto` FOREIGN KEY (`idtipocalzado`) REFERENCES `tipocalzado` (`idtipocalzado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (116,'Nike Free Run',3,3,0,13,'caballero',899.00000,800.00000,10,10,NULL,4,NULL,1323.00000),(117,'Adidas Free Run',2,2,1,1,'nino',120.00000,120.00000,10,4,NULL,4,'El mejor',0.00000),(118,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(119,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(120,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(121,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(122,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(123,'sdf',1,1,0,1,'dama',32.00000,23.00000,234,23,NULL,4,NULL,0.00000),(124,'PRODUCTO DEMO 1',1,1,0,1,'dama',500.00000,400.00000,5,100,NULL,4,NULL,0.00000),(125,'PRODUCTO DEMO 2',1,1,0,1,'dama',500.00000,400.00000,5,100,NULL,4,NULL,0.00000),(126,'PRODUCTO DEMO 3',1,1,0,1,'dama',500.00000,400.00000,5,100,NULL,4,NULL,0.00000),(127,'PRODUCTO DEMO 4',1,1,0,1,'dama',500.00000,400.00000,100,100,NULL,4,NULL,0.00000),(128,'PRODUCTO DEMO 4',1,1,0,1,'dama',500.00000,400.00000,100,100,NULL,4,NULL,0.00000),(129,'Nike Deportivo',1,1,0,1,'dama',234.00000,423.00000,123,4,NULL,4,NULL,243.00000),(130,'Nike Deportivo',1,1,0,1,'dama',234.00000,423.00000,123,4,NULL,4,NULL,0.00000),(131,'Puma',4,1,0,1,'caballero',234.00000,343.00000,23,43,NULL,4,NULL,234.00000),(132,'Pruena',1,1,0,1,'jovenes',120.00000,120.00000,5,5,NULL,4,NULL,120.00000),(133,'Pruena',1,1,0,1,'jovenes',120.00000,120.00000,5,5,NULL,4,NULL,120.00000),(134,'Pruena',1,1,0,1,'jovenes',120.00000,120.00000,5,5,NULL,4,NULL,120.00000),(135,'Prueba 2',1,1,0,1,'dama',120.00000,120.00000,5,5,NULL,4,NULL,120.00000),(136,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(137,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(138,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(139,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(140,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(141,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(142,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(143,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(144,'Jordan',1,1,0,1,'dama',234.00000,324.00000,43,23,NULL,4,NULL,234.00000),(145,'Test 5',1,1,0,1,'dama',324.00000,342.00000,234,2147483647,NULL,4,NULL,99999.99999),(146,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(147,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(148,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(149,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(150,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(151,'Test 6',1,1,0,1,'dama',32.00000,890.00000,8932,893,NULL,4,NULL,38.00000),(152,'Test 6',1,1,0,1,'dama',89.00000,89.00000,89,898,NULL,4,NULL,99.00000),(153,'Test 6',1,1,0,1,'dama',89.00000,89.00000,89,898,NULL,4,NULL,99.00000),(154,'Test 6',1,1,0,1,'dama',89.00000,89.00000,89,898,NULL,4,NULL,99.00000),(155,'Test 6',1,1,0,1,'dama',89.00000,89.00000,89,898,NULL,4,NULL,99.00000),(156,'Running',3,4,0,13,'nino',100.00000,100.00000,100,100,NULL,4,NULL,100.00000),(157,'R783',5,15,0,12,'jovenes',1.00000,1.00000,1,1,NULL,4,NULL,1.00000);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productocolor`
--

DROP TABLE IF EXISTS `productocolor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productocolor` (
  `idproductocolor` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idcolor` int(11) NOT NULL,
  `productocolor_foto` text,
  PRIMARY KEY (`idproductocolor`),
  KEY `idproducto` (`idproducto`),
  KEY `idcolor` (`idcolor`),
  CONSTRAINT `idcolor_productocolor` FOREIGN KEY (`idcolor`) REFERENCES `color` (`idcolor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_productocolor` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=385 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productocolor`
--

LOCK TABLES `productocolor` WRITE;
/*!40000 ALTER TABLE `productocolor` DISABLE KEYS */;
INSERT INTO `productocolor` VALUES (309,117,2,'/img/productocolor/321.jpg'),(310,117,3,'/img/productocolor/322.jpg'),(311,123,2,'guenergygel.jpg'),(312,123,4,'guenergybanana.jpg'),(313,123,3,''),(314,124,2,''),(315,124,3,''),(316,125,2,NULL),(317,125,3,NULL),(318,126,2,'/img/productocolor/318.'),(319,126,3,'/img/productocolor/319.'),(320,127,2,NULL),(321,128,2,'/img/productocolor/321.jpg'),(322,128,3,'/img/productocolor/322.jpg'),(334,130,3,'/img/productocolor/334.'),(343,129,3,NULL),(344,116,3,NULL),(345,116,4,NULL),(346,116,5,NULL),(347,116,6,NULL),(348,131,3,'/img/productocolor/348.'),(349,132,2,'/img/productocolor/349.'),(350,132,3,'/img/productocolor/350.'),(351,133,2,'/img/productocolor/351.'),(352,133,3,'/img/productocolor/352.'),(353,134,2,'/img/productocolor/353.'),(354,134,3,'/img/productocolor/354.'),(355,135,3,'/img/productocolor/355.js'),(356,136,2,'/img/productocolor/356.'),(357,137,2,'/img/productocolor/357.'),(358,138,2,'/img/productocolor/358.'),(359,139,2,'/img/productocolor/359.'),(360,140,2,'/img/productocolor/360.'),(361,141,2,'/img/productocolor/361.'),(362,142,2,'/img/productocolor/362.'),(363,143,2,'/img/productocolor/363.'),(364,144,2,'/img/productocolor/364.'),(365,145,2,'/img/productocolor/365.'),(366,146,2,'/img/productocolor/366.'),(367,147,2,'/img/productocolor/367.'),(368,148,2,'/img/productocolor/368.'),(369,149,2,'/img/productocolor/369.'),(370,150,2,'/img/productocolor/370.'),(371,151,2,'/img/productocolor/371.'),(372,152,2,'/img/productocolor/372.'),(373,153,2,'/img/productocolor/373.'),(374,154,2,'/img/productocolor/374.'),(375,155,2,'/img/productocolor/375.'),(376,156,2,'/img/productocolor/376.'),(377,156,3,'/img/productocolor/377.'),(378,156,4,'/img/productocolor/378.'),(379,156,5,'/img/productocolor/379.'),(380,156,6,'/img/productocolor/380.'),(384,157,12,NULL);
/*!40000 ALTER TABLE `productocolor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productomaterial`
--

DROP TABLE IF EXISTS `productomaterial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productomaterial` (
  `idproductomaterial` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL,
  PRIMARY KEY (`idproductomaterial`),
  KEY `idproducto` (`idproducto`),
  KEY `idmaterial` (`idmaterial`),
  CONSTRAINT `idmaterial_productomaterial` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`idmaterial`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_productomaterial` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productomaterial`
--

LOCK TABLES `productomaterial` WRITE;
/*!40000 ALTER TABLE `productomaterial` DISABLE KEYS */;
INSERT INTO `productomaterial` VALUES (221,117,2),(222,118,2),(223,119,2),(224,120,2),(225,121,2),(226,122,2),(227,123,2),(228,124,2),(229,124,3),(230,125,2),(231,125,3),(232,126,2),(233,126,3),(234,127,2),(235,127,3),(236,128,2),(237,128,3),(245,130,3),(252,129,3),(253,116,2),(254,116,3),(255,131,3),(256,132,2),(257,133,2),(258,134,2),(259,135,2),(260,136,2),(261,137,2),(262,138,2),(263,139,2),(264,140,2),(265,141,2),(266,142,2),(267,143,2),(268,144,2),(269,145,2),(270,146,2),(271,147,2),(272,148,2),(273,149,2),(274,150,2),(275,151,2),(276,152,2),(277,153,2),(278,154,2),(279,155,2),(280,156,2),(283,157,3);
/*!40000 ALTER TABLE `productomaterial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productomedida`
--

DROP TABLE IF EXISTS `productomedida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productomedida` (
  `idproductomedida` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idmedida` int(11) NOT NULL,
  PRIMARY KEY (`idproductomedida`),
  KEY `idproducto` (`idproducto`),
  KEY `idmedida` (`idmedida`),
  CONSTRAINT `idmedida_productomedida` FOREIGN KEY (`idmedida`) REFERENCES `medida` (`idmedida`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_productomedida` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productomedida`
--

LOCK TABLES `productomedida` WRITE;
/*!40000 ALTER TABLE `productomedida` DISABLE KEYS */;
/*!40000 ALTER TABLE `productomedida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productosucursal`
--

DROP TABLE IF EXISTS `productosucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productosucursal` (
  `idproductosucursal` int(11) NOT NULL AUTO_INCREMENT,
  `idproductovariante` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `productosucursal_existencia` int(11) NOT NULL DEFAULT '0',
  `productosucursal_minimo` int(11) NOT NULL,
  `productosucursal_reorden` int(11) NOT NULL,
  `productosucursal_precioventa` decimal(10,5) NOT NULL,
  `productosucursal_preciomayoreo` decimal(10,5) NOT NULL,
  `productosucursal_estatus` tinyint(1) NOT NULL DEFAULT '1',
  `productosucursal_costo` decimal(10,5) NOT NULL,
  PRIMARY KEY (`idproductosucursal`),
  KEY `idproductovariante` (`idproductovariante`),
  KEY `idsucursal` (`idsucursal`),
  CONSTRAINT `idproductovariante_productosucursal` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_productosucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=387 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productosucursal`
--

LOCK TABLES `productosucursal` WRITE;
/*!40000 ALTER TABLE `productosucursal` DISABLE KEYS */;
INSERT INTO `productosucursal` VALUES (361,8818,1,0,1,1,1.00000,1.00000,1,1.00000),(362,8819,1,0,1,1,1.00000,1.00000,1,1.00000),(363,8820,1,0,1,1,1.00000,1.00000,1,1.00000),(364,8821,1,0,1,1,1.00000,1.00000,1,1.00000),(365,8822,1,0,1,1,1.00000,1.00000,1,1.00000),(366,8823,1,0,1,1,1.00000,1.00000,1,1.00000),(367,8824,1,0,1,1,1.00000,1.00000,1,1.00000),(368,8825,1,0,1,1,1.00000,1.00000,1,1.00000),(369,8826,1,0,1,1,1.00000,1.00000,1,1.00000),(370,8827,1,0,1,1,1.00000,1.00000,1,1.00000),(371,8828,1,0,1,1,1.00000,1.00000,1,1.00000),(372,8829,1,0,1,1,1.00000,1.00000,1,1.00000),(373,8830,1,0,1,1,1.00000,1.00000,1,1.00000),(374,8818,2,0,1,1,1.00000,1.00000,1,1.00000),(375,8819,2,0,1,1,1.00000,1.00000,1,1.00000),(376,8820,2,0,1,1,1.00000,1.00000,1,1.00000),(377,8821,2,0,1,1,1.00000,1.00000,1,1.00000),(378,8822,2,0,1,1,1.00000,1.00000,1,1.00000),(379,8823,2,0,1,1,1.00000,1.00000,1,1.00000),(380,8824,2,0,1,1,1.00000,1.00000,1,1.00000),(381,8825,2,0,1,1,1.00000,1.00000,1,1.00000),(382,8826,2,0,1,1,1.00000,1.00000,1,1.00000),(383,8827,2,0,1,1,1.00000,1.00000,1,1.00000),(384,8828,2,0,1,1,1.00000,1.00000,1,1.00000),(385,8829,2,0,1,1,1.00000,1.00000,1,1.00000),(386,8830,2,0,1,1,1.00000,1.00000,1,1.00000);
/*!40000 ALTER TABLE `productosucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productotallaje`
--

DROP TABLE IF EXISTS `productotallaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productotallaje` (
  `idproductotallaje` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idtallaje` int(11) NOT NULL,
  PRIMARY KEY (`idproductotallaje`),
  KEY `idproducto` (`idproducto`),
  KEY `idtallaje` (`idtallaje`),
  CONSTRAINT `idproducto_productotallaje` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtallaje_productotallaje` FOREIGN KEY (`idtallaje`) REFERENCES `tallaje` (`idtallaje`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productotallaje`
--

LOCK TABLES `productotallaje` WRITE;
/*!40000 ALTER TABLE `productotallaje` DISABLE KEYS */;
INSERT INTO `productotallaje` VALUES (3,157,8);
/*!40000 ALTER TABLE `productotallaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productovariante`
--

DROP TABLE IF EXISTS `productovariante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productovariante` (
  `idproductovariante` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idproductocolor` int(11) NOT NULL,
  `idproductomaterial` int(11) NOT NULL,
  `productovariante_codigobarras` varchar(45) DEFAULT NULL,
  `productovariante_talla` varchar(45) NOT NULL,
  `productovariante_tallatipo` enum('medida','numero','ninguno') DEFAULT NULL,
  `productovariante_estatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idproductovariante`),
  KEY `idproductocolor` (`idproductocolor`),
  KEY `idproductomaterial` (`idproductomaterial`),
  KEY `idproducto_productovariante_idx` (`idproducto`),
  CONSTRAINT `idproducto_productovariante` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductocolor_productovariante` FOREIGN KEY (`idproductocolor`) REFERENCES `productocolor` (`idproductocolor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductomaterial_productomaterial` FOREIGN KEY (`idproductomaterial`) REFERENCES `productomaterial` (`idproductomaterial`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8831 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productovariante`
--

LOCK TABLES `productovariante` WRITE;
/*!40000 ALTER TABLE `productovariante` DISABLE KEYS */;
INSERT INTO `productovariante` VALUES (6897,117,309,221,NULL,'26','numero',1),(6898,117,310,221,'adsf','26','numero',1),(6899,117,309,221,NULL,'26.5','numero',1),(6900,117,310,221,NULL,'26.5','numero',1),(6901,117,309,221,NULL,'27','numero',1),(6902,117,310,221,NULL,'27','numero',1),(6903,117,309,221,NULL,'27.5','numero',1),(6904,117,310,221,NULL,'27.5','numero',1),(6905,117,309,221,NULL,'28','numero',1),(6906,117,310,221,NULL,'28','numero',1),(6907,117,309,221,NULL,'28.5','numero',1),(6908,117,310,221,NULL,'28.5','numero',1),(6909,117,309,221,NULL,'29','numero',1),(6910,117,310,221,NULL,'29','numero',1),(6911,117,309,221,NULL,'29.5','numero',1),(6912,117,310,221,NULL,'29.5','numero',1),(6913,117,309,221,NULL,'30','numero',1),(6914,117,310,221,NULL,'30','numero',1),(6915,117,309,221,NULL,'7','numero',1),(6916,117,310,221,NULL,'7','numero',1),(6917,117,309,221,NULL,'7.5','numero',1),(6918,117,310,221,NULL,'7.5','numero',1),(6919,117,309,221,NULL,'8','numero',1),(6920,117,310,221,NULL,'8','numero',1),(6921,117,309,221,NULL,'8.5','numero',1),(6922,117,310,221,NULL,'8.5','numero',1),(6923,117,309,221,NULL,'9','numero',1),(6924,117,310,221,NULL,'9','numero',1),(6925,123,311,227,NULL,'19','numero',1),(6926,123,312,227,NULL,'19','numero',1),(6927,123,313,227,NULL,'19','numero',1),(6928,123,311,227,NULL,'19.5','numero',1),(6929,123,312,227,NULL,'19.5','numero',1),(6930,123,313,227,NULL,'19.5','numero',1),(6931,123,311,227,NULL,'20','numero',1),(6932,123,312,227,NULL,'20','numero',1),(6933,123,313,227,NULL,'20','numero',1),(6934,123,311,227,NULL,'20.5','numero',1),(6935,123,312,227,NULL,'20.5','numero',1),(6936,123,313,227,NULL,'20.5','numero',1),(6937,123,311,227,NULL,'21','numero',1),(6938,123,312,227,NULL,'21','numero',1),(6939,123,313,227,NULL,'21','numero',1),(6940,123,311,227,NULL,'21.5','numero',1),(6941,123,312,227,NULL,'21.5','numero',1),(6942,123,313,227,NULL,'21.5','numero',1),(6943,123,311,227,NULL,'22','numero',1),(6944,123,312,227,NULL,'22','numero',1),(6945,123,313,227,NULL,'22','numero',1),(6946,124,314,228,NULL,'19','numero',1),(6947,124,315,228,NULL,'19','numero',1),(6948,124,314,229,NULL,'19','numero',1),(6949,124,315,229,NULL,'19','numero',1),(6950,124,314,228,NULL,'19.5','numero',1),(6951,124,315,228,NULL,'19.5','numero',1),(6952,124,314,229,NULL,'19.5','numero',1),(6953,124,315,229,NULL,'19.5','numero',1),(6954,124,314,228,NULL,'20','numero',1),(6955,124,315,228,NULL,'20','numero',1),(6956,124,314,229,NULL,'20','numero',1),(6957,124,315,229,NULL,'20','numero',1),(6958,124,314,228,NULL,'20.5','numero',1),(6959,124,315,228,NULL,'20.5','numero',1),(6960,124,314,229,NULL,'20.5','numero',1),(6961,124,315,229,NULL,'20.5','numero',1),(6962,124,314,228,NULL,'21','numero',1),(6963,124,315,228,NULL,'21','numero',1),(6964,124,314,229,NULL,'21','numero',1),(6965,124,315,229,NULL,'21','numero',1),(6966,124,314,228,NULL,'21.5','numero',1),(6967,124,315,228,NULL,'21.5','numero',1),(6968,124,314,229,NULL,'21.5','numero',1),(6969,124,315,229,NULL,'21.5','numero',1),(6970,124,314,228,NULL,'22','numero',1),(6971,124,315,228,NULL,'22','numero',1),(6972,124,314,229,NULL,'22','numero',1),(6973,124,315,229,NULL,'22','numero',1),(6974,124,314,228,NULL,'19','numero',1),(6975,124,315,228,NULL,'19','numero',1),(6976,124,314,229,NULL,'19','numero',1),(6977,124,315,229,NULL,'19','numero',1),(6978,124,314,228,NULL,'19.5','numero',1),(6979,124,315,228,NULL,'19.5','numero',1),(6980,124,314,229,NULL,'19.5','numero',1),(6981,124,315,229,NULL,'19.5','numero',1),(6982,124,314,228,NULL,'20','numero',1),(6983,124,315,228,NULL,'20','numero',1),(6984,124,314,229,NULL,'20','numero',1),(6985,124,315,229,NULL,'20','numero',1),(6986,124,314,228,NULL,'20.5','numero',1),(6987,124,315,228,NULL,'20.5','numero',1),(6988,124,314,229,NULL,'20.5','numero',1),(6989,124,315,229,NULL,'20.5','numero',1),(6990,124,314,228,NULL,'21','numero',1),(6991,124,315,228,NULL,'21','numero',1),(6992,124,314,229,NULL,'21','numero',1),(6993,124,315,229,NULL,'21','numero',1),(6994,124,314,228,NULL,'21.5','numero',1),(6995,124,315,228,NULL,'21.5','numero',1),(6996,124,314,229,NULL,'21.5','numero',1),(6997,124,315,229,NULL,'21.5','numero',1),(6998,124,314,228,NULL,'22','numero',1),(6999,124,315,228,NULL,'22','numero',1),(7000,124,314,229,NULL,'22','numero',1),(7001,124,315,229,NULL,'22','numero',1),(7002,124,314,228,NULL,'22.5','numero',1),(7003,124,315,228,NULL,'22.5','numero',1),(7004,124,314,229,NULL,'22.5','numero',1),(7005,124,315,229,NULL,'22.5','numero',1),(7006,124,314,228,NULL,'23','numero',1),(7007,124,315,228,NULL,'23','numero',1),(7008,124,314,229,NULL,'23','numero',1),(7009,124,315,229,NULL,'23','numero',1),(7010,124,314,228,NULL,'23.5','numero',1),(7011,124,315,228,NULL,'23.5','numero',1),(7012,124,314,229,NULL,'23.5','numero',1),(7013,124,315,229,NULL,'23.5','numero',1),(7014,124,314,228,NULL,'24','numero',1),(7015,124,315,228,NULL,'24','numero',1),(7016,124,314,229,NULL,'24','numero',1),(7017,124,315,229,NULL,'24','numero',1),(7018,124,314,228,NULL,'24.5','numero',1),(7019,124,315,228,NULL,'24.5','numero',1),(7020,124,314,229,NULL,'24.5','numero',1),(7021,124,315,229,NULL,'24.5','numero',1),(7022,124,314,228,NULL,'25','numero',1),(7023,124,315,228,NULL,'25','numero',1),(7024,124,314,229,NULL,'25','numero',1),(7025,124,315,229,NULL,'25','numero',1),(7026,124,314,228,NULL,'25.5','numero',1),(7027,124,315,228,NULL,'25.5','numero',1),(7028,124,314,229,NULL,'25.5','numero',1),(7029,124,315,229,NULL,'25.5','numero',1),(7030,124,314,228,NULL,'26','numero',1),(7031,124,315,228,NULL,'26','numero',1),(7032,124,314,229,NULL,'26','numero',1),(7033,124,315,229,NULL,'26','numero',1),(7034,124,314,228,NULL,'26.5','numero',1),(7035,124,315,228,NULL,'26.5','numero',1),(7036,124,314,229,NULL,'26.5','numero',1),(7037,124,315,229,NULL,'26.5','numero',1),(7038,124,314,228,NULL,'27','numero',1),(7039,124,315,228,NULL,'27','numero',1),(7040,124,314,229,NULL,'27','numero',1),(7041,124,315,229,NULL,'27','numero',1),(7042,124,314,228,NULL,'27.5','numero',1),(7043,124,315,228,NULL,'27.5','numero',1),(7044,124,314,229,NULL,'27.5','numero',1),(7045,124,315,229,NULL,'27.5','numero',1),(7046,124,314,228,NULL,'28','numero',1),(7047,124,315,228,NULL,'28','numero',1),(7048,124,314,229,NULL,'28','numero',1),(7049,124,315,229,NULL,'28','numero',1),(7050,124,314,228,NULL,'28.5','numero',1),(7051,124,315,228,NULL,'28.5','numero',1),(7052,124,314,229,NULL,'28.5','numero',1),(7053,124,315,229,NULL,'28.5','numero',1),(7054,124,314,228,NULL,'29','numero',1),(7055,124,315,228,NULL,'29','numero',1),(7056,124,314,229,NULL,'29','numero',1),(7057,124,315,229,NULL,'29','numero',1),(7058,124,314,228,NULL,'29.5','numero',1),(7059,124,315,228,NULL,'29.5','numero',1),(7060,124,314,229,NULL,'29.5','numero',1),(7061,124,315,229,NULL,'29.5','numero',1),(7062,124,314,228,NULL,'30','numero',1),(7063,124,315,228,NULL,'30','numero',1),(7064,124,314,229,NULL,'30','numero',1),(7065,124,315,229,NULL,'30','numero',1),(7066,124,314,228,NULL,'30.5','numero',1),(7067,124,315,228,NULL,'30.5','numero',1),(7068,124,314,229,NULL,'30.5','numero',1),(7069,124,315,229,NULL,'30.5','numero',1),(7070,124,314,228,NULL,'31','numero',1),(7071,124,315,228,NULL,'31','numero',1),(7072,124,314,229,NULL,'31','numero',1),(7073,124,315,229,NULL,'31','numero',1),(7074,124,314,228,NULL,'31.5','numero',1),(7075,124,315,228,NULL,'31.5','numero',1),(7076,124,314,229,NULL,'31.5','numero',1),(7077,124,315,229,NULL,'31.5','numero',1),(7078,124,314,228,NULL,'32','numero',1),(7079,124,315,228,NULL,'32','numero',1),(7080,124,314,229,NULL,'32','numero',1),(7081,124,315,229,NULL,'32','numero',1),(7082,124,314,228,NULL,'32.5','numero',1),(7083,124,315,228,NULL,'32.5','numero',1),(7084,124,314,229,NULL,'32.5','numero',1),(7085,124,315,229,NULL,'32.5','numero',1),(7086,124,314,228,NULL,'33','numero',1),(7087,124,315,228,NULL,'33','numero',1),(7088,124,314,229,NULL,'33','numero',1),(7089,124,315,229,NULL,'33','numero',1),(7090,124,314,228,NULL,'33.5','numero',1),(7091,124,315,228,NULL,'33.5','numero',1),(7092,124,314,229,NULL,'33.5','numero',1),(7093,124,315,229,NULL,'33.5','numero',1),(7094,124,314,228,NULL,'34','numero',1),(7095,124,315,228,NULL,'34','numero',1),(7096,124,314,229,NULL,'34','numero',1),(7097,124,315,229,NULL,'34','numero',1),(7098,124,314,228,NULL,'34.5','numero',1),(7099,124,315,228,NULL,'34.5','numero',1),(7100,124,314,229,NULL,'34.5','numero',1),(7101,124,315,229,NULL,'34.5','numero',1),(7102,124,314,228,NULL,'35','numero',1),(7103,124,315,228,NULL,'35','numero',1),(7104,124,314,229,NULL,'35','numero',1),(7105,124,315,229,NULL,'35','numero',1),(7106,125,316,230,NULL,'19','numero',1),(7107,125,317,230,NULL,'19','numero',1),(7108,125,316,231,NULL,'19','numero',1),(7109,125,317,231,NULL,'19','numero',1),(7110,125,316,230,NULL,'19.5','numero',1),(7111,125,317,230,NULL,'19.5','numero',1),(7112,125,316,231,NULL,'19.5','numero',1),(7113,125,317,231,NULL,'19.5','numero',1),(7114,125,316,230,NULL,'20','numero',1),(7115,125,317,230,NULL,'20','numero',1),(7116,125,316,231,NULL,'20','numero',1),(7117,125,317,231,NULL,'20','numero',1),(7118,125,316,230,NULL,'20.5','numero',1),(7119,125,317,230,NULL,'20.5','numero',1),(7120,125,316,231,NULL,'20.5','numero',1),(7121,125,317,231,NULL,'20.5','numero',1),(7122,125,316,230,NULL,'21','numero',1),(7123,125,317,230,NULL,'21','numero',1),(7124,125,316,231,NULL,'21','numero',1),(7125,125,317,231,NULL,'21','numero',1),(7126,125,316,230,NULL,'21.5','numero',1),(7127,125,317,230,NULL,'21.5','numero',1),(7128,125,316,231,NULL,'21.5','numero',1),(7129,125,317,231,NULL,'21.5','numero',1),(7130,125,316,230,NULL,'22','numero',1),(7131,125,317,230,NULL,'22','numero',1),(7132,125,316,231,NULL,'22','numero',1),(7133,125,317,231,NULL,'22','numero',1),(7134,125,316,230,NULL,'19','numero',1),(7135,125,317,230,NULL,'19','numero',1),(7136,125,316,231,NULL,'19','numero',1),(7137,125,317,231,NULL,'19','numero',1),(7138,125,316,230,NULL,'19.5','numero',1),(7139,125,317,230,NULL,'19.5','numero',1),(7140,125,316,231,NULL,'19.5','numero',1),(7141,125,317,231,NULL,'19.5','numero',1),(7142,125,316,230,NULL,'20','numero',1),(7143,125,317,230,NULL,'20','numero',1),(7144,125,316,231,NULL,'20','numero',1),(7145,125,317,231,NULL,'20','numero',1),(7146,125,316,230,NULL,'20.5','numero',1),(7147,125,317,230,NULL,'20.5','numero',1),(7148,125,316,231,NULL,'20.5','numero',1),(7149,125,317,231,NULL,'20.5','numero',1),(7150,125,316,230,NULL,'21','numero',1),(7151,125,317,230,NULL,'21','numero',1),(7152,125,316,231,NULL,'21','numero',1),(7153,125,317,231,NULL,'21','numero',1),(7154,125,316,230,NULL,'21.5','numero',1),(7155,125,317,230,NULL,'21.5','numero',1),(7156,125,316,231,NULL,'21.5','numero',1),(7157,125,317,231,NULL,'21.5','numero',1),(7158,125,316,230,NULL,'22','numero',1),(7159,125,317,230,NULL,'22','numero',1),(7160,125,316,231,NULL,'22','numero',1),(7161,125,317,231,NULL,'22','numero',1),(7162,125,316,230,NULL,'22.5','numero',1),(7163,125,317,230,NULL,'22.5','numero',1),(7164,125,316,231,NULL,'22.5','numero',1),(7165,125,317,231,NULL,'22.5','numero',1),(7166,125,316,230,NULL,'23','numero',1),(7167,125,317,230,NULL,'23','numero',1),(7168,125,316,231,NULL,'23','numero',1),(7169,125,317,231,NULL,'23','numero',1),(7170,125,316,230,NULL,'23.5','numero',1),(7171,125,317,230,NULL,'23.5','numero',1),(7172,125,316,231,NULL,'23.5','numero',1),(7173,125,317,231,NULL,'23.5','numero',1),(7174,125,316,230,NULL,'24','numero',1),(7175,125,317,230,NULL,'24','numero',1),(7176,125,316,231,NULL,'24','numero',1),(7177,125,317,231,NULL,'24','numero',1),(7178,125,316,230,NULL,'24.5','numero',1),(7179,125,317,230,NULL,'24.5','numero',1),(7180,125,316,231,NULL,'24.5','numero',1),(7181,125,317,231,NULL,'24.5','numero',1),(7182,125,316,230,NULL,'25','numero',1),(7183,125,317,230,NULL,'25','numero',1),(7184,125,316,231,NULL,'25','numero',1),(7185,125,317,231,NULL,'25','numero',1),(7186,125,316,230,NULL,'25.5','numero',1),(7187,125,317,230,NULL,'25.5','numero',1),(7188,125,316,231,NULL,'25.5','numero',1),(7189,125,317,231,NULL,'25.5','numero',1),(7190,125,316,230,NULL,'26','numero',1),(7191,125,317,230,NULL,'26','numero',1),(7192,125,316,231,NULL,'26','numero',1),(7193,125,317,231,NULL,'26','numero',1),(7194,125,316,230,NULL,'26.5','numero',1),(7195,125,317,230,NULL,'26.5','numero',1),(7196,125,316,231,NULL,'26.5','numero',1),(7197,125,317,231,NULL,'26.5','numero',1),(7198,125,316,230,NULL,'27','numero',1),(7199,125,317,230,NULL,'27','numero',1),(7200,125,316,231,NULL,'27','numero',1),(7201,125,317,231,NULL,'27','numero',1),(7202,125,316,230,NULL,'27.5','numero',1),(7203,125,317,230,NULL,'27.5','numero',1),(7204,125,316,231,NULL,'27.5','numero',1),(7205,125,317,231,NULL,'27.5','numero',1),(7206,125,316,230,NULL,'28','numero',1),(7207,125,317,230,NULL,'28','numero',1),(7208,125,316,231,NULL,'28','numero',1),(7209,125,317,231,NULL,'28','numero',1),(7210,125,316,230,NULL,'28.5','numero',1),(7211,125,317,230,NULL,'28.5','numero',1),(7212,125,316,231,NULL,'28.5','numero',1),(7213,125,317,231,NULL,'28.5','numero',1),(7214,125,316,230,NULL,'29','numero',1),(7215,125,317,230,NULL,'29','numero',1),(7216,125,316,231,NULL,'29','numero',1),(7217,125,317,231,NULL,'29','numero',1),(7218,125,316,230,NULL,'29.5','numero',1),(7219,125,317,230,NULL,'29.5','numero',1),(7220,125,316,231,NULL,'29.5','numero',1),(7221,125,317,231,NULL,'29.5','numero',1),(7222,125,316,230,NULL,'30','numero',1),(7223,125,317,230,NULL,'30','numero',1),(7224,125,316,231,NULL,'30','numero',1),(7225,125,317,231,NULL,'30','numero',1),(7226,125,316,230,NULL,'30.5','numero',1),(7227,125,317,230,NULL,'30.5','numero',1),(7228,125,316,231,NULL,'30.5','numero',1),(7229,125,317,231,NULL,'30.5','numero',1),(7230,125,316,230,NULL,'31','numero',1),(7231,125,317,230,NULL,'31','numero',1),(7232,125,316,231,NULL,'31','numero',1),(7233,125,317,231,NULL,'31','numero',1),(7234,125,316,230,NULL,'31.5','numero',1),(7235,125,317,230,NULL,'31.5','numero',1),(7236,125,316,231,NULL,'31.5','numero',1),(7237,125,317,231,NULL,'31.5','numero',1),(7238,125,316,230,NULL,'32','numero',1),(7239,125,317,230,NULL,'32','numero',1),(7240,125,316,231,NULL,'32','numero',1),(7241,125,317,231,NULL,'32','numero',1),(7242,125,316,230,NULL,'32.5','numero',1),(7243,125,317,230,NULL,'32.5','numero',1),(7244,125,316,231,NULL,'32.5','numero',1),(7245,125,317,231,NULL,'32.5','numero',1),(7246,125,316,230,NULL,'33','numero',1),(7247,125,317,230,NULL,'33','numero',1),(7248,125,316,231,NULL,'33','numero',1),(7249,125,317,231,NULL,'33','numero',1),(7250,125,316,230,NULL,'33.5','numero',1),(7251,125,317,230,NULL,'33.5','numero',1),(7252,125,316,231,NULL,'33.5','numero',1),(7253,125,317,231,NULL,'33.5','numero',1),(7254,125,316,230,NULL,'34','numero',1),(7255,125,317,230,NULL,'34','numero',1),(7256,125,316,231,NULL,'34','numero',1),(7257,125,317,231,NULL,'34','numero',1),(7258,125,316,230,NULL,'34.5','numero',1),(7259,125,317,230,NULL,'34.5','numero',1),(7260,125,316,231,NULL,'34.5','numero',1),(7261,125,317,231,NULL,'34.5','numero',1),(7262,125,316,230,NULL,'35','numero',1),(7263,125,317,230,NULL,'35','numero',1),(7264,125,316,231,NULL,'35','numero',1),(7265,125,317,231,NULL,'35','numero',1),(7266,125,316,230,NULL,'26','numero',1),(7267,125,317,230,NULL,'26','numero',1),(7268,125,316,231,NULL,'26','numero',1),(7269,125,317,231,NULL,'26','numero',1),(7270,125,316,230,NULL,'26.5','numero',1),(7271,125,317,230,NULL,'26.5','numero',1),(7272,125,316,231,NULL,'26.5','numero',1),(7273,125,317,231,NULL,'26.5','numero',1),(7274,125,316,230,NULL,'27','numero',1),(7275,125,317,230,NULL,'27','numero',1),(7276,125,316,231,NULL,'27','numero',1),(7277,125,317,231,NULL,'27','numero',1),(7278,125,316,230,NULL,'27.5','numero',1),(7279,125,317,230,NULL,'27.5','numero',1),(7280,125,316,231,NULL,'27.5','numero',1),(7281,125,317,231,NULL,'27.5','numero',1),(7282,125,316,230,NULL,'28','numero',1),(7283,125,317,230,NULL,'28','numero',1),(7284,125,316,231,NULL,'28','numero',1),(7285,125,317,231,NULL,'28','numero',1),(7286,125,316,230,NULL,'28.5','numero',1),(7287,125,317,230,NULL,'28.5','numero',1),(7288,125,316,231,NULL,'28.5','numero',1),(7289,125,317,231,NULL,'28.5','numero',1),(7290,125,316,230,NULL,'29','numero',1),(7291,125,317,230,NULL,'29','numero',1),(7292,125,316,231,NULL,'29','numero',1),(7293,125,317,231,NULL,'29','numero',1),(7294,125,316,230,NULL,'29.5','numero',1),(7295,125,317,230,NULL,'29.5','numero',1),(7296,125,316,231,NULL,'29.5','numero',1),(7297,125,317,231,NULL,'29.5','numero',1),(7298,125,316,230,NULL,'30','numero',1),(7299,125,317,230,NULL,'30','numero',1),(7300,125,316,231,NULL,'30','numero',1),(7301,125,317,231,NULL,'30','numero',1),(7302,125,316,230,NULL,'7','numero',1),(7303,125,317,230,NULL,'7','numero',1),(7304,125,316,231,NULL,'7','numero',1),(7305,125,317,231,NULL,'7','numero',1),(7306,125,316,230,NULL,'7.5','numero',1),(7307,125,317,230,NULL,'7.5','numero',1),(7308,125,316,231,NULL,'7.5','numero',1),(7309,125,317,231,NULL,'7.5','numero',1),(7310,125,316,230,NULL,'8','numero',1),(7311,125,317,230,NULL,'8','numero',1),(7312,125,316,231,NULL,'8','numero',1),(7313,125,317,231,NULL,'8','numero',1),(7314,125,316,230,NULL,'8.5','numero',1),(7315,125,317,230,NULL,'8.5','numero',1),(7316,125,316,231,NULL,'8.5','numero',1),(7317,125,317,231,NULL,'8.5','numero',1),(7318,125,316,230,NULL,'9','numero',1),(7319,125,317,230,NULL,'9','numero',1),(7320,125,316,231,NULL,'9','numero',1),(7321,125,317,231,NULL,'9','numero',1),(7322,125,316,230,NULL,'15','numero',1),(7323,125,317,230,NULL,'15','numero',1),(7324,125,316,231,NULL,'15','numero',1),(7325,125,317,231,NULL,'15','numero',1),(7326,125,316,230,NULL,'15.5','numero',1),(7327,125,317,230,NULL,'15.5','numero',1),(7328,125,316,231,NULL,'15.5','numero',1),(7329,125,317,231,NULL,'15.5','numero',1),(7330,125,316,230,NULL,'16','numero',1),(7331,125,317,230,NULL,'16','numero',1),(7332,125,316,231,NULL,'16','numero',1),(7333,125,317,231,NULL,'16','numero',1),(7334,125,316,230,NULL,'16.5','numero',1),(7335,125,317,230,NULL,'16.5','numero',1),(7336,125,316,231,NULL,'16.5','numero',1),(7337,125,317,231,NULL,'16.5','numero',1),(7338,125,316,230,NULL,'17','numero',1),(7339,125,317,230,NULL,'17','numero',1),(7340,125,316,231,NULL,'17','numero',1),(7341,125,317,231,NULL,'17','numero',1),(7342,125,316,230,NULL,'17.5','numero',1),(7343,125,317,230,NULL,'17.5','numero',1),(7344,125,316,231,NULL,'17.5','numero',1),(7345,125,317,231,NULL,'17.5','numero',1),(7346,125,316,230,NULL,'18','numero',1),(7347,125,317,230,NULL,'18','numero',1),(7348,125,316,231,NULL,'18','numero',1),(7349,125,317,231,NULL,'18','numero',1),(7350,125,316,230,NULL,'18.5','numero',1),(7351,125,317,230,NULL,'18.5','numero',1),(7352,125,316,231,NULL,'18.5','numero',1),(7353,125,317,231,NULL,'18.5','numero',1),(7354,125,316,230,NULL,'19','numero',1),(7355,125,317,230,NULL,'19','numero',1),(7356,125,316,231,NULL,'19','numero',1),(7357,125,317,231,NULL,'19','numero',1),(7358,125,316,230,NULL,'19.5','numero',1),(7359,125,317,230,NULL,'19.5','numero',1),(7360,125,316,231,NULL,'19.5','numero',1),(7361,125,317,231,NULL,'19.5','numero',1),(7362,125,316,230,NULL,'20','numero',1),(7363,125,317,230,NULL,'20','numero',1),(7364,125,316,231,NULL,'20','numero',1),(7365,125,317,231,NULL,'20','numero',1),(7366,125,316,230,NULL,'20.5','numero',1),(7367,125,317,230,NULL,'20.5','numero',1),(7368,125,316,231,NULL,'20.5','numero',1),(7369,125,317,231,NULL,'20.5','numero',1),(7370,125,316,230,NULL,'21','numero',1),(7371,125,317,230,NULL,'21','numero',1),(7372,125,316,231,NULL,'21','numero',1),(7373,125,317,231,NULL,'21','numero',1),(7374,125,316,230,NULL,'21.5','numero',1),(7375,125,317,230,NULL,'21.5','numero',1),(7376,125,316,231,NULL,'21.5','numero',1),(7377,125,317,231,NULL,'21.5','numero',1),(7378,125,316,230,NULL,'22','numero',1),(7379,125,317,230,NULL,'22','numero',1),(7380,125,316,231,NULL,'22','numero',1),(7381,125,317,231,NULL,'22','numero',1),(7382,125,316,230,NULL,'22.5','numero',1),(7383,125,317,230,NULL,'22.5','numero',1),(7384,125,316,231,NULL,'22.5','numero',1),(7385,125,317,231,NULL,'22.5','numero',1),(7386,125,316,230,NULL,'23','numero',1),(7387,125,317,230,NULL,'23','numero',1),(7388,125,316,231,NULL,'23','numero',1),(7389,125,317,231,NULL,'23','numero',1),(7390,126,318,232,NULL,'19','numero',1),(7391,126,319,232,NULL,'19','numero',1),(7392,126,318,233,NULL,'19','numero',1),(7393,126,319,233,NULL,'19','numero',1),(7394,126,318,232,NULL,'19.5','numero',1),(7395,126,319,232,NULL,'19.5','numero',1),(7396,126,318,233,NULL,'19.5','numero',1),(7397,126,319,233,NULL,'19.5','numero',1),(7398,126,318,232,NULL,'20','numero',1),(7399,126,319,232,NULL,'20','numero',1),(7400,126,318,233,NULL,'20','numero',1),(7401,126,319,233,NULL,'20','numero',1),(7402,126,318,232,NULL,'20.5','numero',1),(7403,126,319,232,NULL,'20.5','numero',1),(7404,126,318,233,NULL,'20.5','numero',1),(7405,126,319,233,NULL,'20.5','numero',1),(7406,126,318,232,NULL,'21','numero',1),(7407,126,319,232,NULL,'21','numero',1),(7408,126,318,233,NULL,'21','numero',1),(7409,126,319,233,NULL,'21','numero',1),(7410,126,318,232,NULL,'21.5','numero',1),(7411,126,319,232,NULL,'21.5','numero',1),(7412,126,318,233,NULL,'21.5','numero',1),(7413,126,319,233,NULL,'21.5','numero',1),(7414,126,318,232,NULL,'22','numero',1),(7415,126,319,232,NULL,'22','numero',1),(7416,126,318,233,NULL,'22','numero',1),(7417,126,319,233,NULL,'22','numero',1),(7418,126,318,232,NULL,'19','numero',1),(7419,126,319,232,NULL,'19','numero',1),(7420,126,318,233,NULL,'19','numero',1),(7421,126,319,233,NULL,'19','numero',1),(7422,126,318,232,NULL,'19.5','numero',1),(7423,126,319,232,NULL,'19.5','numero',1),(7424,126,318,233,NULL,'19.5','numero',1),(7425,126,319,233,NULL,'19.5','numero',1),(7426,126,318,232,NULL,'20','numero',1),(7427,126,319,232,NULL,'20','numero',1),(7428,126,318,233,NULL,'20','numero',1),(7429,126,319,233,NULL,'20','numero',1),(7430,126,318,232,NULL,'20.5','numero',1),(7431,126,319,232,NULL,'20.5','numero',1),(7432,126,318,233,NULL,'20.5','numero',1),(7433,126,319,233,NULL,'20.5','numero',1),(7434,126,318,232,NULL,'21','numero',1),(7435,126,319,232,NULL,'21','numero',1),(7436,126,318,233,NULL,'21','numero',1),(7437,126,319,233,NULL,'21','numero',1),(7438,126,318,232,NULL,'21.5','numero',1),(7439,126,319,232,NULL,'21.5','numero',1),(7440,126,318,233,NULL,'21.5','numero',1),(7441,126,319,233,NULL,'21.5','numero',1),(7442,126,318,232,NULL,'22','numero',1),(7443,126,319,232,NULL,'22','numero',1),(7444,126,318,233,NULL,'22','numero',1),(7445,126,319,233,NULL,'22','numero',1),(7446,126,318,232,NULL,'22.5','numero',1),(7447,126,319,232,NULL,'22.5','numero',1),(7448,126,318,233,NULL,'22.5','numero',1),(7449,126,319,233,NULL,'22.5','numero',1),(7450,126,318,232,NULL,'23','numero',1),(7451,126,319,232,NULL,'23','numero',1),(7452,126,318,233,NULL,'23','numero',1),(7453,126,319,233,NULL,'23','numero',1),(7454,126,318,232,NULL,'23.5','numero',1),(7455,126,319,232,NULL,'23.5','numero',1),(7456,126,318,233,NULL,'23.5','numero',1),(7457,126,319,233,NULL,'23.5','numero',1),(7458,126,318,232,NULL,'24','numero',1),(7459,126,319,232,NULL,'24','numero',1),(7460,126,318,233,NULL,'24','numero',1),(7461,126,319,233,NULL,'24','numero',1),(7462,126,318,232,NULL,'24.5','numero',1),(7463,126,319,232,NULL,'24.5','numero',1),(7464,126,318,233,NULL,'24.5','numero',1),(7465,126,319,233,NULL,'24.5','numero',1),(7466,126,318,232,NULL,'25','numero',1),(7467,126,319,232,NULL,'25','numero',1),(7468,126,318,233,NULL,'25','numero',1),(7469,126,319,233,NULL,'25','numero',1),(7470,126,318,232,NULL,'25.5','numero',1),(7471,126,319,232,NULL,'25.5','numero',1),(7472,126,318,233,NULL,'25.5','numero',1),(7473,126,319,233,NULL,'25.5','numero',1),(7474,126,318,232,NULL,'26','numero',1),(7475,126,319,232,NULL,'26','numero',1),(7476,126,318,233,NULL,'26','numero',1),(7477,126,319,233,NULL,'26','numero',1),(7478,126,318,232,NULL,'26.5','numero',1),(7479,126,319,232,NULL,'26.5','numero',1),(7480,126,318,233,NULL,'26.5','numero',1),(7481,126,319,233,NULL,'26.5','numero',1),(7482,126,318,232,NULL,'27','numero',1),(7483,126,319,232,NULL,'27','numero',1),(7484,126,318,233,NULL,'27','numero',1),(7485,126,319,233,NULL,'27','numero',1),(7486,126,318,232,NULL,'27.5','numero',1),(7487,126,319,232,NULL,'27.5','numero',1),(7488,126,318,233,NULL,'27.5','numero',1),(7489,126,319,233,NULL,'27.5','numero',1),(7490,126,318,232,NULL,'28','numero',1),(7491,126,319,232,NULL,'28','numero',1),(7492,126,318,233,NULL,'28','numero',1),(7493,126,319,233,NULL,'28','numero',1),(7494,126,318,232,NULL,'28.5','numero',1),(7495,126,319,232,NULL,'28.5','numero',1),(7496,126,318,233,NULL,'28.5','numero',1),(7497,126,319,233,NULL,'28.5','numero',1),(7498,126,318,232,NULL,'29','numero',1),(7499,126,319,232,NULL,'29','numero',1),(7500,126,318,233,NULL,'29','numero',1),(7501,126,319,233,NULL,'29','numero',1),(7502,126,318,232,NULL,'29.5','numero',1),(7503,126,319,232,NULL,'29.5','numero',1),(7504,126,318,233,NULL,'29.5','numero',1),(7505,126,319,233,NULL,'29.5','numero',1),(7506,126,318,232,NULL,'30','numero',1),(7507,126,319,232,NULL,'30','numero',1),(7508,126,318,233,NULL,'30','numero',1),(7509,126,319,233,NULL,'30','numero',1),(7510,126,318,232,NULL,'30.5','numero',1),(7511,126,319,232,NULL,'30.5','numero',1),(7512,126,318,233,NULL,'30.5','numero',1),(7513,126,319,233,NULL,'30.5','numero',1),(7514,126,318,232,NULL,'31','numero',1),(7515,126,319,232,NULL,'31','numero',1),(7516,126,318,233,NULL,'31','numero',1),(7517,126,319,233,NULL,'31','numero',1),(7518,126,318,232,NULL,'31.5','numero',1),(7519,126,319,232,NULL,'31.5','numero',1),(7520,126,318,233,NULL,'31.5','numero',1),(7521,126,319,233,NULL,'31.5','numero',1),(7522,126,318,232,NULL,'32','numero',1),(7523,126,319,232,NULL,'32','numero',1),(7524,126,318,233,NULL,'32','numero',1),(7525,126,319,233,NULL,'32','numero',1),(7526,126,318,232,NULL,'32.5','numero',1),(7527,126,319,232,NULL,'32.5','numero',1),(7528,126,318,233,NULL,'32.5','numero',1),(7529,126,319,233,NULL,'32.5','numero',1),(7530,126,318,232,NULL,'33','numero',1),(7531,126,319,232,NULL,'33','numero',1),(7532,126,318,233,NULL,'33','numero',1),(7533,126,319,233,NULL,'33','numero',1),(7534,126,318,232,NULL,'33.5','numero',1),(7535,126,319,232,NULL,'33.5','numero',1),(7536,126,318,233,NULL,'33.5','numero',1),(7537,126,319,233,NULL,'33.5','numero',1),(7538,126,318,232,NULL,'34','numero',1),(7539,126,319,232,NULL,'34','numero',1),(7540,126,318,233,NULL,'34','numero',1),(7541,126,319,233,NULL,'34','numero',1),(7542,126,318,232,NULL,'34.5','numero',1),(7543,126,319,232,NULL,'34.5','numero',1),(7544,126,318,233,NULL,'34.5','numero',1),(7545,126,319,233,NULL,'34.5','numero',1),(7546,126,318,232,NULL,'35','numero',1),(7547,126,319,232,NULL,'35','numero',1),(7548,126,318,233,NULL,'35','numero',1),(7549,126,319,233,NULL,'35','numero',1),(7550,126,318,232,NULL,'26','numero',1),(7551,126,319,232,NULL,'26','numero',1),(7552,126,318,233,NULL,'26','numero',1),(7553,126,319,233,NULL,'26','numero',1),(7554,126,318,232,NULL,'26.5','numero',1),(7555,126,319,232,NULL,'26.5','numero',1),(7556,126,318,233,NULL,'26.5','numero',1),(7557,126,319,233,NULL,'26.5','numero',1),(7558,126,318,232,NULL,'27','numero',1),(7559,126,319,232,NULL,'27','numero',1),(7560,126,318,233,NULL,'27','numero',1),(7561,126,319,233,NULL,'27','numero',1),(7562,126,318,232,NULL,'27.5','numero',1),(7563,126,319,232,NULL,'27.5','numero',1),(7564,126,318,233,NULL,'27.5','numero',1),(7565,126,319,233,NULL,'27.5','numero',1),(7566,126,318,232,NULL,'28','numero',1),(7567,126,319,232,NULL,'28','numero',1),(7568,126,318,233,NULL,'28','numero',1),(7569,126,319,233,NULL,'28','numero',1),(7570,126,318,232,NULL,'28.5','numero',1),(7571,126,319,232,NULL,'28.5','numero',1),(7572,126,318,233,NULL,'28.5','numero',1),(7573,126,319,233,NULL,'28.5','numero',1),(7574,126,318,232,NULL,'29','numero',1),(7575,126,319,232,NULL,'29','numero',1),(7576,126,318,233,NULL,'29','numero',1),(7577,126,319,233,NULL,'29','numero',1),(7578,126,318,232,NULL,'29.5','numero',1),(7579,126,319,232,NULL,'29.5','numero',1),(7580,126,318,233,NULL,'29.5','numero',1),(7581,126,319,233,NULL,'29.5','numero',1),(7582,126,318,232,NULL,'30','numero',1),(7583,126,319,232,NULL,'30','numero',1),(7584,126,318,233,NULL,'30','numero',1),(7585,126,319,233,NULL,'30','numero',1),(7586,126,318,232,NULL,'7','numero',1),(7587,126,319,232,NULL,'7','numero',1),(7588,126,318,233,NULL,'7','numero',1),(7589,126,319,233,NULL,'7','numero',1),(7590,126,318,232,NULL,'7.5','numero',1),(7591,126,319,232,NULL,'7.5','numero',1),(7592,126,318,233,NULL,'7.5','numero',1),(7593,126,319,233,NULL,'7.5','numero',1),(7594,126,318,232,NULL,'8','numero',1),(7595,126,319,232,NULL,'8','numero',1),(7596,126,318,233,NULL,'8','numero',1),(7597,126,319,233,NULL,'8','numero',1),(7598,126,318,232,NULL,'8.5','numero',1),(7599,126,319,232,NULL,'8.5','numero',1),(7600,126,318,233,NULL,'8.5','numero',1),(7601,126,319,233,NULL,'8.5','numero',1),(7602,126,318,232,NULL,'9','numero',1),(7603,126,319,232,NULL,'9','numero',1),(7604,126,318,233,NULL,'9','numero',1),(7605,126,319,233,NULL,'9','numero',1),(7606,126,318,232,NULL,'15','numero',1),(7607,126,319,232,NULL,'15','numero',1),(7608,126,318,233,NULL,'15','numero',1),(7609,126,319,233,NULL,'15','numero',1),(7610,126,318,232,NULL,'15.5','numero',1),(7611,126,319,232,NULL,'15.5','numero',1),(7612,126,318,233,NULL,'15.5','numero',1),(7613,126,319,233,NULL,'15.5','numero',1),(7614,126,318,232,NULL,'16','numero',1),(7615,126,319,232,NULL,'16','numero',1),(7616,126,318,233,NULL,'16','numero',1),(7617,126,319,233,NULL,'16','numero',1),(7618,126,318,232,NULL,'16.5','numero',1),(7619,126,319,232,NULL,'16.5','numero',1),(7620,126,318,233,NULL,'16.5','numero',1),(7621,126,319,233,NULL,'16.5','numero',1),(7622,126,318,232,NULL,'17','numero',1),(7623,126,319,232,NULL,'17','numero',1),(7624,126,318,233,NULL,'17','numero',1),(7625,126,319,233,NULL,'17','numero',1),(7626,126,318,232,NULL,'17.5','numero',1),(7627,126,319,232,NULL,'17.5','numero',1),(7628,126,318,233,NULL,'17.5','numero',1),(7629,126,319,233,NULL,'17.5','numero',1),(7630,126,318,232,NULL,'18','numero',1),(7631,126,319,232,NULL,'18','numero',1),(7632,126,318,233,NULL,'18','numero',1),(7633,126,319,233,NULL,'18','numero',1),(7634,126,318,232,NULL,'18.5','numero',1),(7635,126,319,232,NULL,'18.5','numero',1),(7636,126,318,233,NULL,'18.5','numero',1),(7637,126,319,233,NULL,'18.5','numero',1),(7638,126,318,232,NULL,'19','numero',1),(7639,126,319,232,NULL,'19','numero',1),(7640,126,318,233,NULL,'19','numero',1),(7641,126,319,233,NULL,'19','numero',1),(7642,126,318,232,NULL,'19.5','numero',1),(7643,126,319,232,NULL,'19.5','numero',1),(7644,126,318,233,NULL,'19.5','numero',1),(7645,126,319,233,NULL,'19.5','numero',1),(7646,126,318,232,NULL,'20','numero',1),(7647,126,319,232,NULL,'20','numero',1),(7648,126,318,233,NULL,'20','numero',1),(7649,126,319,233,NULL,'20','numero',1),(7650,126,318,232,NULL,'20.5','numero',1),(7651,126,319,232,NULL,'20.5','numero',1),(7652,126,318,233,NULL,'20.5','numero',1),(7653,126,319,233,NULL,'20.5','numero',1),(7654,126,318,232,NULL,'21','numero',1),(7655,126,319,232,NULL,'21','numero',1),(7656,126,318,233,NULL,'21','numero',1),(7657,126,319,233,NULL,'21','numero',1),(7658,126,318,232,NULL,'21.5','numero',1),(7659,126,319,232,NULL,'21.5','numero',1),(7660,126,318,233,NULL,'21.5','numero',1),(7661,126,319,233,NULL,'21.5','numero',1),(7662,126,318,232,NULL,'22','numero',1),(7663,126,319,232,NULL,'22','numero',1),(7664,126,318,233,NULL,'22','numero',1),(7665,126,319,233,NULL,'22','numero',1),(7666,126,318,232,NULL,'22.5','numero',1),(7667,126,319,232,NULL,'22.5','numero',1),(7668,126,318,233,NULL,'22.5','numero',1),(7669,126,319,233,NULL,'22.5','numero',1),(7670,126,318,232,NULL,'23','numero',1),(7671,126,319,232,NULL,'23','numero',1),(7672,126,318,233,NULL,'23','numero',1),(7673,126,319,233,NULL,'23','numero',1),(7674,128,321,236,NULL,'19','numero',1),(7675,128,322,236,NULL,'19','numero',1),(7676,128,321,237,NULL,'19','numero',1),(7677,128,322,237,NULL,'19','numero',1),(7678,128,321,236,NULL,'19.5','numero',1),(7679,128,322,236,NULL,'19.5','numero',1),(7680,128,321,237,NULL,'19.5','numero',1),(7681,128,322,237,NULL,'19.5','numero',1),(7682,128,321,236,NULL,'20','numero',1),(7683,128,322,236,NULL,'20','numero',1),(7684,128,321,237,NULL,'20','numero',1),(7685,128,322,237,NULL,'20','numero',1),(7686,128,321,236,NULL,'20.5','numero',1),(7687,128,322,236,NULL,'20.5','numero',1),(7688,128,321,237,NULL,'20.5','numero',1),(7689,128,322,237,NULL,'20.5','numero',1),(7690,128,321,236,NULL,'21','numero',1),(7691,128,322,236,NULL,'21','numero',1),(7692,128,321,237,NULL,'21','numero',1),(7693,128,322,237,NULL,'21','numero',1),(7694,128,321,236,NULL,'21.5','numero',1),(7695,128,322,236,NULL,'21.5','numero',1),(7696,128,321,237,NULL,'21.5','numero',1),(7697,128,322,237,NULL,'21.5','numero',1),(7698,128,321,236,NULL,'22','numero',1),(7699,128,322,236,NULL,'22','numero',1),(7700,128,321,237,NULL,'22','numero',1),(7701,128,322,237,NULL,'22','numero',1),(7702,128,321,236,NULL,'19','numero',1),(7703,128,322,236,NULL,'19','numero',1),(7704,128,321,237,NULL,'19','numero',1),(7705,128,322,237,NULL,'19','numero',1),(7706,128,321,236,NULL,'19.5','numero',1),(7707,128,322,236,NULL,'19.5','numero',1),(7708,128,321,237,NULL,'19.5','numero',1),(7709,128,322,237,NULL,'19.5','numero',1),(7710,128,321,236,NULL,'20','numero',1),(7711,128,322,236,NULL,'20','numero',1),(7712,128,321,237,NULL,'20','numero',1),(7713,128,322,237,NULL,'20','numero',1),(7714,128,321,236,NULL,'20.5','numero',1),(7715,128,322,236,NULL,'20.5','numero',1),(7716,128,321,237,NULL,'20.5','numero',1),(7717,128,322,237,NULL,'20.5','numero',1),(7718,128,321,236,NULL,'21','numero',1),(7719,128,322,236,NULL,'21','numero',1),(7720,128,321,237,NULL,'21','numero',1),(7721,128,322,237,NULL,'21','numero',1),(7722,128,321,236,NULL,'21.5','numero',1),(7723,128,322,236,NULL,'21.5','numero',1),(7724,128,321,237,NULL,'21.5','numero',1),(7725,128,322,237,NULL,'21.5','numero',1),(7726,128,321,236,NULL,'22','numero',1),(7727,128,322,236,NULL,'22','numero',1),(7728,128,321,237,NULL,'22','numero',1),(7729,128,322,237,NULL,'22','numero',1),(7730,128,321,236,NULL,'22.5','numero',1),(7731,128,322,236,NULL,'22.5','numero',1),(7732,128,321,237,NULL,'22.5','numero',1),(7733,128,322,237,NULL,'22.5','numero',1),(7734,128,321,236,NULL,'23','numero',1),(7735,128,322,236,NULL,'23','numero',1),(7736,128,321,237,NULL,'23','numero',1),(7737,128,322,237,NULL,'23','numero',1),(7738,128,321,236,NULL,'23.5','numero',1),(7739,128,322,236,NULL,'23.5','numero',1),(7740,128,321,237,NULL,'23.5','numero',1),(7741,128,322,237,NULL,'23.5','numero',1),(7742,128,321,236,NULL,'24','numero',1),(7743,128,322,236,NULL,'24','numero',1),(7744,128,321,237,NULL,'24','numero',1),(7745,128,322,237,NULL,'24','numero',1),(7746,128,321,236,NULL,'24.5','numero',1),(7747,128,322,236,NULL,'24.5','numero',1),(7748,128,321,237,NULL,'24.5','numero',1),(7749,128,322,237,NULL,'24.5','numero',1),(7750,128,321,236,NULL,'25','numero',1),(7751,128,322,236,NULL,'25','numero',1),(7752,128,321,237,NULL,'25','numero',1),(7753,128,322,237,NULL,'25','numero',1),(7754,128,321,236,NULL,'25.5','numero',1),(7755,128,322,236,NULL,'25.5','numero',1),(7756,128,321,237,NULL,'25.5','numero',1),(7757,128,322,237,NULL,'25.5','numero',1),(7758,128,321,236,NULL,'26','numero',1),(7759,128,322,236,NULL,'26','numero',1),(7760,128,321,237,NULL,'26','numero',1),(7761,128,322,237,NULL,'26','numero',1),(7762,128,321,236,NULL,'26.5','numero',1),(7763,128,322,236,NULL,'26.5','numero',1),(7764,128,321,237,NULL,'26.5','numero',1),(7765,128,322,237,NULL,'26.5','numero',1),(7766,128,321,236,NULL,'27','numero',1),(7767,128,322,236,NULL,'27','numero',1),(7768,128,321,237,NULL,'27','numero',1),(7769,128,322,237,NULL,'27','numero',1),(7770,128,321,236,NULL,'27.5','numero',1),(7771,128,322,236,NULL,'27.5','numero',1),(7772,128,321,237,NULL,'27.5','numero',1),(7773,128,322,237,NULL,'27.5','numero',1),(7774,128,321,236,NULL,'28','numero',1),(7775,128,322,236,NULL,'28','numero',1),(7776,128,321,237,NULL,'28','numero',1),(7777,128,322,237,NULL,'28','numero',1),(7778,128,321,236,NULL,'28.5','numero',1),(7779,128,322,236,NULL,'28.5','numero',1),(7780,128,321,237,NULL,'28.5','numero',1),(7781,128,322,237,NULL,'28.5','numero',1),(7782,128,321,236,NULL,'29','numero',1),(7783,128,322,236,NULL,'29','numero',1),(7784,128,321,237,NULL,'29','numero',1),(7785,128,322,237,NULL,'29','numero',1),(7786,128,321,236,NULL,'29.5','numero',1),(7787,128,322,236,NULL,'29.5','numero',1),(7788,128,321,237,NULL,'29.5','numero',1),(7789,128,322,237,NULL,'29.5','numero',1),(7790,128,321,236,NULL,'30','numero',1),(7791,128,322,236,NULL,'30','numero',1),(7792,128,321,237,NULL,'30','numero',1),(7793,128,322,237,NULL,'30','numero',1),(7794,128,321,236,NULL,'30.5','numero',1),(7795,128,322,236,NULL,'30.5','numero',1),(7796,128,321,237,NULL,'30.5','numero',1),(7797,128,322,237,NULL,'30.5','numero',1),(7798,128,321,236,NULL,'31','numero',1),(7799,128,322,236,NULL,'31','numero',1),(7800,128,321,237,NULL,'31','numero',1),(7801,128,322,237,NULL,'31','numero',1),(7802,128,321,236,NULL,'31.5','numero',1),(7803,128,322,236,NULL,'31.5','numero',1),(7804,128,321,237,NULL,'31.5','numero',1),(7805,128,322,237,NULL,'31.5','numero',1),(7806,128,321,236,NULL,'32','numero',1),(7807,128,322,236,NULL,'32','numero',1),(7808,128,321,237,NULL,'32','numero',1),(7809,128,322,237,NULL,'32','numero',1),(7810,128,321,236,NULL,'32.5','numero',1),(7811,128,322,236,NULL,'32.5','numero',1),(7812,128,321,237,NULL,'32.5','numero',1),(7813,128,322,237,NULL,'32.5','numero',1),(7814,128,321,236,NULL,'33','numero',1),(7815,128,322,236,NULL,'33','numero',1),(7816,128,321,237,NULL,'33','numero',1),(7817,128,322,237,NULL,'33','numero',1),(7818,128,321,236,NULL,'33.5','numero',1),(7819,128,322,236,NULL,'33.5','numero',1),(7820,128,321,237,NULL,'33.5','numero',1),(7821,128,322,237,NULL,'33.5','numero',1),(7822,128,321,236,NULL,'34','numero',1),(7823,128,322,236,NULL,'34','numero',1),(7824,128,321,237,NULL,'34','numero',1),(7825,128,322,237,NULL,'34','numero',1),(7826,128,321,236,NULL,'34.5','numero',1),(7827,128,322,236,NULL,'34.5','numero',1),(7828,128,321,237,NULL,'34.5','numero',1),(7829,128,322,237,NULL,'34.5','numero',1),(7830,128,321,236,NULL,'35','numero',1),(7831,128,322,236,NULL,'35','numero',1),(7832,128,321,237,NULL,'35','numero',1),(7833,128,322,237,NULL,'35','numero',1),(7834,128,321,236,NULL,'26','numero',1),(7835,128,322,236,NULL,'26','numero',1),(7836,128,321,237,NULL,'26','numero',1),(7837,128,322,237,NULL,'26','numero',1),(7838,128,321,236,NULL,'26.5','numero',1),(7839,128,322,236,NULL,'26.5','numero',1),(7840,128,321,237,NULL,'26.5','numero',1),(7841,128,322,237,NULL,'26.5','numero',1),(7842,128,321,236,NULL,'27','numero',1),(7843,128,322,236,NULL,'27','numero',1),(7844,128,321,237,NULL,'27','numero',1),(7845,128,322,237,NULL,'27','numero',1),(7846,128,321,236,NULL,'27.5','numero',1),(7847,128,322,236,NULL,'27.5','numero',1),(7848,128,321,237,NULL,'27.5','numero',1),(7849,128,322,237,NULL,'27.5','numero',1),(7850,128,321,236,NULL,'28','numero',1),(7851,128,322,236,NULL,'28','numero',1),(7852,128,321,237,NULL,'28','numero',1),(7853,128,322,237,NULL,'28','numero',1),(7854,128,321,236,NULL,'28.5','numero',1),(7855,128,322,236,NULL,'28.5','numero',1),(7856,128,321,237,NULL,'28.5','numero',1),(7857,128,322,237,NULL,'28.5','numero',1),(7858,128,321,236,NULL,'29','numero',1),(7859,128,322,236,NULL,'29','numero',1),(7860,128,321,237,NULL,'29','numero',1),(7861,128,322,237,NULL,'29','numero',1),(7862,128,321,236,NULL,'29.5','numero',1),(7863,128,322,236,NULL,'29.5','numero',1),(7864,128,321,237,NULL,'29.5','numero',1),(7865,128,322,237,NULL,'29.5','numero',1),(7866,128,321,236,NULL,'30','numero',1),(7867,128,322,236,NULL,'30','numero',1),(7868,128,321,237,NULL,'30','numero',1),(7869,128,322,237,NULL,'30','numero',1),(7870,128,321,236,NULL,'7','numero',1),(7871,128,322,236,NULL,'7','numero',1),(7872,128,321,237,NULL,'7','numero',1),(7873,128,322,237,NULL,'7','numero',1),(7874,128,321,236,NULL,'7.5','numero',1),(7875,128,322,236,NULL,'7.5','numero',1),(7876,128,321,237,NULL,'7.5','numero',1),(7877,128,322,237,NULL,'7.5','numero',1),(7878,128,321,236,NULL,'8','numero',1),(7879,128,322,236,NULL,'8','numero',1),(7880,128,321,237,NULL,'8','numero',1),(7881,128,322,237,NULL,'8','numero',1),(7882,128,321,236,NULL,'8.5','numero',1),(7883,128,322,236,NULL,'8.5','numero',1),(7884,128,321,237,NULL,'8.5','numero',1),(7885,128,322,237,NULL,'8.5','numero',1),(7886,128,321,236,NULL,'9','numero',1),(7887,128,322,236,NULL,'9','numero',1),(7888,128,321,237,NULL,'9','numero',1),(7889,128,322,237,NULL,'9','numero',1),(7890,128,321,236,NULL,'15','numero',1),(7891,128,322,236,NULL,'15','numero',1),(7892,128,321,237,NULL,'15','numero',1),(7893,128,322,237,NULL,'15','numero',1),(7894,128,321,236,NULL,'15.5','numero',1),(7895,128,322,236,NULL,'15.5','numero',1),(7896,128,321,237,NULL,'15.5','numero',1),(7897,128,322,237,NULL,'15.5','numero',1),(7898,128,321,236,NULL,'16','numero',1),(7899,128,322,236,NULL,'16','numero',1),(7900,128,321,237,NULL,'16','numero',1),(7901,128,322,237,NULL,'16','numero',1),(7902,128,321,236,NULL,'16.5','numero',1),(7903,128,322,236,NULL,'16.5','numero',1),(7904,128,321,237,NULL,'16.5','numero',1),(7905,128,322,237,NULL,'16.5','numero',1),(7906,128,321,236,NULL,'17','numero',1),(7907,128,322,236,NULL,'17','numero',1),(7908,128,321,237,NULL,'17','numero',1),(7909,128,322,237,NULL,'17','numero',1),(7910,128,321,236,NULL,'17.5','numero',1),(7911,128,322,236,NULL,'17.5','numero',1),(7912,128,321,237,NULL,'17.5','numero',1),(7913,128,322,237,NULL,'17.5','numero',1),(7914,128,321,236,NULL,'18','numero',1),(7915,128,322,236,NULL,'18','numero',1),(7916,128,321,237,NULL,'18','numero',1),(7917,128,322,237,NULL,'18','numero',1),(7918,128,321,236,NULL,'18.5','numero',1),(7919,128,322,236,NULL,'18.5','numero',1),(7920,128,321,237,NULL,'18.5','numero',1),(7921,128,322,237,NULL,'18.5','numero',1),(7922,128,321,236,NULL,'19','numero',1),(7923,128,322,236,NULL,'19','numero',1),(7924,128,321,237,NULL,'19','numero',1),(7925,128,322,237,NULL,'19','numero',1),(7926,128,321,236,NULL,'19.5','numero',1),(7927,128,322,236,NULL,'19.5','numero',1),(7928,128,321,237,NULL,'19.5','numero',1),(7929,128,322,237,NULL,'19.5','numero',1),(7930,128,321,236,NULL,'20','numero',1),(7931,128,322,236,NULL,'20','numero',1),(7932,128,321,237,NULL,'20','numero',1),(7933,128,322,237,NULL,'20','numero',1),(7934,128,321,236,NULL,'20.5','numero',1),(7935,128,322,236,NULL,'20.5','numero',1),(7936,128,321,237,NULL,'20.5','numero',1),(7937,128,322,237,NULL,'20.5','numero',1),(7938,128,321,236,NULL,'21','numero',1),(7939,128,322,236,NULL,'21','numero',1),(7940,128,321,237,NULL,'21','numero',1),(7941,128,322,237,NULL,'21','numero',1),(7942,128,321,236,NULL,'21.5','numero',1),(7943,128,322,236,NULL,'21.5','numero',1),(7944,128,321,237,NULL,'21.5','numero',1),(7945,128,322,237,NULL,'21.5','numero',1),(7946,128,321,236,NULL,'22','numero',1),(7947,128,322,236,NULL,'22','numero',1),(7948,128,321,237,NULL,'22','numero',1),(7949,128,322,237,NULL,'22','numero',1),(7950,128,321,236,NULL,'22.5','numero',1),(7951,128,322,236,NULL,'22.5','numero',1),(7952,128,321,237,NULL,'22.5','numero',1),(7953,128,322,237,NULL,'22.5','numero',1),(7954,128,321,236,NULL,'23','numero',1),(7955,128,322,236,NULL,'23','numero',1),(7956,128,321,237,NULL,'23','numero',1),(7957,128,322,237,NULL,'23','numero',1),(8107,130,334,245,NULL,'7','numero',1),(8108,130,334,245,NULL,'7.5','numero',1),(8109,130,334,245,NULL,'8','numero',1),(8110,130,334,245,NULL,'8.5','numero',1),(8111,130,334,245,NULL,'9','numero',1),(8276,129,343,252,NULL,'7','numero',1),(8277,129,343,252,NULL,'7.5','numero',1),(8278,129,343,252,NULL,'8','numero',1),(8279,129,343,252,NULL,'8.5','numero',1),(8280,129,343,252,NULL,'9','numero',1),(8281,116,344,253,NULL,'26','numero',1),(8282,116,345,253,NULL,'26','numero',1),(8283,116,346,253,NULL,'26','numero',1),(8284,116,347,253,NULL,'26','numero',1),(8285,116,344,254,NULL,'26','numero',1),(8286,116,345,254,NULL,'26','numero',1),(8287,116,346,254,NULL,'26','numero',1),(8288,116,347,254,NULL,'26','numero',1),(8289,116,344,253,NULL,'26.5','numero',1),(8290,116,345,253,NULL,'26.5','numero',1),(8291,116,346,253,NULL,'26.5','numero',1),(8292,116,347,253,NULL,'26.5','numero',1),(8293,116,344,254,NULL,'26.5','numero',1),(8294,116,345,254,NULL,'26.5','numero',1),(8295,116,346,254,NULL,'26.5','numero',1),(8296,116,347,254,NULL,'26.5','numero',1),(8297,116,344,253,NULL,'27','numero',1),(8298,116,345,253,NULL,'27','numero',1),(8299,116,346,253,NULL,'27','numero',1),(8300,116,347,253,NULL,'27','numero',1),(8301,116,344,254,NULL,'27','numero',1),(8302,116,345,254,NULL,'27','numero',1),(8303,116,346,254,NULL,'27','numero',1),(8304,116,347,254,NULL,'27','numero',1),(8305,116,344,253,NULL,'27.5','numero',1),(8306,116,345,253,NULL,'27.5','numero',1),(8307,116,346,253,NULL,'27.5','numero',1),(8308,116,347,253,NULL,'27.5','numero',1),(8309,116,344,254,NULL,'27.5','numero',1),(8310,116,345,254,NULL,'27.5','numero',1),(8311,116,346,254,NULL,'27.5','numero',1),(8312,116,347,254,NULL,'27.5','numero',1),(8313,116,344,253,NULL,'28','numero',1),(8314,116,345,253,NULL,'28','numero',1),(8315,116,346,253,NULL,'28','numero',1),(8316,116,347,253,NULL,'28','numero',1),(8317,116,344,254,NULL,'28','numero',1),(8318,116,345,254,NULL,'28','numero',1),(8319,116,346,254,NULL,'28','numero',1),(8320,116,347,254,NULL,'28','numero',1),(8321,116,344,253,NULL,'28.5','numero',1),(8322,116,345,253,NULL,'28.5','numero',1),(8323,116,346,253,NULL,'28.5','numero',1),(8324,116,347,253,NULL,'28.5','numero',1),(8325,116,344,254,NULL,'28.5','numero',1),(8326,116,345,254,NULL,'28.5','numero',1),(8327,116,346,254,NULL,'28.5','numero',1),(8328,116,347,254,NULL,'28.5','numero',1),(8329,116,344,253,NULL,'29','numero',1),(8330,116,345,253,NULL,'29','numero',1),(8331,116,346,253,NULL,'29','numero',1),(8332,116,347,253,NULL,'29','numero',1),(8333,116,344,254,NULL,'29','numero',1),(8334,116,345,254,NULL,'29','numero',1),(8335,116,346,254,NULL,'29','numero',1),(8336,116,347,254,NULL,'29','numero',1),(8337,116,344,253,NULL,'29.5','numero',1),(8338,116,345,253,NULL,'29.5','numero',1),(8339,116,346,253,NULL,'29.5','numero',1),(8340,116,347,253,NULL,'29.5','numero',1),(8341,116,344,254,NULL,'29.5','numero',1),(8342,116,345,254,NULL,'29.5','numero',1),(8343,116,346,254,NULL,'29.5','numero',1),(8344,116,347,254,NULL,'29.5','numero',1),(8345,116,344,253,NULL,'30','numero',1),(8346,116,345,253,NULL,'30','numero',1),(8347,116,346,253,NULL,'30','numero',1),(8348,116,347,253,NULL,'30','numero',1),(8349,116,344,254,NULL,'30','numero',1),(8350,116,345,254,NULL,'30','numero',1),(8351,116,346,254,NULL,'30','numero',1),(8352,116,347,254,NULL,'30','numero',1),(8353,116,344,253,NULL,'7','numero',1),(8354,116,345,253,NULL,'7','numero',1),(8355,116,346,253,NULL,'7','numero',1),(8356,116,347,253,NULL,'7','numero',1),(8357,116,344,254,NULL,'7','numero',1),(8358,116,345,254,NULL,'7','numero',1),(8359,116,346,254,NULL,'7','numero',1),(8360,116,347,254,NULL,'7','numero',1),(8361,116,344,253,NULL,'7.5','numero',1),(8362,116,345,253,NULL,'7.5','numero',1),(8363,116,346,253,NULL,'7.5','numero',1),(8364,116,347,253,NULL,'7.5','numero',1),(8365,116,344,254,NULL,'7.5','numero',1),(8366,116,345,254,NULL,'7.5','numero',1),(8367,116,346,254,NULL,'7.5','numero',1),(8368,116,347,254,NULL,'7.5','numero',1),(8369,116,344,253,NULL,'8','numero',1),(8370,116,345,253,NULL,'8','numero',1),(8371,116,346,253,NULL,'8','numero',1),(8372,116,347,253,NULL,'8','numero',1),(8373,116,344,254,NULL,'8','numero',1),(8374,116,345,254,NULL,'8','numero',1),(8375,116,346,254,NULL,'8','numero',1),(8376,116,347,254,NULL,'8','numero',1),(8377,116,344,253,NULL,'8.5','numero',1),(8378,116,345,253,NULL,'8.5','numero',1),(8379,116,346,253,NULL,'8.5','numero',1),(8380,116,347,253,NULL,'8.5','numero',1),(8381,116,344,254,NULL,'8.5','numero',1),(8382,116,345,254,NULL,'8.5','numero',1),(8383,116,346,254,NULL,'8.5','numero',1),(8384,116,347,254,NULL,'8.5','numero',1),(8385,116,344,253,NULL,'9','numero',1),(8386,116,345,253,NULL,'9','numero',1),(8387,116,346,253,NULL,'9','numero',1),(8388,116,347,253,NULL,'9','numero',1),(8389,116,344,254,NULL,'9','numero',1),(8390,116,345,254,NULL,'9','numero',1),(8391,116,346,254,NULL,'9','numero',1),(8392,116,347,254,NULL,'9','numero',1),(8393,116,344,253,NULL,'m','medida',1),(8394,116,345,253,NULL,'m','medida',1),(8395,116,346,253,NULL,'m','medida',1),(8396,116,347,253,NULL,'m','medida',1),(8397,116,344,254,NULL,'m','medida',1),(8398,116,345,254,NULL,'m','medida',1),(8399,116,346,254,NULL,'m','medida',1),(8400,116,347,254,NULL,'m','medida',1),(8401,116,344,253,NULL,'l','medida',1),(8402,116,345,253,NULL,'l','medida',1),(8403,116,346,253,NULL,'l','medida',1),(8404,116,347,253,NULL,'l','medida',1),(8405,116,344,254,NULL,'l','medida',1),(8406,116,345,254,NULL,'l','medida',1),(8407,116,346,254,NULL,'l','medida',1),(8408,116,347,254,NULL,'l','medida',1),(8409,116,344,253,NULL,'xl','medida',1),(8410,116,345,253,NULL,'xl','medida',1),(8411,116,346,253,NULL,'xl','medida',1),(8412,116,347,253,NULL,'xl','medida',1),(8413,116,344,254,NULL,'xl','medida',1),(8414,116,345,254,NULL,'xl','medida',1),(8415,116,346,254,NULL,'xl','medida',1),(8416,116,347,254,NULL,'xl','medida',1),(8417,116,344,253,NULL,'xxl','medida',1),(8418,116,345,253,NULL,'xxl','medida',1),(8419,116,346,253,NULL,'xxl','medida',1),(8420,116,347,253,NULL,'xxl','medida',1),(8421,116,344,254,NULL,'xxl','medida',1),(8422,116,345,254,NULL,'xxl','medida',1),(8423,116,346,254,NULL,'xxl','medida',1),(8424,116,347,254,NULL,'xxl','medida',1),(8425,131,348,255,NULL,'7','numero',1),(8426,131,348,255,NULL,'7.5','numero',1),(8427,131,348,255,NULL,'8','numero',1),(8428,131,348,255,NULL,'8.5','numero',1),(8429,131,348,255,NULL,'9','numero',1),(8430,132,349,256,NULL,'7','numero',1),(8431,132,350,256,NULL,'7','numero',1),(8432,132,349,256,NULL,'7.5','numero',1),(8433,132,350,256,NULL,'7.5','numero',1),(8434,132,349,256,NULL,'8','numero',1),(8435,132,350,256,NULL,'8','numero',1),(8436,132,349,256,NULL,'8.5','numero',1),(8437,132,350,256,NULL,'8.5','numero',1),(8438,132,349,256,NULL,'9','numero',1),(8439,132,350,256,NULL,'9','numero',1),(8440,133,351,257,NULL,'7','numero',1),(8441,133,352,257,NULL,'7','numero',1),(8442,133,351,257,NULL,'7.5','numero',1),(8443,133,352,257,NULL,'7.5','numero',1),(8444,133,351,257,NULL,'8','numero',1),(8445,133,352,257,NULL,'8','numero',1),(8446,133,351,257,NULL,'8.5','numero',1),(8447,133,352,257,NULL,'8.5','numero',1),(8448,133,351,257,NULL,'9','numero',1),(8449,133,352,257,NULL,'9','numero',1),(8450,134,353,258,NULL,'7','numero',1),(8451,134,354,258,NULL,'7','numero',1),(8452,134,353,258,NULL,'7.5','numero',1),(8453,134,354,258,NULL,'7.5','numero',1),(8454,134,353,258,NULL,'8','numero',1),(8455,134,354,258,NULL,'8','numero',1),(8456,134,353,258,NULL,'8.5','numero',1),(8457,134,354,258,NULL,'8.5','numero',1),(8458,134,353,258,NULL,'9','numero',1),(8459,134,354,258,NULL,'9','numero',1),(8460,135,355,259,NULL,'7','numero',1),(8461,135,355,259,NULL,'7.5','numero',1),(8462,135,355,259,NULL,'8','numero',1),(8463,135,355,259,NULL,'8.5','numero',1),(8464,135,355,259,NULL,'9','numero',1),(8465,136,356,260,NULL,'7','numero',1),(8466,136,356,260,NULL,'7.5','numero',1),(8467,136,356,260,NULL,'8','numero',1),(8468,136,356,260,NULL,'8.5','numero',1),(8469,136,356,260,NULL,'9','numero',1),(8470,137,357,261,NULL,'7','numero',1),(8471,137,357,261,NULL,'7.5','numero',1),(8472,137,357,261,NULL,'8','numero',1),(8473,137,357,261,NULL,'8.5','numero',1),(8474,137,357,261,NULL,'9','numero',1),(8475,138,358,262,NULL,'7','numero',1),(8476,138,358,262,NULL,'7.5','numero',1),(8477,138,358,262,NULL,'8','numero',1),(8478,138,358,262,NULL,'8.5','numero',1),(8479,138,358,262,NULL,'9','numero',1),(8480,139,359,263,NULL,'7','numero',1),(8481,139,359,263,NULL,'7.5','numero',1),(8482,139,359,263,NULL,'8','numero',1),(8483,139,359,263,NULL,'8.5','numero',1),(8484,139,359,263,NULL,'9','numero',1),(8485,140,360,264,NULL,'7','numero',1),(8486,140,360,264,NULL,'7.5','numero',1),(8487,140,360,264,NULL,'8','numero',1),(8488,140,360,264,NULL,'8.5','numero',1),(8489,140,360,264,NULL,'9','numero',1),(8490,141,361,265,NULL,'7','numero',1),(8491,141,361,265,NULL,'7.5','numero',1),(8492,141,361,265,NULL,'8','numero',1),(8493,141,361,265,NULL,'8.5','numero',1),(8494,141,361,265,NULL,'9','numero',1),(8495,142,362,266,NULL,'7','numero',1),(8496,142,362,266,NULL,'7.5','numero',1),(8497,142,362,266,NULL,'8','numero',1),(8498,142,362,266,NULL,'8.5','numero',1),(8499,142,362,266,NULL,'9','numero',1),(8500,143,363,267,NULL,'7','numero',1),(8501,143,363,267,NULL,'7.5','numero',1),(8502,143,363,267,NULL,'8','numero',1),(8503,143,363,267,NULL,'8.5','numero',1),(8504,143,363,267,NULL,'9','numero',1),(8505,144,364,268,NULL,'7','numero',1),(8506,144,364,268,NULL,'7.5','numero',1),(8507,144,364,268,NULL,'8','numero',1),(8508,144,364,268,NULL,'8.5','numero',1),(8509,144,364,268,NULL,'9','numero',1),(8510,145,365,269,NULL,'7','numero',1),(8511,145,365,269,NULL,'7.5','numero',1),(8512,145,365,269,NULL,'8','numero',1),(8513,145,365,269,NULL,'8.5','numero',1),(8514,145,365,269,NULL,'9','numero',1),(8515,146,366,270,NULL,'7','numero',1),(8516,146,366,270,NULL,'7.5','numero',1),(8517,146,366,270,NULL,'8','numero',1),(8518,146,366,270,NULL,'8.5','numero',1),(8519,146,366,270,NULL,'9','numero',1),(8520,147,367,271,NULL,'7','numero',1),(8521,147,367,271,NULL,'7.5','numero',1),(8522,147,367,271,NULL,'8','numero',1),(8523,147,367,271,NULL,'8.5','numero',1),(8524,147,367,271,NULL,'9','numero',1),(8525,148,368,272,NULL,'7','numero',1),(8526,148,368,272,NULL,'7.5','numero',1),(8527,148,368,272,NULL,'8','numero',1),(8528,148,368,272,NULL,'8.5','numero',1),(8529,148,368,272,NULL,'9','numero',1),(8530,149,369,273,NULL,'7','numero',1),(8531,149,369,273,NULL,'7.5','numero',1),(8532,149,369,273,NULL,'8','numero',1),(8533,149,369,273,NULL,'8.5','numero',1),(8534,149,369,273,NULL,'9','numero',1),(8535,150,370,274,NULL,'7','numero',1),(8536,150,370,274,NULL,'7.5','numero',1),(8537,150,370,274,NULL,'8','numero',1),(8538,150,370,274,NULL,'8.5','numero',1),(8539,150,370,274,NULL,'9','numero',1),(8540,151,371,275,'Test 6 - Piel / Rojo / 7','7','numero',1),(8541,151,371,275,'Test 6 - Piel / Rojo / 7.5','7.5','numero',1),(8542,151,371,275,'Test 6 - Piel / Rojo / 8','8','numero',1),(8543,151,371,275,'Test 6 - Piel / Rojo / 8.5','8.5','numero',1),(8544,151,371,275,'Test 6 - Piel / Rojo / 9','9','numero',1),(8545,152,372,276,'Test 6 - Piel / Rojo / 15','15','numero',1),(8546,152,372,276,NULL,'15.5','numero',1),(8547,152,372,276,NULL,'16','numero',1),(8548,152,372,276,NULL,'16.5','numero',1),(8549,152,372,276,NULL,'17','numero',1),(8550,152,372,276,NULL,'17.5','numero',1),(8551,152,372,276,NULL,'18','numero',1),(8552,152,372,276,NULL,'18.5','numero',1),(8553,152,372,276,NULL,'19','numero',1),(8554,152,372,276,NULL,'19.5','numero',1),(8555,152,372,276,NULL,'20','numero',1),(8556,152,372,276,NULL,'20.5','numero',1),(8557,152,372,276,NULL,'21','numero',1),(8558,152,372,276,NULL,'21.5','numero',1),(8559,152,372,276,NULL,'22','numero',1),(8560,152,372,276,NULL,'22.5','numero',1),(8561,152,372,276,NULL,'23','numero',1),(8562,153,373,277,'Test 6PielRojo-15','15','numero',1),(8563,153,373,277,NULL,'15.5','numero',1),(8564,153,373,277,NULL,'16','numero',1),(8565,153,373,277,NULL,'16.5','numero',1),(8566,153,373,277,NULL,'17','numero',1),(8567,153,373,277,NULL,'17.5','numero',1),(8568,153,373,277,NULL,'18','numero',1),(8569,153,373,277,NULL,'18.5','numero',1),(8570,153,373,277,NULL,'19','numero',1),(8571,153,373,277,NULL,'19.5','numero',1),(8572,153,373,277,NULL,'20','numero',1),(8573,153,373,277,NULL,'20.5','numero',1),(8574,153,373,277,NULL,'21','numero',1),(8575,153,373,277,NULL,'21.5','numero',1),(8576,153,373,277,NULL,'22','numero',1),(8577,153,373,277,NULL,'22.5','numero',1),(8578,153,373,277,NULL,'23','numero',1),(8579,154,374,278,'Test 6PielRojo15','15','numero',1),(8580,154,374,278,NULL,'15.5','numero',1),(8581,154,374,278,NULL,'16','numero',1),(8582,154,374,278,NULL,'16.5','numero',1),(8583,154,374,278,NULL,'17','numero',1),(8584,154,374,278,NULL,'17.5','numero',1),(8585,154,374,278,NULL,'18','numero',1),(8586,154,374,278,NULL,'18.5','numero',1),(8587,154,374,278,NULL,'19','numero',1),(8588,154,374,278,NULL,'19.5','numero',1),(8589,154,374,278,NULL,'20','numero',1),(8590,154,374,278,NULL,'20.5','numero',1),(8591,154,374,278,NULL,'21','numero',1),(8592,154,374,278,NULL,'21.5','numero',1),(8593,154,374,278,NULL,'22','numero',1),(8594,154,374,278,NULL,'22.5','numero',1),(8595,154,374,278,NULL,'23','numero',1),(8596,155,375,279,'Test 6PielRojo15','15','numero',1),(8597,155,375,279,'Test 6PielRojo15.5','15.5','numero',1),(8598,155,375,279,'Test 6PielRojo16','16','numero',1),(8599,155,375,279,'Test 6PielRojo16.5','16.5','numero',1),(8600,155,375,279,'Test 6PielRojo17','17','numero',1),(8601,155,375,279,'Test 6PielRojo17.5','17.5','numero',1),(8602,155,375,279,'Test 6PielRojo18','18','numero',1),(8603,155,375,279,'Test 6PielRojo18.5','18.5','numero',1),(8604,155,375,279,'Test 6PielRojo19','19','numero',1),(8605,155,375,279,'Test 6PielRojo19.5','19.5','numero',1),(8606,155,375,279,'Test 6PielRojo20','20','numero',1),(8607,155,375,279,'Test 6PielRojo20.5','20.5','numero',1),(8608,155,375,279,'Test 6PielRojo21','21','numero',1),(8609,155,375,279,'Test 6PielRojo21.5','21.5','numero',1),(8610,155,375,279,'Test 6PielRojo22','22','numero',1),(8611,155,375,279,'Test 6PielRojo22.5','22.5','numero',1),(8612,155,375,279,'Test 6PielRojo23','23','numero',1),(8613,156,376,280,'zarely8613','7','numero',1),(8614,156,377,280,'zarely8614','7','numero',1),(8615,156,378,280,'zarely8615','7','numero',1),(8616,156,379,280,'zarely8616','7','numero',1),(8617,156,380,280,'zarely8617','7','numero',1),(8618,156,376,280,'zarely8618','7.5','numero',1),(8619,156,377,280,'zarely8619','7.5','numero',1),(8620,156,378,280,'zarely8620','7.5','numero',1),(8621,156,379,280,'zarely8621','7.5','numero',1),(8622,156,380,280,'zarely8622','7.5','numero',1),(8623,156,376,280,'zarely8623','8','numero',1),(8624,156,377,280,'zarely8624','8','numero',1),(8625,156,378,280,'zarely8625','8','numero',1),(8626,156,379,280,'zarely8626','8','numero',1),(8627,156,380,280,'zarely8627','8','numero',1),(8628,156,376,280,'zarely8628','8.5','numero',1),(8629,156,377,280,'zarely8629','8.5','numero',1),(8630,156,378,280,'zarely8630','8.5','numero',1),(8631,156,379,280,'zarely8631','8.5','numero',1),(8632,156,380,280,'zarely8632','8.5','numero',1),(8633,156,376,280,'zarely8633','9','numero',1),(8634,156,377,280,'zarely8634','9','numero',1),(8635,156,378,280,'zarely8635','9','numero',1),(8636,156,379,280,'zarely8636','9','numero',1),(8637,156,380,280,'zarely8637','9','numero',1),(8818,157,384,283,'zarely8818','7','numero',1),(8819,157,384,283,'zarely8819','7.5','numero',1),(8820,157,384,283,'zarely8820','8','numero',1),(8821,157,384,283,'zarely8821','8.5','numero',1),(8822,157,384,283,'zarely8822','9','numero',1),(8823,157,384,283,'zarely8823','9.5','numero',1),(8824,157,384,283,'zarely8824','10','numero',1),(8825,157,384,283,'zarely8825','10.5','numero',1),(8826,157,384,283,'zarely8826','11','numero',1),(8827,157,384,283,'zarely8827','11.5','numero',1),(8828,157,384,283,'zarely8828','12','numero',1),(8829,157,384,283,'zarely8829','12.5','numero',1),(8830,157,384,283,'zarely8830','13','numero',1);
/*!40000 ALTER TABLE `productovariante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocion`
--

DROP TABLE IF EXISTS `promocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocion` (
  `idpromocion` int(11) NOT NULL AUTO_INCREMENT,
  `promocion_nombre` text NOT NULL,
  `promocion_fechainicio` date NOT NULL,
  `promocion_fechafin` date NOT NULL,
  `promocion_estatus` tinyint(1) NOT NULL,
  `promocion_descripcion` text,
  PRIMARY KEY (`idpromocion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocion`
--

LOCK TABLES `promocion` WRITE;
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
INSERT INTO `promocion` VALUES (1,'2 x 1/2','2017-05-27','2017-05-28',1,'PromociÃ³n al 2 x 1/2');
/*!40000 ALTER TABLE `promocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promociondetalle`
--

DROP TABLE IF EXISTS `promociondetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promociondetalle` (
  `idpromociondetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idpromocion` int(11) NOT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `idproductovariante` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpromociondetalle`),
  KEY `idpromocion` (`idpromocion`),
  KEY `idmarca` (`idmarca`),
  KEY `idproducto` (`idproducto`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `idmarca_promociondetalle` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_promociondetalle` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_promociondetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idpromocion_promociondetalle` FOREIGN KEY (`idpromocion`) REFERENCES `promocion` (`idpromocion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promociondetalle`
--

LOCK TABLES `promociondetalle` WRITE;
/*!40000 ALTER TABLE `promociondetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `promociondetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor_nombrecomercial` varchar(45) DEFAULT NULL,
  `proveedor_telefono` varchar(45) DEFAULT NULL,
  `proveedor_celular` varchar(45) DEFAULT NULL,
  `proveedor_fechainicio` date DEFAULT NULL,
  `proveedor_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Armando','234234','3432425','2005-05-06','arm_chiva@hotmail.com'),(12,'Juan','12341','21341','2010-12-12','arm_chiva@hotmail.com'),(13,'Nike Mexico','23423','234234','0018-01-01','arm_chiva@hotmail.com');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedormarca`
--

DROP TABLE IF EXISTS `proveedormarca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedormarca` (
  `idproveedormarca` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  PRIMARY KEY (`idproveedormarca`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idmarca` (`idmarca`),
  CONSTRAINT `idmarca_proveedormarca` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproveedor_proveedormarca` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedormarca`
--

LOCK TABLES `proveedormarca` WRITE;
/*!40000 ALTER TABLE `proveedormarca` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedormarca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(45) NOT NULL,
  `rol_descripcion` text NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador','Administrador'),(2,'Secretaria A','Secretaria A'),(3,'Secretaria B','Secretaria B'),(4,'Caja','Caja'),(5,'Vendedora','Vendedora'),(6,'Cajero super','Cajero super'),(7,'Sat','Administrador');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL AUTO_INCREMENT,
  `sucursal_nombrecomercial` varchar(255) NOT NULL,
  `sucursal_razonsocial` varchar(255) NOT NULL,
  `sucursal_calle` varchar(45) DEFAULT NULL,
  `sucursal_numexterno` varchar(45) DEFAULT NULL,
  `sucursal_numinterior` varchar(45) DEFAULT NULL,
  `sucursal_colonia` varchar(45) DEFAULT NULL,
  `sucursal_codigopostal` varchar(45) DEFAULT NULL,
  `sucursal_ciudad` varchar(45) DEFAULT NULL,
  `sucursal_estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
INSERT INTO `sucursal` VALUES (1,'Oneclicks','adsjkfl','Si','470','234','Si','12343','Guadaljara','Jalisco'),(2,'Otra sucursal','OTRA_SUCURSAL','asdfad','234','232','JArdines del sur','34234','Guadalajra','Jalisco');
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursalempleado`
--

DROP TABLE IF EXISTS `sucursalempleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursalempleado` (
  `idsucursalempleado` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `sucursalempleado_estatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`idsucursalempleado`),
  KEY `idsucursal` (`idsucursal`),
  KEY `idempleado` (`idempleado`),
  CONSTRAINT `idempleado_sucursalempleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_sucursalempleado` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursalempleado`
--

LOCK TABLES `sucursalempleado` WRITE;
/*!40000 ALTER TABLE `sucursalempleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursalempleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tallaje`
--

DROP TABLE IF EXISTS `tallaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tallaje` (
  `idtallaje` int(11) NOT NULL AUTO_INCREMENT,
  `tallaje_nombre` varchar(45) NOT NULL,
  `talla_70` tinyint(1) DEFAULT NULL,
  `talla_75` tinyint(1) DEFAULT NULL,
  `talla_80` tinyint(1) DEFAULT NULL,
  `talla_85` tinyint(1) DEFAULT NULL,
  `talla_90` tinyint(1) DEFAULT NULL,
  `talla_95` tinyint(1) DEFAULT NULL,
  `talla_100` tinyint(1) DEFAULT NULL,
  `talla_105` tinyint(1) DEFAULT NULL,
  `talla_110` tinyint(1) DEFAULT NULL,
  `talla_115` tinyint(1) DEFAULT NULL,
  `talla_120` tinyint(1) DEFAULT NULL,
  `talla_125` tinyint(1) DEFAULT NULL,
  `talla_130` tinyint(1) DEFAULT NULL,
  `talla_135` tinyint(1) DEFAULT NULL,
  `talla_140` tinyint(1) DEFAULT NULL,
  `talla_145` tinyint(1) DEFAULT NULL,
  `talla_150` tinyint(1) DEFAULT NULL,
  `talla_155` tinyint(1) DEFAULT NULL,
  `talla_160` tinyint(1) DEFAULT NULL,
  `talla_165` tinyint(1) DEFAULT NULL,
  `talla_170` tinyint(1) DEFAULT NULL,
  `talla_175` tinyint(1) DEFAULT NULL,
  `talla_180` tinyint(1) DEFAULT NULL,
  `talla_185` tinyint(1) DEFAULT NULL,
  `talla_190` tinyint(1) DEFAULT NULL,
  `talla_195` tinyint(1) DEFAULT NULL,
  `talla_200` tinyint(1) DEFAULT NULL,
  `talla_205` tinyint(1) DEFAULT NULL,
  `talla_210` tinyint(1) DEFAULT NULL,
  `talla_215` tinyint(1) DEFAULT NULL,
  `talla_220` tinyint(1) DEFAULT NULL,
  `talla_225` tinyint(1) DEFAULT NULL,
  `talla_230` tinyint(1) DEFAULT NULL,
  `talla_235` tinyint(1) DEFAULT NULL,
  `talla_240` tinyint(1) DEFAULT NULL,
  `talla_245` tinyint(1) DEFAULT NULL,
  `talla_250` tinyint(1) DEFAULT NULL,
  `talla_255` tinyint(1) DEFAULT NULL,
  `talla_260` tinyint(1) DEFAULT NULL,
  `talla_265` tinyint(1) DEFAULT NULL,
  `talla_270` tinyint(1) DEFAULT NULL,
  `talla_275` tinyint(1) DEFAULT NULL,
  `talla_280` tinyint(1) DEFAULT NULL,
  `talla_285` tinyint(1) DEFAULT NULL,
  `talla_290` tinyint(1) DEFAULT NULL,
  `talla_295` tinyint(1) DEFAULT NULL,
  `talla_300` tinyint(1) DEFAULT NULL,
  `talla_305` tinyint(1) DEFAULT NULL,
  `talla_310` tinyint(1) DEFAULT NULL,
  `talla_315` tinyint(1) DEFAULT NULL,
  `talla_320` tinyint(1) DEFAULT NULL,
  `talla_325` tinyint(1) DEFAULT NULL,
  `talla_330` tinyint(1) DEFAULT NULL,
  `talla_335` tinyint(1) DEFAULT NULL,
  `talla_340` tinyint(1) DEFAULT NULL,
  `talla_345` tinyint(1) DEFAULT NULL,
  `talla_350` tinyint(1) DEFAULT NULL,
  `tallajerango` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtallaje`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tallaje`
--

LOCK TABLES `tallaje` WRITE;
/*!40000 ALTER TABLE `tallaje` DISABLE KEYS */;
INSERT INTO `tallaje` VALUES (2,'Señor',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'19 - 22.5'),(3,'Señora',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,'19.5 - 35'),(5,'Adulto',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,'26 - 30'),(6,'NiÃ±o',1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'7 - 9.5'),(7,'Joven',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'15 - 23'),(8,'Adulto chingons',1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'7 - 13.5');
/*!40000 ALTER TABLE `tallaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetapuntos`
--

DROP TABLE IF EXISTS `tarjetapuntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetapuntos` (
  `idtarjetapuntos` int(11) NOT NULL AUTO_INCREMENT,
  `tarjetapuntos_fechaactivacion` datetime NOT NULL,
  `tarjetapuntos_estatus` tinyint(1) NOT NULL,
  `tarjetapuntos_puntos` int(11) NOT NULL,
  `idempleadoactivador` int(11) NOT NULL,
  PRIMARY KEY (`idtarjetapuntos`),
  KEY `idempleadoactivador_tarjetapuntos_idx` (`idempleadoactivador`),
  CONSTRAINT `idempleadoactivador_tarjetapuntos` FOREIGN KEY (`idempleadoactivador`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetapuntos`
--

LOCK TABLES `tarjetapuntos` WRITE;
/*!40000 ALTER TABLE `tarjetapuntos` DISABLE KEYS */;
INSERT INTO `tarjetapuntos` VALUES (1,'0000-00-00 00:00:00',1,31,1),(3,'2017-07-20 00:00:00',1,3,4),(4,'2017-07-20 00:00:00',1,4,4),(5,'2017-07-20 00:00:00',1,3,4),(6,'2017-07-21 00:00:00',1,4,4),(7,'2017-08-25 00:00:00',1,0,2),(8,'2017-10-12 00:00:00',1,0,2),(9,'2017-10-12 00:00:00',1,0,2),(10,'2017-10-12 00:00:00',1,0,2),(11,'2017-10-27 00:00:00',1,0,2),(12,'2017-10-27 00:00:00',1,0,2),(13,'2017-10-27 00:00:00',1,0,2),(14,'2017-10-27 00:00:00',1,0,2),(15,'2017-10-27 00:00:00',1,0,2),(16,'2017-10-27 00:00:00',1,0,2),(17,'2017-10-27 00:00:00',1,0,2),(18,'2017-10-27 00:00:00',1,0,2),(19,'2017-10-27 00:00:00',1,0,2),(20,'2017-10-27 00:00:00',1,0,2),(21,'2017-10-27 00:00:00',1,0,2),(22,'2017-10-27 00:00:00',1,0,2),(23,'2017-10-27 00:00:00',1,0,2),(24,'2017-10-27 00:00:00',1,0,2),(25,'2017-10-27 00:00:00',1,0,2),(26,'2017-10-27 00:00:00',1,0,2),(27,'2017-10-28 00:00:00',1,0,2),(28,'2017-10-28 00:00:00',1,0,2),(29,'2017-10-28 00:00:00',1,0,2),(30,'2017-10-28 00:00:00',1,0,2),(31,'2017-10-30 00:00:00',1,0,2),(32,'2017-10-30 00:00:00',1,0,2);
/*!40000 ALTER TABLE `tarjetapuntos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetapuntosdetalle`
--

DROP TABLE IF EXISTS `tarjetapuntosdetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetapuntosdetalle` (
  `idtarjetapuntosdetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idtarjetapuntos` int(11) NOT NULL,
  `tarjetapuntosdetalle_tipo` enum('ingreso','egreso') NOT NULL,
  `tarjetapuntosdetalle_cantidad` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  PRIMARY KEY (`idtarjetapuntosdetalle`),
  KEY `idventa` (`idventa`),
  KEY `idempleado` (`idempleado`),
  KEY `idtarjetapuntos_tarjetapuntosdetalle_idx` (`idtarjetapuntos`),
  CONSTRAINT `idempleado_tarjetapuntosdetalle` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtarjetapuntos_tarjetapuntosdetalle` FOREIGN KEY (`idtarjetapuntos`) REFERENCES `tarjetapuntos` (`idtarjetapuntos`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idventa_tarjetapuntosdetalle` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetapuntosdetalle`
--

LOCK TABLES `tarjetapuntosdetalle` WRITE;
/*!40000 ALTER TABLE `tarjetapuntosdetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarjetapuntosdetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporada`
--

DROP TABLE IF EXISTS `temporada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporada` (
  `idtemporada` int(11) NOT NULL AUTO_INCREMENT,
  `temporada_nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`idtemporada`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporada`
--

LOCK TABLES `temporada` WRITE;
/*!40000 ALTER TABLE `temporada` DISABLE KEYS */;
INSERT INTO `temporada` VALUES (1,'Verano'),(2,'OtoÃ±o'),(3,'Primavera - Verano'),(4,'Invierno'),(15,'asdf');
/*!40000 ALTER TABLE `temporada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocalzado`
--

DROP TABLE IF EXISTS `tipocalzado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipocalzado` (
  `idtipocalzado` int(11) NOT NULL AUTO_INCREMENT,
  `tipocalzado_nombre` varchar(45) NOT NULL,
  `tipocalzado_descripcion` text,
  PRIMARY KEY (`idtipocalzado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocalzado`
--

LOCK TABLES `tipocalzado` WRITE;
/*!40000 ALTER TABLE `tipocalzado` DISABLE KEYS */;
INSERT INTO `tipocalzado` VALUES (4,'Correr','Te hace muy rapido');
/*!40000 ALTER TABLE `tipocalzado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transferencia`
--

DROP TABLE IF EXISTS `transferencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transferencia` (
  `idtransferencia` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursalorigen` int(11) NOT NULL,
  `idsucursaldestino` int(11) NOT NULL,
  `transferencia_fecha` datetime NOT NULL,
  `transferencia_estatus` enum('creada','aceptada','rechazada','cancelada') NOT NULL,
  `idempleadocreador` int(11) NOT NULL,
  `idempleadoreceptor` int(11) DEFAULT NULL,
  `transferencia_nota` varchar(45) DEFAULT NULL,
  `transferencia_fecharecepcion` datetime DEFAULT NULL,
  `transferencia_razon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtransferencia`),
  KEY `idsucursalorigen` (`idsucursalorigen`),
  KEY `idsucursaldestino` (`idsucursaldestino`),
  KEY `idempleadocreador` (`idempleadocreador`),
  KEY `idempleadoreceptor` (`idempleadoreceptor`),
  CONSTRAINT `idempleadocreador_transferencia` FOREIGN KEY (`idempleadocreador`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idempleadoreceptor_transferencia` FOREIGN KEY (`idempleadoreceptor`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursaldestino_transferencia` FOREIGN KEY (`idsucursaldestino`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursalorigen_transferencia` FOREIGN KEY (`idsucursalorigen`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transferencia`
--

LOCK TABLES `transferencia` WRITE;
/*!40000 ALTER TABLE `transferencia` DISABLE KEYS */;
INSERT INTO `transferencia` VALUES (5,1,2,'2017-07-04 19:34:27','cancelada',4,1,'asdfasdf','2017-07-04 19:34:27','asdfasdf'),(7,1,2,'2017-07-07 00:05:05','aceptada',4,7,'adsfasd','2017-07-07 00:00:00','asdfasdfasdfasdf');
/*!40000 ALTER TABLE `transferencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transferenciadetalle`
--

DROP TABLE IF EXISTS `transferenciadetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transferenciadetalle` (
  `idtransferenciadetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idtransferencia` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `transferenciadetalle_cantidad` decimal(10,2) NOT NULL,
  `transferenciadetalle_preciounitario` decimal(10,2) NOT NULL,
  `transferenciadetalle_subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idtransferenciadetalle`),
  KEY `idtransferencia` (`idtransferencia`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `idproductovariante_transferenciadetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtransferencia_transferenciadetalle` FOREIGN KEY (`idtransferencia`) REFERENCES `transferencia` (`idtransferencia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transferenciadetalle`
--

LOCK TABLES `transferenciadetalle` WRITE;
/*!40000 ALTER TABLE `transferenciadetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `transferenciadetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vale`
--

DROP TABLE IF EXISTS `vale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vale` (
  `idvale` int(11) NOT NULL AUTO_INCREMENT,
  `idsucursal` int(11) NOT NULL,
  `vale_cantidad` decimal(10,5) NOT NULL,
  `vale_estatus` tinyint(1) NOT NULL,
  `vale_vigenciadesde` datetime NOT NULL,
  `vale_vigenciahasta` datetime NOT NULL,
  `vale_cantidadutilizada` decimal(10,5) DEFAULT NULL,
  PRIMARY KEY (`idvale`),
  KEY `idsucursal` (`idsucursal`),
  CONSTRAINT `idsucursal_vale` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vale`
--

LOCK TABLES `vale` WRITE;
/*!40000 ALTER TABLE `vale` DISABLE KEYS */;
/*!40000 ALTER TABLE `vale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL AUTO_INCREMENT,
  `idempleadocajero` int(11) NOT NULL,
  `idempleadovendedor` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `venta_total` decimal(15,5) NOT NULL,
  `venta_fecha` datetime NOT NULL,
  `venta_comprobante` text,
  `idsucursal` int(11) NOT NULL,
  `venta_estatuspago` tinyint(1) NOT NULL,
  `venta_tipo` enum('venta','credito','apartado') NOT NULL,
  `venta_subtotal` decimal(15,5) NOT NULL,
  `venta_iva` decimal(15,5) NOT NULL,
  `venta_estatus` enum('cancelada','completada','procesando','devolucion','defecto') NOT NULL,
  `venta_facturacion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idventa`),
  KEY `idempleadocajero` (`idempleadocajero`),
  KEY `idempleadovendedor` (`idempleadovendedor`),
  KEY `idcliente` (`idcliente`),
  KEY `idsucursal` (`idsucursal`),
  CONSTRAINT `idcliente_venta` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idempleadocajero_venta` FOREIGN KEY (`idempleadocajero`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idempleadovendedor_venta` FOREIGN KEY (`idempleadovendedor`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursal_venta` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventadetalle`
--

DROP TABLE IF EXISTS `ventadetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventadetalle` (
  `idventadetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idventa` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `ventadetalle_cantidad` int(11) NOT NULL,
  `ventadetalle_subtotal` decimal(15,5) NOT NULL,
  `ventadetalle_preciounitario` decimal(15,5) NOT NULL,
  `ventadetalle_estatus` enum('completo','defecto','cambio') NOT NULL,
  `ventadetalle_descuento` float DEFAULT NULL,
  PRIMARY KEY (`idventadetalle`),
  KEY `idventa` (`idventa`),
  KEY `idproductovariante` (`idproductovariante`),
  CONSTRAINT `idproductovariante_ventadetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idventa_ventadetalle` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventadetalle`
--

LOCK TABLES `ventadetalle` WRITE;
/*!40000 ALTER TABLE `ventadetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventadetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventapago`
--

DROP TABLE IF EXISTS `ventapago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventapago` (
  `idventapago` int(11) NOT NULL AUTO_INCREMENT,
  `idventa` int(11) NOT NULL,
  `venta_fecha` datetime NOT NULL,
  `idempleado` int(11) NOT NULL,
  `ventapago_metododepago` enum('efectivo','vales','tarjeta','puntos') NOT NULL,
  `ventapago_cantidad` decimal(15,5) DEFAULT NULL,
  `ventapago_referencia` varchar(50) DEFAULT NULL,
  `ventapago_cuatrodigitos` varchar(4) DEFAULT NULL,
  `idvale` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idventapago`),
  KEY `idventa` (`idventa`),
  KEY `idempleado` (`idempleado`),
  CONSTRAINT `idempleado_ventapago` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idventa_ventapago` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventapago`
--

LOCK TABLES `ventapago` WRITE;
/*!40000 ALTER TABLE `ventapago` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventapago` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-18 12:02:27
