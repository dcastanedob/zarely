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
  `cliente_credito` tinyint(1) NOT NULL,
  `cliente_limitecredito` decimal(15,5) DEFAULT NULL,
  `cliente_creditorestante` decimal(15,5) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'Rojo'),(2,'Azul');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compradetalle`
--

DROP TABLE IF EXISTS `compradetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compradetalle` (
  `idcompradetalle` int(11) NOT NULL,
  `idcompra` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `compradetalle_cantidad` decimal(10,2) NOT NULL,
  `compradetalle_preciounitario` decimal(10,2) NOT NULL,
  `compradetalle_subtotal` decimal(10,2) NOT NULL,
  `compradetalle_costo` decimal(10,2) NOT NULL,
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
  `configuracion_descuentosat` float NOT NULL,
  PRIMARY KEY (`idconfiguracion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracion`
--

LOCK TABLES `configuracion` WRITE;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
INSERT INTO `configuracion` VALUES (1,22);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentabancaria`
--

LOCK TABLES `cuentabancaria` WRITE;
/*!40000 ALTER TABLE `cuentabancaria` DISABLE KEYS */;
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
  `cuentabancariamovimiento_tipo` enum('efectivo','cheque','transferencia') NOT NULL,
  `cuentabancariamovimiento_referencia` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuento`
--

LOCK TABLES `descuento` WRITE;
/*!40000 ALTER TABLE `descuento` DISABLE KEYS */;
/*!40000 ALTER TABLE `descuento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentodetalle`
--

DROP TABLE IF EXISTS `descuentodetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descuentodetalle` (
  `iddescuentodetalle` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devolucion`
--

LOCK TABLES `devolucion` WRITE;
/*!40000 ALTER TABLE `devolucion` DISABLE KEYS */;
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
INSERT INTO `empleado` VALUES (1,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'administrador','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',1),(2,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'secretaria a','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',2),(3,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'secretaria b','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',3),(4,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'caja','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',4),(5,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'vendedora','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',5),(6,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'cajero super','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',6),(7,'JesÃºs Armando','Alonso ','Orozco','adsf','adsf','123423412','234234','arm_chiva@hotmail.com',1,'sat','e10adc3949ba59abbe56e057f20f883e',1,'2018-01-02 13:12:44','2018-01-02','Isla salinas','0','2422','Jardines de la cruz','45054','Guadalajara','Jalisco',7);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gasto`
--

LOCK TABLES `gasto` WRITE;
/*!40000 ALTER TABLE `gasto` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'Converse');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcatallaje`
--

LOCK TABLES `marcatallaje` WRITE;
/*!40000 ALTER TABLE `marcatallaje` DISABLE KEYS */;
INSERT INTO `marcatallaje` VALUES (1,1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (1,'Piel');
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
  `medida_nombre` tinyint(1) DEFAULT NULL,
  `medida_xs` tinyint(1) DEFAULT NULL,
  `medida_s` tinyint(1) DEFAULT NULL,
  `medida_m` tinyint(1) DEFAULT NULL,
  `medida_l` tinyint(1) DEFAULT NULL,
  `medida_xl` tinyint(1) DEFAULT NULL,
  `medida_xxl` tinyint(1) DEFAULT NULL,
  `medida_unitalla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmedida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medida`
--

LOCK TABLES `medida` WRITE;
/*!40000 ALTER TABLE `medida` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidomayorista`
--

LOCK TABLES `pedidomayorista` WRITE;
/*!40000 ALTER TABLE `pedidomayorista` DISABLE KEYS */;
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
  `pedidomayoristadetalle_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
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
  `idtipocalzado` int(11) NOT NULL,
  `producto_descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `idmarca` (`idmarca`),
  KEY `idtemporada` (`idtemporada`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idtipocalzado` (`idtipocalzado`),
  CONSTRAINT `idmarca_producto` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproveedor_producto` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtemporada_producto` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idtipocalzado_producto` FOREIGN KEY (`idtipocalzado`) REFERENCES `tipocalzado` (`idtipocalzado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (2,'M234',1,1,0,1,'jovenes',800.00000,750.00000,750,10,1,NULL),(8,'M1234',1,1,0,1,'dama',790.00000,750.00000,745,10,1,NULL),(9,'M1234',1,1,0,1,'dama',790.00000,750.00000,745,10,1,NULL),(10,'R001',1,1,0,1,'dama',790.00000,750.00000,740,10,1,NULL);
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
  `productocolor_fotografia` text,
  PRIMARY KEY (`idproductocolor`),
  KEY `idproducto` (`idproducto`),
  KEY `idcolor` (`idcolor`),
  CONSTRAINT `idcolor_productocolor` FOREIGN KEY (`idcolor`) REFERENCES `color` (`idcolor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_productocolor` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productocolor`
--

LOCK TABLES `productocolor` WRITE;
/*!40000 ALTER TABLE `productocolor` DISABLE KEYS */;
INSERT INTO `productocolor` VALUES (2,2,1,'/img/productocolor/2.jpg'),(3,2,2,'/img/productocolor/3.jpg'),(4,8,1,'/img/productocolor/4.jpg'),(5,8,2,'/img/productocolor/5.jpg'),(6,10,1,'/img/productocolor/6.jpg'),(7,10,2,'/img/productocolor/7.jpg');
/*!40000 ALTER TABLE `productocolor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productomaterial`
--

DROP TABLE IF EXISTS `productomaterial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productomaterial` (
  `idproductomaterial` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL,
  PRIMARY KEY (`idproductomaterial`),
  KEY `idproducto` (`idproducto`),
  KEY `idmaterial` (`idmaterial`),
  CONSTRAINT `idmaterial_productomaterial` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`idmaterial`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproducto_productomaterial` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productomaterial`
--

LOCK TABLES `productomaterial` WRITE;
/*!40000 ALTER TABLE `productomaterial` DISABLE KEYS */;
INSERT INTO `productomaterial` VALUES (0,10,1),(1,8,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productosucursal`
--

LOCK TABLES `productosucursal` WRITE;
/*!40000 ALTER TABLE `productosucursal` DISABLE KEYS */;
INSERT INTO `productosucursal` VALUES (1,21,1,3,740,10,790.00000,750.00000,1,10.00000),(2,22,1,0,740,10,790.00000,750.00000,1,10.00000),(3,23,1,0,740,10,790.00000,750.00000,1,10.00000),(4,24,1,0,740,10,790.00000,750.00000,1,10.00000),(5,25,1,0,740,10,790.00000,750.00000,1,10.00000),(6,26,1,0,740,10,790.00000,750.00000,1,10.00000),(7,27,1,0,740,10,790.00000,750.00000,1,10.00000),(8,28,1,0,740,10,790.00000,750.00000,1,10.00000),(9,29,1,0,740,10,790.00000,750.00000,1,10.00000),(10,30,1,10,740,10,790.00000,750.00000,1,10.00000),(11,21,2,3,740,10,790.00000,750.00000,1,10.00000);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productotallaje`
--

LOCK TABLES `productotallaje` WRITE;
/*!40000 ALTER TABLE `productotallaje` DISABLE KEYS */;
INSERT INTO `productotallaje` VALUES (1,10,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productovariante`
--

LOCK TABLES `productovariante` WRITE;
/*!40000 ALTER TABLE `productovariante` DISABLE KEYS */;
INSERT INTO `productovariante` VALUES (21,10,6,0,'zarely21','7','numero',1),(22,10,7,0,'zarely22','7','numero',1),(23,10,6,0,'zarely23','7.5','numero',1),(24,10,7,0,'zarely24','7.5','numero',1),(25,10,6,0,'zarely25','8','numero',1),(26,10,7,0,'zarely26','8','numero',1),(27,10,6,0,'zarely27','8.5','numero',1),(28,10,7,0,'zarely28','8.5','numero',1),(29,10,6,0,'zarely29','9','numero',1),(30,10,7,0,'zarely30','9','numero',1);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocion`
--

LOCK TABLES `promocion` WRITE;
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Zarely NuÃ±o','33432343','3423434','2018-01-02','zarely@hotmail.com');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedormarca`
--

LOCK TABLES `proveedormarca` WRITE;
/*!40000 ALTER TABLE `proveedormarca` DISABLE KEYS */;
INSERT INTO `proveedormarca` VALUES (1,1,1);
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
INSERT INTO `rol` VALUES (1,'Administrador','administrador de zarely'),(2,'Secretaria a',''),(3,'Secretaria b',''),(4,'Caja',''),(5,'Vendedora',''),(6,'Cajero super',''),(7,'Sat','');
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
INSERT INTO `sucursal` VALUES (1,'Zarely Centro','jalksdfjalkd','adsf','23','34','34','34','43','34'),(2,'Zarely Sur','jalksdfjalkd','adsf','23','34','34','34','43','34');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursalempleado`
--

LOCK TABLES `sucursalempleado` WRITE;
/*!40000 ALTER TABLE `sucursalempleado` DISABLE KEYS */;
INSERT INTO `sucursalempleado` VALUES (1,1,5,0),(2,1,4,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tallaje`
--

LOCK TABLES `tallaje` WRITE;
/*!40000 ALTER TABLE `tallaje` DISABLE KEYS */;
INSERT INTO `tallaje` VALUES (1,'Adulto',1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'7 - 9.5');
/*!40000 ALTER TABLE `tallaje` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporada`
--

LOCK TABLES `temporada` WRITE;
/*!40000 ALTER TABLE `temporada` DISABLE KEYS */;
INSERT INTO `temporada` VALUES (1,'Invierno');
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
  PRIMARY KEY (`idtipocalzado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocalzado`
--

LOCK TABLES `tipocalzado` WRITE;
/*!40000 ALTER TABLE `tipocalzado` DISABLE KEYS */;
INSERT INTO `tipocalzado` VALUES (1,'Run');
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
  `transferencia_estatus` enum('creada','aceptada','rechazada') NOT NULL,
  `idempleadocreador` int(11) NOT NULL,
  `idempleadoreceptor` int(11) NOT NULL,
  `transferencia_nota` varchar(45) DEFAULT NULL,
  `transferencia_fecharecepcion` datetime DEFAULT NULL,
  PRIMARY KEY (`idtransferencia`),
  KEY `idsucursalorigen` (`idsucursalorigen`),
  KEY `idsucursaldestino` (`idsucursaldestino`),
  KEY `idempleadocreador` (`idempleadocreador`),
  KEY `idempleadoreceptor` (`idempleadoreceptor`),
  CONSTRAINT `idempleadocreador_transferencia` FOREIGN KEY (`idempleadocreador`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idempleadoreceptor_transferencia` FOREIGN KEY (`idempleadoreceptor`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursaldestino_transferencia` FOREIGN KEY (`idsucursaldestino`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsucursalorigen_transferencia` FOREIGN KEY (`idsucursalorigen`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transferencia`
--

LOCK TABLES `transferencia` WRITE;
/*!40000 ALTER TABLE `transferencia` DISABLE KEYS */;
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
  `venta_tipo` enum('compra','credito','apartado') NOT NULL,
  `venta_subtotal` decimal(15,5) NOT NULL,
  `venta_iva` decimal(15,5) NOT NULL,
  `venta_estatus` enum('cancelada','completada','') NOT NULL,
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
  `iddescuento` int(11) DEFAULT NULL,
  `idpromocion` int(11) DEFAULT NULL,
  `idproductovariante` int(11) DEFAULT NULL,
  `ventadetalle_cantidad` int(11) NOT NULL,
  `ventadetalle_subtotal` decimal(15,5) NOT NULL,
  `ventadetalle_preciounitario` decimal(15,5) NOT NULL,
  `ventadetalle_estatus` enum('completo','defecto','cambio') NOT NULL,
  `ventadetalle_descuento` float DEFAULT NULL,
  `idventadetallapadre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idventadetalle`),
  KEY `idventa` (`idventa`),
  KEY `idproductovariante` (`idproductovariante`),
  KEY `iddescuento` (`iddescuento`),
  KEY `idpromocion` (`idpromocion`),
  KEY `idventadetallepadre` (`idventadetallapadre`),
  CONSTRAINT `iddescuento_ventadetalle` FOREIGN KEY (`iddescuento`) REFERENCES `descuento` (`iddescuento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idproductovariante_ventadetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idpromocion_ventadetalle` FOREIGN KEY (`idpromocion`) REFERENCES `promocion` (`idpromocion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idventa_ventadetalle` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idventadetallepadre_ventadetalle` FOREIGN KEY (`idventadetallapadre`) REFERENCES `ventadetalle` (`idventadetalle`) ON DELETE CASCADE ON UPDATE CASCADE
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
  `ventapago_metododepago` enum('efectivo','vales','tarjeta') NOT NULL,
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

-- Dump completed on 2018-01-05 16:43:39
