-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2017 a las 19:03:48
-- Versión del servidor: 5.6.31
-- Versión de PHP: 5.4.42

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oneclick_zarely`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL,
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
  `cliente_estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `cliente_nombre`, `cliente_apaterno`, `cliente_amaterno`, `cliente_rfc`, `cliente_razonsocial`, `cliente_callefiscal`, `cliente_numerofiscal`, `cliente_interiorfiscal`, `cliente_coloniafiscal`, `cliente_ciudadfiscal`, `cliente_cpfiscal`, `cliente_estadofiscal`, `cliente_calle`, `cliente_numero`, `cliente_interior`, `cliente_colonia`, `cliente_cp`, `cliente_ciudad`, `cliente_estado`, `cliente_tipo`, `cliente_fecharegistro`, `cliente_estatus`) VALUES
(1, 'Armando', 'Alonso', 'Orozco', 'adsf', 'adsf', 'jsdfk', '324', '243', 'Jasdf', 'Guadaljara', '23432', 'Jalisco', 'Isla salinas', '2422', '2324', 'Jardines del sur', '48599', 'Guadalajra', 'Jalisco', 'mayorista', '2017-03-01', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `idcolor` int(11) NOT NULL,
  `color_nombre` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`idcolor`, `color_nombre`) VALUES
(2, 'Rojo'),
(3, 'Verde'),
(4, 'Azul'),
(5, 'Negro'),
(6, 'Blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `compra_fechacreacion` date NOT NULL COMMENT 'fecha que se setea por default, de acuerdo a la hora del sistema',
  `compra_fechacompra` date NOT NULL COMMENT 'fecha que ingresa el usuario',
  `compra_total` decimal(10,5) NOT NULL,
  `compra_estatuspago` tinyint(1) NOT NULL,
  `compra_estatus` enum('pendiente','enviada','procesando','en transito','recibido','revisado') NOT NULL,
  `compra_nota` varchar(45) DEFAULT NULL,
  `compra_comprobante` varchar(45) DEFAULT NULL,
  `compra_fechaentrega` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idcompra`, `idproveedor`, `compra_fechacreacion`, `compra_fechacompra`, `compra_total`, `compra_estatuspago`, `compra_estatus`, `compra_nota`, `compra_comprobante`, `compra_fechaentrega`) VALUES
(6, 1, '2017-03-14', '2017-12-05', 32.00000, 1, 'en transito', 'asdfasdf', '', '2017-12-05'),
(7, 1, '2017-03-15', '0029-01-09', 16.00000, 0, 'procesando', 'adsfasdfasd', '/files/compras/7.jpg', '0029-01-09'),
(8, 1, '2017-03-15', '2017-12-05', 6.00000, 1, 'enviada', NULL, '', '2017-12-05'),
(9, 1, '2017-03-15', '2017-12-05', 2374.00000, 0, 'revisado', 'Este pedido se harÃ  para todos', '', '2017-12-05'),
(10, 1, '2017-03-15', '0023-04-10', 13.00000, 1, 'pendiente', 'qsdfadsf', '/files/compras/10.', '0023-04-10'),
(11, 1, '2017-03-16', '2017-12-05', 8.00000, 1, 'en transito', 'adsfasdfasdf', '', '2017-12-05'),
(12, 1, '2017-03-16', '2017-12-05', 47.00000, 1, 'pendiente', 'asdfads', '', '2017-12-05'),
(13, 1, '2017-03-17', '0024-03-06', 2379.00000, 1, 'pendiente', 'asdfasdfasd', '', '0023-08-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compradetalle`
--

CREATE TABLE IF NOT EXISTS `compradetalle` (
  `idcompradetalle` int(11) NOT NULL,
  `idcompra` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `compradetalle_cantidad` decimal(10,2) NOT NULL,
  `compradetalle_preciounitario` decimal(10,2) DEFAULT NULL,
  `compradetalle_subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compradetalle`
--

INSERT INTO `compradetalle` (`idcompradetalle`, `idcompra`, `idproductovariante`, `compradetalle_cantidad`, `compradetalle_preciounitario`, `compradetalle_subtotal`) VALUES
(47, 8, 6897, 1.00, 1.00, 1.00),
(48, 8, 6898, 1.00, 1.00, 1.00),
(49, 8, 6899, 1.00, 1.00, 1.00),
(50, 8, 6900, 1.00, 1.00, 1.00),
(51, 8, 6901, 1.00, 1.00, 1.00),
(52, 8, 6902, 1.00, 1.00, 1.00),
(65, 11, 6897, 1.00, 1.00, 1.00),
(66, 11, 6898, 1.00, 1.00, 1.00),
(67, 11, 6899, 1.00, 1.00, 1.00),
(68, 11, 6900, 1.00, 1.00, 1.00),
(69, 11, 6915, 2.00, 1.00, 2.00),
(70, 11, 6919, 1.00, 1.00, 1.00),
(71, 11, 6923, 1.00, 1.00, 1.00),
(72, 6, 6897, 2.00, 4.00, 8.00),
(73, 6, 6898, 3.00, 6.00, 18.00),
(74, 6, 6915, 1.00, 1.00, 1.00),
(75, 6, 6919, 2.00, 1.00, 2.00),
(76, 6, 6923, 3.00, 1.00, 3.00),
(125, 12, 6915, 1.00, 1.00, 1.00),
(126, 12, 6917, 2.00, 1.00, 2.00),
(127, 12, 6919, 4.00, 1.00, 4.00),
(128, 12, 6921, 5.00, 1.00, 5.00),
(129, 12, 6923, 35.00, 1.00, 35.00),
(130, 9, 6898, 12.00, 100.00, 1200.00),
(131, 9, 6899, 11.00, 100.00, 1100.00),
(132, 9, 6915, 2.00, 1.00, 2.00),
(133, 9, 6917, 3.00, 1.00, 3.00),
(134, 9, 6919, 2.00, 1.00, 2.00),
(135, 9, 6921, 67.00, 1.00, 67.00),
(179, 13, 6897, 12.00, 1.00, 12.00),
(180, 13, 6898, 13.00, 1.00, 13.00),
(181, 13, 6899, 12.00, 1.00, 12.00),
(182, 13, 6915, 2342.00, 1.00, 2342.00),
(191, 7, 6897, 1.00, 5.00, 5.00),
(192, 7, 6898, 1.00, 6.00, 6.00),
(193, 7, 6899, 1.00, 5.00, 5.00),
(194, 10, 6966, 2.00, 2.00, 4.00),
(195, 10, 6994, 3.00, 3.00, 9.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `idconfiguracion` int(11) NOT NULL,
  `configuracion_` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentabancaria`
--

CREATE TABLE IF NOT EXISTS `cuentabancaria` (
  `idcuentabancaria` int(11) NOT NULL,
  `cuentabancaria_banco` varchar(255) NOT NULL,
  `cuentabancaria_cuenta` varchar(45) NOT NULL,
  `cuentabancaria_saldo` decimal(15,5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuentabancaria`
--

INSERT INTO `cuentabancaria` (`idcuentabancaria`, `cuentabancaria_banco`, `cuentabancaria_cuenta`, `cuentabancaria_saldo`) VALUES
(3, 'Bancomer', '34234234', 1000.00000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE IF NOT EXISTS `devolucion` (
  `iddevolucion` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `devolucion_fecha` date NOT NULL,
  `devolucion_total` decimal(10,5) NOT NULL,
  `devolucion_estatus` enum('pendiente','completado') NOT NULL,
  `devolucion_nota` text,
  `devolucion_comprobante` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`iddevolucion`, `idproveedor`, `devolucion_fecha`, `devolucion_total`, `devolucion_estatus`, `devolucion_nota`, `devolucion_comprobante`) VALUES
(6, 1, '2017-03-30', 20.00000, 'pendiente', 'asdfasdfasdasdfasdfasd', '/files/devoluciones/6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciondetalle`
--

CREATE TABLE IF NOT EXISTS `devoluciondetalle` (
  `iddevoluciondetalle` int(11) NOT NULL,
  `iddevolucion` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `devoluciondetalle_cantidad` decimal(10,2) NOT NULL,
  `devoluciondetalle_preciounitario` decimal(10,2) NOT NULL,
  `devoluciondetalle_subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `devoluciondetalle`
--

INSERT INTO `devoluciondetalle` (`iddevoluciondetalle`, `iddevolucion`, `idproductovariante`, `devoluciondetalle_cantidad`, `devoluciondetalle_preciounitario`, `devoluciondetalle_subtotal`) VALUES
(105, 6, 6920, 11.00, 1.00, 11.00),
(106, 6, 6921, 4.00, 1.00, 4.00),
(107, 6, 6923, 5.00, 1.00, 5.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `idempleado` int(11) NOT NULL,
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
  `idrol` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `empleado_nombre`, `empleado_apaterno`, `empleado_amaterno`, `empleado_rfc`, `empleado_nss`, `empleado_curp`, `empleado_telefono`, `empleado_email`, `empleado_estatus`, `empleado_username`, `empleado_password`, `empleado_comision`, `empleado_fechaentrada`, `empleado_fechanacimiento`, `empleado_calle`, `empleado_numexterno`, `empleado_numinterno`, `empleado_colonia`, `empleado_codigopostal`, `empleado_ciudad`, `empleado_estado`, `idrol`) VALUES
(1, 'Armando Caja', 'Alonso', '-Orozco', 'wf23fa', 'ajlksdf', 'asldjkf', '3317238689', 'arm_chiva@hotmail.com', 1, 'armandoalonso', 'asdf', 0, '2017-02-15 14:29:25', '1996-04-18', 'Fletes', '260', '234', 'La AscenciÃ²n', '48500', 'Cocula', 'Jalisco', 4),
(2, 'Juan vendedor', 'Alonso', '-Orozco', 'wf23fa', 'ajlksdf', 'asldjkf', '3317238689', 'adsf', 1, 'armandoalonso', 'adsfads', 0, '2017-02-15 11:48:27', '1996-04-18', 'Fletes', '260', '234', 'La AscenciÃ²n', '48500', 'Cocula', 'Jalisco', 4),
(3, 'Petra vendedor', 'Hernandez', '-Orozco', 'wf23fa', 'ajlksdf', 'asldjkf', '3317238689', 'asdf', 1, 'armandoalonso', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2017-02-15 12:34:39', '1996-04-18', 'Fletes', '260', '234', 'La AscenciÃ²n', '48500', 'Cocula', 'Jalisco', 5),
(4, 'Armando ', 'Alonso', '-Orozco', 'wf23fa', 'ajlksdf', 'asldjkf', '3317238689', 'arm_chiva@hotmail.com', 1, 'armandoalonso18', 'e10adc3949ba59abbe56e057f20f883e', 0, '2017-02-15 10:43:34', '1996-04-18', 'Fletes', '260', '234', 'La AscenciÃ²n', '48500', 'Cocula', 'Jalisco', 4),
(5, '', '', '', NULL, NULL, NULL, NULL, NULL, 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2017-03-23 11:23:07', '2017-03-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE IF NOT EXISTS `gasto` (
  `idgasto` int(11) NOT NULL,
  `gasto_nombre` varchar(100) NOT NULL,
  `gasto_descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`idgasto`, `gasto_nombre`, `gasto_descripcion`) VALUES
(1, 'Mayor', 'Es un gasto mayor.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `idmarca` int(11) NOT NULL,
  `marca_nombre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `marca_nombre`) VALUES
(1, 'Converse'),
(2, 'Adidas'),
(3, 'Nike'),
(4, 'Jordan'),
(5, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcatallaje`
--

CREATE TABLE IF NOT EXISTS `marcatallaje` (
  `idmarcatallaje` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `idtallaje` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcatallaje`
--

INSERT INTO `marcatallaje` (`idmarcatallaje`, `idmarca`, `idtallaje`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 5),
(4, 5, 6),
(5, 5, 7),
(6, 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `idmaterial` int(11) NOT NULL,
  `material_nombre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`idmaterial`, `material_nombre`) VALUES
(2, 'Piel'),
(3, 'Cuero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE IF NOT EXISTS `medida` (
  `idmedida` int(11) NOT NULL,
  `medida_nombre` varchar(45) DEFAULT NULL,
  `medida_xs` tinyint(1) DEFAULT NULL,
  `medida_s` tinyint(1) DEFAULT NULL,
  `medida_m` tinyint(1) DEFAULT NULL,
  `medida_l` tinyint(1) DEFAULT NULL,
  `medida_xl` tinyint(1) DEFAULT NULL,
  `medida_xxl` tinyint(1) DEFAULT NULL,
  `medida_unitalla` tinyint(1) DEFAULT NULL,
  `medidasrango` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`idmedida`, `medida_nombre`, `medida_xs`, `medida_s`, `medida_m`, `medida_l`, `medida_xl`, `medida_xxl`, `medida_unitalla`, `medidasrango`) VALUES
(5, 'Adulto', 0, 0, 1, 1, 1, 1, 0, 'm - xxl'),
(6, 'sasdf', 1, 1, 1, 0, 0, 0, 0, 'xs - m');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `pedido_fecha` date NOT NULL,
  `idproducto` int(11) NOT NULL,
  `pedido_cantidad` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `pedido_nota` text,
  `pedido_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `idsucursal`, `pedido_fecha`, `idproducto`, `pedido_cantidad`, `idproductovariante`, `pedido_nota`, `pedido_estatus`) VALUES
(3, 2, '2017-11-12', 117, 9, 6900, NULL, 'solicitado'),
(4, 1, '2017-11-12', 117, 19, 6916, NULL, 'solicitado'),
(5, 1, '2017-11-12', 117, 6, 6905, NULL, 'solicitado'),
(6, 1, '2017-11-12', 117, 6, 6900, NULL, 'transito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidomayorista`
--

CREATE TABLE IF NOT EXISTS `pedidomayorista` (
  `idpedidomayorista` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `pedidomayorista_fechasolicitud` date NOT NULL,
  `pedidomayorista_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
  `pedidomayorista_fechaentrega` date NOT NULL,
  `pedidomayorista_nota` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidomayorista`
--

INSERT INTO `pedidomayorista` (`idpedidomayorista`, `idcliente`, `pedidomayorista_fechasolicitud`, `pedidomayorista_estatus`, `pedidomayorista_fechaentrega`, `pedidomayorista_nota`) VALUES
(5, 1, '2017-01-31', 'transito', '2017-01-10', 'asdfadsf'),
(6, 1, '0024-05-09', 'solicitado', '0022-09-06', 'asdfasdfasdf'),
(7, 1, '0017-01-03', 'solicitado', '0017-02-03', 'SI'),
(8, 1, '0024-05-09', 'pendiente', '0024-05-09', 'asdfadsf'),
(9, 1, '0017-01-03', 'pendiente', '0017-02-03', 'fdfaasddsfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidomayoristadetalle`
--

CREATE TABLE IF NOT EXISTS `pedidomayoristadetalle` (
  `idpedidomayoristadetalle` int(11) NOT NULL,
  `idpedidomayorista` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `pedidomayoristadetalle_cantidad` int(11) NOT NULL,
  `pedidomayoristadetalle_estatus` enum('pendiente','solicitado','transito','completado') NOT NULL,
  `pedidomayoristadetalle_fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidomayoristadetalle`
--

INSERT INTO `pedidomayoristadetalle` (`idpedidomayoristadetalle`, `idpedidomayorista`, `idproductovariante`, `idproducto`, `pedidomayoristadetalle_cantidad`, `pedidomayoristadetalle_estatus`, `pedidomayoristadetalle_fecha`) VALUES
(31, 8, 6898, 117, 1, 'transito', '2029-10-13'),
(32, 8, 6899, 117, 2, 'transito', '2029-10-13'),
(33, 6, 6897, 117, 10, 'completado', '2029-10-13'),
(34, 7, 6897, 117, 1, 'completado', '2022-06-09'),
(35, 7, 6898, 117, 1, 'pendiente', '2022-06-09'),
(36, 7, 6899, 117, 2, 'pendiente', '2022-06-09'),
(37, 7, 6900, 117, 2, 'solicitado', '2022-06-09'),
(42, 9, 6897, 117, 1, 'pendiente', '2022-06-09'),
(43, 9, 6898, 117, 1, 'pendiente', '2022-06-09'),
(44, 9, 6899, 117, 1, 'pendiente', '2022-06-09'),
(45, 9, 6900, 117, 1, 'pendiente', '2022-06-09'),
(61, 5, 6897, 117, 1, 'transito', '2017-01-31'),
(62, 5, 6898, 117, 1, 'transito', '2017-01-31'),
(63, 5, 6899, 117, 1, 'transito', '2017-01-31'),
(64, 5, 6900, 117, 1, 'transito', '2017-01-31'),
(65, 5, 6915, 117, 2, 'transito', '2017-01-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL,
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
  `producto_descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `producto_modelo`, `idmarca`, `idtemporada`, `producto_comisionable`, `idproveedor`, `producto_dirigidoa`, `producto_precioventa`, `producto_preciomayoreo`, `producto_minimo`, `producto_reorden`, `producto_maximo`, `idtipocalzado`, `producto_descripcion`) VALUES
(116, 'Nike Free Run', 3, 3, 0, 13, 'caballero', 899.00000, 799.00000, 10, 10, NULL, 4, NULL),
(117, 'Adidas Free Run', 2, 2, 0, 1, 'nino', 120.00000, 120.00000, 10, 4, NULL, 4, NULL),
(118, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(119, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(120, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(121, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(122, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(123, 'sdf', 1, 1, 0, 1, 'dama', 32.00000, 23.00000, 234, 23, NULL, 4, NULL),
(124, 'PRODUCTO DEMO 1', 1, 1, 0, 1, 'dama', 500.00000, 400.00000, 5, 100, NULL, 4, NULL),
(125, 'PRODUCTO DEMO 2', 1, 1, 0, 1, 'dama', 500.00000, 400.00000, 5, 100, NULL, 4, NULL),
(126, 'PRODUCTO DEMO 3', 1, 1, 0, 1, 'dama', 500.00000, 400.00000, 5, 100, NULL, 4, NULL),
(127, 'PRODUCTO DEMO 4', 1, 1, 0, 1, 'dama', 500.00000, 400.00000, 100, 100, NULL, 4, NULL),
(128, 'PRODUCTO DEMO 4', 1, 1, 0, 1, 'dama', 500.00000, 400.00000, 100, 100, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocolor`
--

CREATE TABLE IF NOT EXISTS `productocolor` (
  `idproductocolor` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idcolor` int(11) NOT NULL,
  `productocolor_foto` text
) ENGINE=InnoDB AUTO_INCREMENT=333 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productocolor`
--

INSERT INTO `productocolor` (`idproductocolor`, `idproducto`, `idcolor`, `productocolor_foto`) VALUES
(309, 117, 2, '/img/productocolor/321.jpg'),
(310, 117, 3, '/img/productocolor/322.jpg'),
(311, 123, 2, 'guenergygel.jpg'),
(312, 123, 4, 'guenergybanana.jpg'),
(313, 123, 3, ''),
(314, 124, 2, ''),
(315, 124, 3, ''),
(316, 125, 2, NULL),
(317, 125, 3, NULL),
(318, 126, 2, '/img/productocolor/318.'),
(319, 126, 3, '/img/productocolor/319.'),
(320, 127, 2, NULL),
(321, 128, 2, '/img/productocolor/321.jpg'),
(322, 128, 3, '/img/productocolor/322.jpg'),
(329, 116, 4, NULL),
(330, 116, 5, NULL),
(331, 116, 6, NULL),
(332, 116, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productomaterial`
--

CREATE TABLE IF NOT EXISTS `productomaterial` (
  `idproductomaterial` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productomaterial`
--

INSERT INTO `productomaterial` (`idproductomaterial`, `idproducto`, `idmaterial`) VALUES
(221, 117, 2),
(222, 118, 2),
(223, 119, 2),
(224, 120, 2),
(225, 121, 2),
(226, 122, 2),
(227, 123, 2),
(228, 124, 2),
(229, 124, 3),
(230, 125, 2),
(231, 125, 3),
(232, 126, 2),
(233, 126, 3),
(234, 127, 2),
(235, 127, 3),
(236, 128, 2),
(237, 128, 3),
(242, 116, 2),
(243, 116, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productomedida`
--

CREATE TABLE IF NOT EXISTS `productomedida` (
  `idproductomedida` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idmedida` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productomedida`
--

INSERT INTO `productomedida` (`idproductomedida`, `idproducto`, `idmedida`) VALUES
(1, 116, 5),
(2, 116, 5),
(3, 116, 5),
(4, 116, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosucursal`
--

CREATE TABLE IF NOT EXISTS `productosucursal` (
  `idproductosucursal` int(11) NOT NULL,
  `idproductovariante` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `productosucursal_existencia` int(11) NOT NULL DEFAULT '0',
  `productosucursal_minimo` int(11) NOT NULL,
  `productosucursal_reorden` int(11) NOT NULL,
  `productosucursal_precioventa` decimal(10,5) NOT NULL,
  `productosucursal_preciomayoreo` decimal(10,5) NOT NULL,
  `productosucursal_estatus` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2567 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productosucursal`
--

INSERT INTO `productosucursal` (`idproductosucursal`, `idproductovariante`, `idsucursal`, `productosucursal_existencia`, `productosucursal_minimo`, `productosucursal_reorden`, `productosucursal_precioventa`, `productosucursal_preciomayoreo`, `productosucursal_estatus`) VALUES
(157, 6897, 1, 19, 2, 3, 4.00000, 120.00000, 1),
(158, 6898, 1, 20, 2, 3, 4.00000, 120.00000, 1),
(159, 6899, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(160, 6900, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(161, 6901, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(162, 6902, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(163, 6903, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(164, 6904, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(165, 6905, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(166, 6906, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(167, 6907, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(168, 6908, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(169, 6909, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(170, 6910, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(171, 6911, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(172, 6912, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(173, 6913, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(174, 6914, 1, 0, 2, 3, 4.00000, 120.00000, 1),
(175, 6915, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(176, 6916, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(177, 6917, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(178, 6918, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(179, 6919, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(180, 6920, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(181, 6921, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(182, 6922, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(183, 6923, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(184, 6924, 1, 0, 2, 4, 5.00000, 120.00000, 1),
(185, 6897, 2, 12, 1, 2, 4.00000, 120.00000, 1),
(186, 6898, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(187, 6899, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(188, 6900, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(189, 6901, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(190, 6902, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(191, 6903, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(192, 6904, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(193, 6905, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(194, 6906, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(195, 6907, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(196, 6908, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(197, 6909, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(198, 6910, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(199, 6911, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(200, 6912, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(201, 6913, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(202, 6914, 2, 0, 1, 2, 4.00000, 120.00000, 1),
(203, 6915, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(204, 6916, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(205, 6917, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(206, 6918, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(207, 6919, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(208, 6920, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(209, 6921, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(210, 6922, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(211, 6923, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(212, 6924, 2, 0, 10, 4, 6.00000, 120.00000, 1),
(213, 6925, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(214, 6926, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(215, 6927, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(216, 6928, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(217, 6929, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(218, 6930, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(219, 6931, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(220, 6932, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(221, 6933, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(222, 6934, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(223, 6935, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(224, 6936, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(225, 6937, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(226, 6938, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(227, 6939, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(228, 6940, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(229, 6941, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(230, 6942, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(231, 6943, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(232, 6944, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(233, 6945, 1, 0, 234, 23, 32.00000, 23.00000, 1),
(234, 6925, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(235, 6926, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(236, 6927, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(237, 6928, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(238, 6929, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(239, 6930, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(240, 6931, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(241, 6932, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(242, 6933, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(243, 6934, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(244, 6935, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(245, 6936, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(246, 6937, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(247, 6938, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(248, 6939, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(249, 6940, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(250, 6941, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(251, 6942, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(252, 6943, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(253, 6944, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(254, 6945, 2, 0, 234, 23, 32.00000, 23.00000, 1),
(255, 6946, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(256, 6947, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(257, 6948, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(258, 6949, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(259, 6950, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(260, 6951, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(261, 6952, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(262, 6953, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(263, 6954, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(264, 6955, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(265, 6956, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(266, 6957, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(267, 6958, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(268, 6959, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(269, 6960, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(270, 6961, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(271, 6962, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(272, 6963, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(273, 6964, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(274, 6965, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(275, 6966, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(276, 6967, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(277, 6968, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(278, 6969, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(279, 6970, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(280, 6971, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(281, 6972, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(282, 6973, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(283, 6974, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(284, 6975, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(285, 6976, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(286, 6977, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(287, 6978, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(288, 6979, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(289, 6980, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(290, 6981, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(291, 6982, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(292, 6983, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(293, 6984, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(294, 6985, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(295, 6986, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(296, 6987, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(297, 6988, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(298, 6989, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(299, 6990, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(300, 6991, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(301, 6992, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(302, 6993, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(303, 6994, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(304, 6995, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(305, 6996, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(306, 6997, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(307, 6998, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(308, 6999, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(309, 7000, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(310, 7001, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(311, 7002, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(312, 7003, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(313, 7004, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(314, 7005, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(315, 7006, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(316, 7007, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(317, 7008, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(318, 7009, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(319, 7010, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(320, 7011, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(321, 7012, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(322, 7013, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(323, 7014, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(324, 7015, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(325, 7016, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(326, 7017, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(327, 7018, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(328, 7019, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(329, 7020, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(330, 7021, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(331, 7022, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(332, 7023, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(333, 7024, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(334, 7025, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(335, 7026, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(336, 7027, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(337, 7028, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(338, 7029, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(339, 7030, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(340, 7031, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(341, 7032, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(342, 7033, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(343, 7034, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(344, 7035, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(345, 7036, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(346, 7037, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(347, 7038, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(348, 7039, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(349, 7040, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(350, 7041, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(351, 7042, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(352, 7043, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(353, 7044, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(354, 7045, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(355, 7046, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(356, 7047, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(357, 7048, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(358, 7049, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(359, 7050, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(360, 7051, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(361, 7052, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(362, 7053, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(363, 7054, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(364, 7055, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(365, 7056, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(366, 7057, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(367, 7058, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(368, 7059, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(369, 7060, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(370, 7061, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(371, 7062, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(372, 7063, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(373, 7064, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(374, 7065, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(375, 7066, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(376, 7067, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(377, 7068, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(378, 7069, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(379, 7070, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(380, 7071, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(381, 7072, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(382, 7073, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(383, 7074, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(384, 7075, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(385, 7076, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(386, 7077, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(387, 7078, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(388, 7079, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(389, 7080, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(390, 7081, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(391, 7082, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(392, 7083, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(393, 7084, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(394, 7085, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(395, 7086, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(396, 7087, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(397, 7088, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(398, 7089, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(399, 7090, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(400, 7091, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(401, 7092, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(402, 7093, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(403, 7094, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(404, 7095, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(405, 7096, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(406, 7097, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(407, 7098, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(408, 7099, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(409, 7100, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(410, 7101, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(411, 7102, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(412, 7103, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(413, 7104, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(414, 7105, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(415, 6946, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(416, 6947, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(417, 6948, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(418, 6949, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(419, 6950, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(420, 6951, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(421, 6952, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(422, 6953, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(423, 6954, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(424, 6955, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(425, 6956, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(426, 6957, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(427, 6958, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(428, 6959, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(429, 6960, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(430, 6961, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(431, 6962, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(432, 6963, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(433, 6964, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(434, 6965, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(435, 6966, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(436, 6967, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(437, 6968, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(438, 6969, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(439, 6970, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(440, 6971, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(441, 6972, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(442, 6973, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(443, 6974, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(444, 6975, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(445, 6976, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(446, 6977, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(447, 6978, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(448, 6979, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(449, 6980, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(450, 6981, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(451, 6982, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(452, 6983, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(453, 6984, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(454, 6985, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(455, 6986, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(456, 6987, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(457, 6988, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(458, 6989, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(459, 6990, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(460, 6991, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(461, 6992, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(462, 6993, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(463, 6994, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(464, 6995, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(465, 6996, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(466, 6997, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(467, 6998, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(468, 6999, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(469, 7000, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(470, 7001, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(471, 7002, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(472, 7003, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(473, 7004, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(474, 7005, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(475, 7006, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(476, 7007, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(477, 7008, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(478, 7009, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(479, 7010, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(480, 7011, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(481, 7012, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(482, 7013, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(483, 7014, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(484, 7015, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(485, 7016, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(486, 7017, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(487, 7018, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(488, 7019, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(489, 7020, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(490, 7021, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(491, 7022, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(492, 7023, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(493, 7024, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(494, 7025, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(495, 7026, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(496, 7027, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(497, 7028, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(498, 7029, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(499, 7030, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(500, 7031, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(501, 7032, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(502, 7033, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(503, 7034, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(504, 7035, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(505, 7036, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(506, 7037, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(507, 7038, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(508, 7039, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(509, 7040, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(510, 7041, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(511, 7042, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(512, 7043, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(513, 7044, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(514, 7045, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(515, 7046, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(516, 7047, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(517, 7048, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(518, 7049, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(519, 7050, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(520, 7051, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(521, 7052, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(522, 7053, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(523, 7054, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(524, 7055, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(525, 7056, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(526, 7057, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(527, 7058, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(528, 7059, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(529, 7060, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(530, 7061, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(531, 7062, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(532, 7063, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(533, 7064, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(534, 7065, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(535, 7066, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(536, 7067, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(537, 7068, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(538, 7069, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(539, 7070, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(540, 7071, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(541, 7072, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(542, 7073, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(543, 7074, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(544, 7075, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(545, 7076, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(546, 7077, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(547, 7078, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(548, 7079, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(549, 7080, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(550, 7081, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(551, 7082, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(552, 7083, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(553, 7084, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(554, 7085, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(555, 7086, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(556, 7087, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(557, 7088, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(558, 7089, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(559, 7090, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(560, 7091, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(561, 7092, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(562, 7093, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(563, 7094, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(564, 7095, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(565, 7096, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(566, 7097, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(567, 7098, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(568, 7099, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(569, 7100, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(570, 7101, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(571, 7102, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(572, 7103, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(573, 7104, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(574, 7105, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(575, 7106, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(576, 7107, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(577, 7108, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(578, 7109, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(579, 7110, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(580, 7111, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(581, 7112, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(582, 7113, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(583, 7114, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(584, 7115, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(585, 7116, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(586, 7117, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(587, 7118, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(588, 7119, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(589, 7120, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(590, 7121, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(591, 7122, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(592, 7123, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(593, 7124, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(594, 7125, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(595, 7126, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(596, 7127, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(597, 7128, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(598, 7129, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(599, 7130, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(600, 7131, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(601, 7132, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(602, 7133, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(603, 7134, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(604, 7135, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(605, 7136, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(606, 7137, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(607, 7138, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(608, 7139, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(609, 7140, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(610, 7141, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(611, 7142, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(612, 7143, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(613, 7144, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(614, 7145, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(615, 7146, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(616, 7147, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(617, 7148, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(618, 7149, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(619, 7150, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(620, 7151, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(621, 7152, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(622, 7153, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(623, 7154, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(624, 7155, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(625, 7156, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(626, 7157, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(627, 7158, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(628, 7159, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(629, 7160, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(630, 7161, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(631, 7162, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(632, 7163, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(633, 7164, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(634, 7165, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(635, 7166, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(636, 7167, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(637, 7168, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(638, 7169, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(639, 7170, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(640, 7171, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(641, 7172, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(642, 7173, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(643, 7174, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(644, 7175, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(645, 7176, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(646, 7177, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(647, 7178, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(648, 7179, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(649, 7180, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(650, 7181, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(651, 7182, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(652, 7183, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(653, 7184, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(654, 7185, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(655, 7186, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(656, 7187, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(657, 7188, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(658, 7189, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(659, 7190, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(660, 7191, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(661, 7192, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(662, 7193, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(663, 7194, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(664, 7195, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(665, 7196, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(666, 7197, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(667, 7198, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(668, 7199, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(669, 7200, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(670, 7201, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(671, 7202, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(672, 7203, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(673, 7204, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(674, 7205, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(675, 7206, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(676, 7207, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(677, 7208, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(678, 7209, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(679, 7210, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(680, 7211, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(681, 7212, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(682, 7213, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(683, 7214, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(684, 7215, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(685, 7216, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(686, 7217, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(687, 7218, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(688, 7219, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(689, 7220, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(690, 7221, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(691, 7222, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(692, 7223, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(693, 7224, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(694, 7225, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(695, 7226, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(696, 7227, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(697, 7228, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(698, 7229, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(699, 7230, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(700, 7231, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(701, 7232, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(702, 7233, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(703, 7234, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(704, 7235, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(705, 7236, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(706, 7237, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(707, 7238, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(708, 7239, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(709, 7240, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(710, 7241, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(711, 7242, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(712, 7243, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(713, 7244, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(714, 7245, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(715, 7246, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(716, 7247, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(717, 7248, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(718, 7249, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(719, 7250, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(720, 7251, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(721, 7252, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(722, 7253, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(723, 7254, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(724, 7255, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(725, 7256, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(726, 7257, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(727, 7258, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(728, 7259, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(729, 7260, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(730, 7261, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(731, 7262, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(732, 7263, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(733, 7264, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(734, 7265, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(735, 7266, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(736, 7267, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(737, 7268, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(738, 7269, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(739, 7270, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(740, 7271, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(741, 7272, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(742, 7273, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(743, 7274, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(744, 7275, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(745, 7276, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(746, 7277, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(747, 7278, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(748, 7279, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(749, 7280, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(750, 7281, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(751, 7282, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(752, 7283, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(753, 7284, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(754, 7285, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(755, 7286, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(756, 7287, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(757, 7288, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(758, 7289, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(759, 7290, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(760, 7291, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(761, 7292, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(762, 7293, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(763, 7294, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(764, 7295, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(765, 7296, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(766, 7297, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(767, 7298, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(768, 7299, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(769, 7300, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(770, 7301, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(771, 7302, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(772, 7303, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(773, 7304, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(774, 7305, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(775, 7306, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(776, 7307, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(777, 7308, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(778, 7309, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(779, 7310, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(780, 7311, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(781, 7312, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(782, 7313, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(783, 7314, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(784, 7315, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(785, 7316, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(786, 7317, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(787, 7318, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(788, 7319, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(789, 7320, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(790, 7321, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(791, 7322, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(792, 7323, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(793, 7324, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(794, 7325, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(795, 7326, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(796, 7327, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(797, 7328, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(798, 7329, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(799, 7330, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(800, 7331, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(801, 7332, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(802, 7333, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(803, 7334, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(804, 7335, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(805, 7336, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(806, 7337, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(807, 7338, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(808, 7339, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(809, 7340, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(810, 7341, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(811, 7342, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(812, 7343, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(813, 7344, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(814, 7345, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(815, 7346, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(816, 7347, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(817, 7348, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(818, 7349, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(819, 7350, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(820, 7351, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(821, 7352, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(822, 7353, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(823, 7354, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(824, 7355, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(825, 7356, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(826, 7357, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(827, 7358, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(828, 7359, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(829, 7360, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(830, 7361, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(831, 7362, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(832, 7363, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(833, 7364, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(834, 7365, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(835, 7366, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(836, 7367, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(837, 7368, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(838, 7369, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(839, 7370, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(840, 7371, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(841, 7372, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(842, 7373, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(843, 7374, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(844, 7375, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(845, 7376, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(846, 7377, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(847, 7378, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(848, 7379, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(849, 7380, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(850, 7381, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(851, 7382, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(852, 7383, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(853, 7384, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(854, 7385, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(855, 7386, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(856, 7387, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(857, 7388, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(858, 7389, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(859, 7106, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(860, 7107, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(861, 7108, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(862, 7109, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(863, 7110, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(864, 7111, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(865, 7112, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(866, 7113, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(867, 7114, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(868, 7115, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(869, 7116, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(870, 7117, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(871, 7118, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(872, 7119, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(873, 7120, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(874, 7121, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(875, 7122, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(876, 7123, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(877, 7124, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(878, 7125, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(879, 7126, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(880, 7127, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(881, 7128, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(882, 7129, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(883, 7130, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(884, 7131, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(885, 7132, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(886, 7133, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(887, 7134, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(888, 7135, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(889, 7136, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(890, 7137, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(891, 7138, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(892, 7139, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(893, 7140, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(894, 7141, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(895, 7142, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(896, 7143, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(897, 7144, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(898, 7145, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(899, 7146, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(900, 7147, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(901, 7148, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(902, 7149, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(903, 7150, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(904, 7151, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(905, 7152, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(906, 7153, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(907, 7154, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(908, 7155, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(909, 7156, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(910, 7157, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(911, 7158, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(912, 7159, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(913, 7160, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(914, 7161, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(915, 7162, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(916, 7163, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(917, 7164, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(918, 7165, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(919, 7166, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(920, 7167, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(921, 7168, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(922, 7169, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(923, 7170, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(924, 7171, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(925, 7172, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(926, 7173, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(927, 7174, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(928, 7175, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(929, 7176, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(930, 7177, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(931, 7178, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(932, 7179, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(933, 7180, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(934, 7181, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(935, 7182, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(936, 7183, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(937, 7184, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(938, 7185, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(939, 7186, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(940, 7187, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(941, 7188, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(942, 7189, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(943, 7190, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(944, 7191, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(945, 7192, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(946, 7193, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(947, 7194, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(948, 7195, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(949, 7196, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(950, 7197, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(951, 7198, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(952, 7199, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(953, 7200, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(954, 7201, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(955, 7202, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(956, 7203, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(957, 7204, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(958, 7205, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(959, 7206, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(960, 7207, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(961, 7208, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(962, 7209, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(963, 7210, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(964, 7211, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(965, 7212, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(966, 7213, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(967, 7214, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(968, 7215, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(969, 7216, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(970, 7217, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(971, 7218, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(972, 7219, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(973, 7220, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(974, 7221, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(975, 7222, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(976, 7223, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(977, 7224, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(978, 7225, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(979, 7226, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(980, 7227, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(981, 7228, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(982, 7229, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(983, 7230, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(984, 7231, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(985, 7232, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(986, 7233, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(987, 7234, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(988, 7235, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(989, 7236, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(990, 7237, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(991, 7238, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(992, 7239, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(993, 7240, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(994, 7241, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(995, 7242, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(996, 7243, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(997, 7244, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(998, 7245, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(999, 7246, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1000, 7247, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1001, 7248, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1002, 7249, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1003, 7250, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1004, 7251, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1005, 7252, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1006, 7253, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1007, 7254, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1008, 7255, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1009, 7256, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1010, 7257, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1011, 7258, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1012, 7259, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1013, 7260, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1014, 7261, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1015, 7262, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1016, 7263, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1017, 7264, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1018, 7265, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1019, 7266, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1020, 7267, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1021, 7268, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1022, 7269, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1023, 7270, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1024, 7271, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1025, 7272, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1026, 7273, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1027, 7274, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1028, 7275, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1029, 7276, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1030, 7277, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1031, 7278, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1032, 7279, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1033, 7280, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1034, 7281, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1035, 7282, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1036, 7283, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1037, 7284, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1038, 7285, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1039, 7286, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1040, 7287, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1041, 7288, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1042, 7289, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1043, 7290, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1044, 7291, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1045, 7292, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1046, 7293, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1047, 7294, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1048, 7295, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1049, 7296, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1050, 7297, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1051, 7298, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1052, 7299, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1053, 7300, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1054, 7301, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1055, 7302, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1056, 7303, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1057, 7304, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1058, 7305, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1059, 7306, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1060, 7307, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1061, 7308, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1062, 7309, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1063, 7310, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1064, 7311, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1065, 7312, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1066, 7313, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1067, 7314, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1068, 7315, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1069, 7316, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1070, 7317, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1071, 7318, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1072, 7319, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1073, 7320, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1074, 7321, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1075, 7322, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1076, 7323, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1077, 7324, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1078, 7325, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1079, 7326, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1080, 7327, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1081, 7328, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1082, 7329, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1083, 7330, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1084, 7331, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1085, 7332, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1086, 7333, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1087, 7334, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1088, 7335, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1089, 7336, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1090, 7337, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1091, 7338, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1092, 7339, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1093, 7340, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1094, 7341, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1095, 7342, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1096, 7343, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1097, 7344, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1098, 7345, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1099, 7346, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1100, 7347, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1101, 7348, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1102, 7349, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1103, 7350, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1104, 7351, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1105, 7352, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1106, 7353, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1107, 7354, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1108, 7355, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1109, 7356, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1110, 7357, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1111, 7358, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1112, 7359, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1113, 7360, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1114, 7361, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1115, 7362, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1116, 7363, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1117, 7364, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1118, 7365, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1119, 7366, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1120, 7367, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1121, 7368, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1122, 7369, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1123, 7370, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1124, 7371, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1125, 7372, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1126, 7373, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1127, 7374, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1128, 7375, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1129, 7376, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1130, 7377, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1131, 7378, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1132, 7379, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1133, 7380, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1134, 7381, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1135, 7382, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1136, 7383, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1137, 7384, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1138, 7385, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1139, 7386, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1140, 7387, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1141, 7388, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1142, 7389, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1143, 7390, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1144, 7391, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1145, 7392, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1146, 7393, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1147, 7394, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1148, 7395, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1149, 7396, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1150, 7397, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1151, 7398, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1152, 7399, 1, 0, 5, 100, 500.00000, 400.00000, 1);
INSERT INTO `productosucursal` (`idproductosucursal`, `idproductovariante`, `idsucursal`, `productosucursal_existencia`, `productosucursal_minimo`, `productosucursal_reorden`, `productosucursal_precioventa`, `productosucursal_preciomayoreo`, `productosucursal_estatus`) VALUES
(1153, 7400, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1154, 7401, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1155, 7402, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1156, 7403, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1157, 7404, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1158, 7405, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1159, 7406, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1160, 7407, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1161, 7408, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1162, 7409, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1163, 7410, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1164, 7411, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1165, 7412, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1166, 7413, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1167, 7414, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1168, 7415, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1169, 7416, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1170, 7417, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1171, 7418, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1172, 7419, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1173, 7420, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1174, 7421, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1175, 7422, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1176, 7423, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1177, 7424, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1178, 7425, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1179, 7426, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1180, 7427, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1181, 7428, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1182, 7429, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1183, 7430, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1184, 7431, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1185, 7432, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1186, 7433, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1187, 7434, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1188, 7435, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1189, 7436, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1190, 7437, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1191, 7438, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1192, 7439, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1193, 7440, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1194, 7441, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1195, 7442, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1196, 7443, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1197, 7444, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1198, 7445, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1199, 7446, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1200, 7447, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1201, 7448, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1202, 7449, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1203, 7450, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1204, 7451, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1205, 7452, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1206, 7453, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1207, 7454, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1208, 7455, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1209, 7456, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1210, 7457, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1211, 7458, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1212, 7459, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1213, 7460, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1214, 7461, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1215, 7462, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1216, 7463, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1217, 7464, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1218, 7465, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1219, 7466, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1220, 7467, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1221, 7468, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1222, 7469, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1223, 7470, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1224, 7471, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1225, 7472, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1226, 7473, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1227, 7474, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1228, 7475, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1229, 7476, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1230, 7477, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1231, 7478, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1232, 7479, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1233, 7480, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1234, 7481, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1235, 7482, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1236, 7483, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1237, 7484, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1238, 7485, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1239, 7486, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1240, 7487, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1241, 7488, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1242, 7489, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1243, 7490, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1244, 7491, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1245, 7492, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1246, 7493, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1247, 7494, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1248, 7495, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1249, 7496, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1250, 7497, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1251, 7498, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1252, 7499, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1253, 7500, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1254, 7501, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1255, 7502, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1256, 7503, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1257, 7504, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1258, 7505, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1259, 7506, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1260, 7507, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1261, 7508, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1262, 7509, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1263, 7510, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1264, 7511, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1265, 7512, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1266, 7513, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1267, 7514, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1268, 7515, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1269, 7516, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1270, 7517, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1271, 7518, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1272, 7519, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1273, 7520, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1274, 7521, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1275, 7522, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1276, 7523, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1277, 7524, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1278, 7525, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1279, 7526, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1280, 7527, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1281, 7528, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1282, 7529, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1283, 7530, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1284, 7531, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1285, 7532, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1286, 7533, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1287, 7534, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1288, 7535, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1289, 7536, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1290, 7537, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1291, 7538, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1292, 7539, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1293, 7540, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1294, 7541, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1295, 7542, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1296, 7543, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1297, 7544, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1298, 7545, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1299, 7546, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1300, 7547, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1301, 7548, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1302, 7549, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1303, 7550, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1304, 7551, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1305, 7552, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1306, 7553, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1307, 7554, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1308, 7555, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1309, 7556, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1310, 7557, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1311, 7558, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1312, 7559, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1313, 7560, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1314, 7561, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1315, 7562, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1316, 7563, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1317, 7564, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1318, 7565, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1319, 7566, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1320, 7567, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1321, 7568, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1322, 7569, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1323, 7570, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1324, 7571, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1325, 7572, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1326, 7573, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1327, 7574, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1328, 7575, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1329, 7576, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1330, 7577, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1331, 7578, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1332, 7579, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1333, 7580, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1334, 7581, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1335, 7582, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1336, 7583, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1337, 7584, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1338, 7585, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1339, 7586, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1340, 7587, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1341, 7588, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1342, 7589, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1343, 7590, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1344, 7591, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1345, 7592, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1346, 7593, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1347, 7594, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1348, 7595, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1349, 7596, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1350, 7597, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1351, 7598, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1352, 7599, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1353, 7600, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1354, 7601, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1355, 7602, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1356, 7603, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1357, 7604, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1358, 7605, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1359, 7606, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1360, 7607, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1361, 7608, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1362, 7609, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1363, 7610, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1364, 7611, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1365, 7612, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1366, 7613, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1367, 7614, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1368, 7615, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1369, 7616, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1370, 7617, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1371, 7618, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1372, 7619, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1373, 7620, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1374, 7621, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1375, 7622, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1376, 7623, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1377, 7624, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1378, 7625, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1379, 7626, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1380, 7627, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1381, 7628, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1382, 7629, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1383, 7630, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1384, 7631, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1385, 7632, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1386, 7633, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1387, 7634, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1388, 7635, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1389, 7636, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1390, 7637, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1391, 7638, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1392, 7639, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1393, 7640, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1394, 7641, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1395, 7642, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1396, 7643, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1397, 7644, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1398, 7645, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1399, 7646, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1400, 7647, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1401, 7648, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1402, 7649, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1403, 7650, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1404, 7651, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1405, 7652, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1406, 7653, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1407, 7654, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1408, 7655, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1409, 7656, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1410, 7657, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1411, 7658, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1412, 7659, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1413, 7660, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1414, 7661, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1415, 7662, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1416, 7663, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1417, 7664, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1418, 7665, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1419, 7666, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1420, 7667, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1421, 7668, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1422, 7669, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1423, 7670, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1424, 7671, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1425, 7672, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1426, 7673, 1, 0, 5, 100, 500.00000, 400.00000, 1),
(1427, 7390, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1428, 7391, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1429, 7392, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1430, 7393, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1431, 7394, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1432, 7395, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1433, 7396, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1434, 7397, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1435, 7398, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1436, 7399, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1437, 7400, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1438, 7401, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1439, 7402, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1440, 7403, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1441, 7404, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1442, 7405, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1443, 7406, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1444, 7407, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1445, 7408, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1446, 7409, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1447, 7410, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1448, 7411, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1449, 7412, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1450, 7413, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1451, 7414, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1452, 7415, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1453, 7416, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1454, 7417, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1455, 7418, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1456, 7419, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1457, 7420, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1458, 7421, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1459, 7422, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1460, 7423, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1461, 7424, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1462, 7425, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1463, 7426, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1464, 7427, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1465, 7428, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1466, 7429, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1467, 7430, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1468, 7431, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1469, 7432, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1470, 7433, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1471, 7434, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1472, 7435, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1473, 7436, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1474, 7437, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1475, 7438, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1476, 7439, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1477, 7440, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1478, 7441, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1479, 7442, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1480, 7443, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1481, 7444, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1482, 7445, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1483, 7446, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1484, 7447, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1485, 7448, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1486, 7449, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1487, 7450, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1488, 7451, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1489, 7452, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1490, 7453, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1491, 7454, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1492, 7455, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1493, 7456, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1494, 7457, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1495, 7458, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1496, 7459, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1497, 7460, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1498, 7461, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1499, 7462, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1500, 7463, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1501, 7464, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1502, 7465, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1503, 7466, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1504, 7467, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1505, 7468, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1506, 7469, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1507, 7470, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1508, 7471, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1509, 7472, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1510, 7473, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1511, 7474, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1512, 7475, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1513, 7476, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1514, 7477, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1515, 7478, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1516, 7479, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1517, 7480, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1518, 7481, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1519, 7482, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1520, 7483, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1521, 7484, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1522, 7485, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1523, 7486, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1524, 7487, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1525, 7488, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1526, 7489, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1527, 7490, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1528, 7491, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1529, 7492, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1530, 7493, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1531, 7494, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1532, 7495, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1533, 7496, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1534, 7497, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1535, 7498, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1536, 7499, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1537, 7500, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1538, 7501, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1539, 7502, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1540, 7503, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1541, 7504, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1542, 7505, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1543, 7506, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1544, 7507, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1545, 7508, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1546, 7509, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1547, 7510, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1548, 7511, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1549, 7512, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1550, 7513, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1551, 7514, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1552, 7515, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1553, 7516, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1554, 7517, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1555, 7518, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1556, 7519, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1557, 7520, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1558, 7521, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1559, 7522, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1560, 7523, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1561, 7524, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1562, 7525, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1563, 7526, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1564, 7527, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1565, 7528, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1566, 7529, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1567, 7530, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1568, 7531, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1569, 7532, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1570, 7533, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1571, 7534, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1572, 7535, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1573, 7536, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1574, 7537, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1575, 7538, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1576, 7539, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1577, 7540, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1578, 7541, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1579, 7542, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1580, 7543, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1581, 7544, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1582, 7545, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1583, 7546, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1584, 7547, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1585, 7548, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1586, 7549, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1587, 7550, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1588, 7551, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1589, 7552, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1590, 7553, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1591, 7554, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1592, 7555, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1593, 7556, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1594, 7557, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1595, 7558, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1596, 7559, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1597, 7560, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1598, 7561, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1599, 7562, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1600, 7563, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1601, 7564, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1602, 7565, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1603, 7566, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1604, 7567, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1605, 7568, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1606, 7569, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1607, 7570, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1608, 7571, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1609, 7572, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1610, 7573, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1611, 7574, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1612, 7575, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1613, 7576, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1614, 7577, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1615, 7578, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1616, 7579, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1617, 7580, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1618, 7581, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1619, 7582, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1620, 7583, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1621, 7584, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1622, 7585, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1623, 7586, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1624, 7587, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1625, 7588, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1626, 7589, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1627, 7590, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1628, 7591, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1629, 7592, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1630, 7593, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1631, 7594, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1632, 7595, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1633, 7596, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1634, 7597, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1635, 7598, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1636, 7599, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1637, 7600, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1638, 7601, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1639, 7602, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1640, 7603, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1641, 7604, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1642, 7605, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1643, 7606, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1644, 7607, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1645, 7608, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1646, 7609, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1647, 7610, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1648, 7611, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1649, 7612, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1650, 7613, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1651, 7614, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1652, 7615, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1653, 7616, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1654, 7617, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1655, 7618, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1656, 7619, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1657, 7620, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1658, 7621, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1659, 7622, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1660, 7623, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1661, 7624, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1662, 7625, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1663, 7626, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1664, 7627, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1665, 7628, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1666, 7629, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1667, 7630, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1668, 7631, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1669, 7632, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1670, 7633, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1671, 7634, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1672, 7635, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1673, 7636, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1674, 7637, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1675, 7638, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1676, 7639, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1677, 7640, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1678, 7641, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1679, 7642, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1680, 7643, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1681, 7644, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1682, 7645, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1683, 7646, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1684, 7647, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1685, 7648, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1686, 7649, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1687, 7650, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1688, 7651, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1689, 7652, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1690, 7653, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1691, 7654, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1692, 7655, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1693, 7656, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1694, 7657, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1695, 7658, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1696, 7659, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1697, 7660, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1698, 7661, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1699, 7662, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1700, 7663, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1701, 7664, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1702, 7665, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1703, 7666, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1704, 7667, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1705, 7668, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1706, 7669, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1707, 7670, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1708, 7671, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1709, 7672, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1710, 7673, 2, 0, 5, 100, 500.00000, 400.00000, 1),
(1711, 7674, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1712, 7675, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1713, 7676, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1714, 7677, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1715, 7678, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1716, 7679, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1717, 7680, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1718, 7681, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1719, 7682, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1720, 7683, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1721, 7684, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1722, 7685, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1723, 7686, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1724, 7687, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1725, 7688, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1726, 7689, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1727, 7690, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1728, 7691, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1729, 7692, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1730, 7693, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1731, 7694, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1732, 7695, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1733, 7696, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1734, 7697, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1735, 7698, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1736, 7699, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1737, 7700, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1738, 7701, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1739, 7702, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1740, 7703, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1741, 7704, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1742, 7705, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1743, 7706, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1744, 7707, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1745, 7708, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1746, 7709, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1747, 7710, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1748, 7711, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1749, 7712, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1750, 7713, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1751, 7714, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1752, 7715, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1753, 7716, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1754, 7717, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1755, 7718, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1756, 7719, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1757, 7720, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1758, 7721, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1759, 7722, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1760, 7723, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1761, 7724, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1762, 7725, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1763, 7726, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1764, 7727, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1765, 7728, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1766, 7729, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1767, 7730, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1768, 7731, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1769, 7732, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1770, 7733, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1771, 7734, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1772, 7735, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1773, 7736, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1774, 7737, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1775, 7738, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1776, 7739, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1777, 7740, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1778, 7741, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1779, 7742, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1780, 7743, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1781, 7744, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1782, 7745, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1783, 7746, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1784, 7747, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1785, 7748, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1786, 7749, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1787, 7750, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1788, 7751, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1789, 7752, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1790, 7753, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1791, 7754, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1792, 7755, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1793, 7756, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1794, 7757, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1795, 7758, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1796, 7759, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1797, 7760, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1798, 7761, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1799, 7762, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1800, 7763, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1801, 7764, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1802, 7765, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1803, 7766, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1804, 7767, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1805, 7768, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1806, 7769, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1807, 7770, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1808, 7771, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1809, 7772, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1810, 7773, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1811, 7774, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1812, 7775, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1813, 7776, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1814, 7777, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1815, 7778, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1816, 7779, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1817, 7780, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1818, 7781, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1819, 7782, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1820, 7783, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1821, 7784, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1822, 7785, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1823, 7786, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1824, 7787, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1825, 7788, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1826, 7789, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1827, 7790, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1828, 7791, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1829, 7792, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1830, 7793, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1831, 7794, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1832, 7795, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1833, 7796, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1834, 7797, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1835, 7798, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1836, 7799, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1837, 7800, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1838, 7801, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1839, 7802, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1840, 7803, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1841, 7804, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1842, 7805, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1843, 7806, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1844, 7807, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1845, 7808, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1846, 7809, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1847, 7810, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1848, 7811, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1849, 7812, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1850, 7813, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1851, 7814, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1852, 7815, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1853, 7816, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1854, 7817, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1855, 7818, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1856, 7819, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1857, 7820, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1858, 7821, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1859, 7822, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1860, 7823, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1861, 7824, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1862, 7825, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1863, 7826, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1864, 7827, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1865, 7828, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1866, 7829, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1867, 7830, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1868, 7831, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1869, 7832, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1870, 7833, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1871, 7834, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1872, 7835, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1873, 7836, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1874, 7837, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1875, 7838, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1876, 7839, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1877, 7840, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1878, 7841, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1879, 7842, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1880, 7843, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1881, 7844, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1882, 7845, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1883, 7846, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1884, 7847, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1885, 7848, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1886, 7849, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1887, 7850, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1888, 7851, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1889, 7852, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1890, 7853, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1891, 7854, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1892, 7855, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1893, 7856, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1894, 7857, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1895, 7858, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1896, 7859, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1897, 7860, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1898, 7861, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1899, 7862, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1900, 7863, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1901, 7864, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1902, 7865, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1903, 7866, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1904, 7867, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1905, 7868, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1906, 7869, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1907, 7870, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1908, 7871, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1909, 7872, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1910, 7873, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1911, 7874, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1912, 7875, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1913, 7876, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1914, 7877, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1915, 7878, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1916, 7879, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1917, 7880, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1918, 7881, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1919, 7882, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1920, 7883, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1921, 7884, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1922, 7885, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1923, 7886, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1924, 7887, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1925, 7888, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1926, 7889, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1927, 7890, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1928, 7891, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1929, 7892, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1930, 7893, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1931, 7894, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1932, 7895, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1933, 7896, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1934, 7897, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1935, 7898, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1936, 7899, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1937, 7900, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1938, 7901, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1939, 7902, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1940, 7903, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1941, 7904, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1942, 7905, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1943, 7906, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1944, 7907, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1945, 7908, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1946, 7909, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1947, 7910, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1948, 7911, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1949, 7912, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1950, 7913, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1951, 7914, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1952, 7915, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1953, 7916, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1954, 7917, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1955, 7918, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1956, 7919, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1957, 7920, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1958, 7921, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1959, 7922, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1960, 7923, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1961, 7924, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1962, 7925, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1963, 7926, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1964, 7927, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1965, 7928, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1966, 7929, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1967, 7930, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1968, 7931, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1969, 7932, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1970, 7933, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1971, 7934, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1972, 7935, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1973, 7936, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1974, 7937, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1975, 7938, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1976, 7939, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1977, 7940, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1978, 7941, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1979, 7942, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1980, 7943, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1981, 7944, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1982, 7945, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1983, 7946, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1984, 7947, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1985, 7948, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1986, 7949, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1987, 7950, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1988, 7951, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1989, 7952, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1990, 7953, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1991, 7954, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1992, 7955, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1993, 7956, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1994, 7957, 1, 0, 100, 100, 500.00000, 400.00000, 1),
(1995, 7674, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(1996, 7675, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(1997, 7676, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(1998, 7677, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(1999, 7678, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2000, 7679, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2001, 7680, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2002, 7681, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2003, 7682, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2004, 7683, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2005, 7684, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2006, 7685, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2007, 7686, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2008, 7687, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2009, 7688, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2010, 7689, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2011, 7690, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2012, 7691, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2013, 7692, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2014, 7693, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2015, 7694, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2016, 7695, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2017, 7696, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2018, 7697, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2019, 7698, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2020, 7699, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2021, 7700, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2022, 7701, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2023, 7702, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2024, 7703, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2025, 7704, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2026, 7705, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2027, 7706, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2028, 7707, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2029, 7708, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2030, 7709, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2031, 7710, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2032, 7711, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2033, 7712, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2034, 7713, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2035, 7714, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2036, 7715, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2037, 7716, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2038, 7717, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2039, 7718, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2040, 7719, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2041, 7720, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2042, 7721, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2043, 7722, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2044, 7723, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2045, 7724, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2046, 7725, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2047, 7726, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2048, 7727, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2049, 7728, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2050, 7729, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2051, 7730, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2052, 7731, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2053, 7732, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2054, 7733, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2055, 7734, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2056, 7735, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2057, 7736, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2058, 7737, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2059, 7738, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2060, 7739, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2061, 7740, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2062, 7741, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2063, 7742, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2064, 7743, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2065, 7744, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2066, 7745, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2067, 7746, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2068, 7747, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2069, 7748, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2070, 7749, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2071, 7750, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2072, 7751, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2073, 7752, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2074, 7753, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2075, 7754, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2076, 7755, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2077, 7756, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2078, 7757, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2079, 7758, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2080, 7759, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2081, 7760, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2082, 7761, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2083, 7762, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2084, 7763, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2085, 7764, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2086, 7765, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2087, 7766, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2088, 7767, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2089, 7768, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2090, 7769, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2091, 7770, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2092, 7771, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2093, 7772, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2094, 7773, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2095, 7774, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2096, 7775, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2097, 7776, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2098, 7777, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2099, 7778, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2100, 7779, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2101, 7780, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2102, 7781, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2103, 7782, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2104, 7783, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2105, 7784, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2106, 7785, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2107, 7786, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2108, 7787, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2109, 7788, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2110, 7789, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2111, 7790, 2, 0, 100, 100, 500.00000, 400.00000, 1);
INSERT INTO `productosucursal` (`idproductosucursal`, `idproductovariante`, `idsucursal`, `productosucursal_existencia`, `productosucursal_minimo`, `productosucursal_reorden`, `productosucursal_precioventa`, `productosucursal_preciomayoreo`, `productosucursal_estatus`) VALUES
(2112, 7791, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2113, 7792, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2114, 7793, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2115, 7794, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2116, 7795, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2117, 7796, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2118, 7797, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2119, 7798, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2120, 7799, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2121, 7800, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2122, 7801, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2123, 7802, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2124, 7803, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2125, 7804, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2126, 7805, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2127, 7806, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2128, 7807, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2129, 7808, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2130, 7809, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2131, 7810, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2132, 7811, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2133, 7812, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2134, 7813, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2135, 7814, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2136, 7815, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2137, 7816, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2138, 7817, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2139, 7818, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2140, 7819, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2141, 7820, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2142, 7821, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2143, 7822, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2144, 7823, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2145, 7824, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2146, 7825, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2147, 7826, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2148, 7827, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2149, 7828, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2150, 7829, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2151, 7830, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2152, 7831, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2153, 7832, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2154, 7833, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2155, 7834, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2156, 7835, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2157, 7836, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2158, 7837, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2159, 7838, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2160, 7839, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2161, 7840, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2162, 7841, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2163, 7842, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2164, 7843, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2165, 7844, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2166, 7845, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2167, 7846, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2168, 7847, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2169, 7848, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2170, 7849, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2171, 7850, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2172, 7851, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2173, 7852, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2174, 7853, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2175, 7854, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2176, 7855, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2177, 7856, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2178, 7857, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2179, 7858, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2180, 7859, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2181, 7860, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2182, 7861, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2183, 7862, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2184, 7863, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2185, 7864, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2186, 7865, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2187, 7866, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2188, 7867, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2189, 7868, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2190, 7869, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2191, 7870, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2192, 7871, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2193, 7872, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2194, 7873, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2195, 7874, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2196, 7875, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2197, 7876, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2198, 7877, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2199, 7878, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2200, 7879, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2201, 7880, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2202, 7881, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2203, 7882, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2204, 7883, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2205, 7884, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2206, 7885, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2207, 7886, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2208, 7887, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2209, 7888, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2210, 7889, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2211, 7890, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2212, 7891, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2213, 7892, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2214, 7893, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2215, 7894, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2216, 7895, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2217, 7896, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2218, 7897, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2219, 7898, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2220, 7899, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2221, 7900, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2222, 7901, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2223, 7902, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2224, 7903, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2225, 7904, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2226, 7905, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2227, 7906, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2228, 7907, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2229, 7908, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2230, 7909, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2231, 7910, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2232, 7911, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2233, 7912, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2234, 7913, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2235, 7914, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2236, 7915, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2237, 7916, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2238, 7917, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2239, 7918, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2240, 7919, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2241, 7920, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2242, 7921, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2243, 7922, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2244, 7923, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2245, 7924, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2246, 7925, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2247, 7926, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2248, 7927, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2249, 7928, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2250, 7929, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2251, 7930, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2252, 7931, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2253, 7932, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2254, 7933, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2255, 7934, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2256, 7935, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2257, 7936, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2258, 7937, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2259, 7938, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2260, 7939, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2261, 7940, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2262, 7941, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2263, 7942, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2264, 7943, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2265, 7944, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2266, 7945, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2267, 7946, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2268, 7947, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2269, 7948, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2270, 7949, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2271, 7950, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2272, 7951, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2273, 7952, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2274, 7953, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2275, 7954, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2276, 7955, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2277, 7956, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2278, 7957, 2, 0, 100, 100, 500.00000, 400.00000, 1),
(2279, 7958, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2280, 7959, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2281, 7960, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2282, 7961, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2283, 7962, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2284, 7963, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2285, 7964, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2286, 7965, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2287, 7966, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2288, 7967, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2289, 7968, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2290, 7969, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2291, 7970, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2292, 7971, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2293, 7972, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2294, 7973, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2295, 7974, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2296, 7975, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2297, 7976, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2298, 7977, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2299, 7978, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2300, 7979, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2301, 7980, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2302, 7981, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2303, 7982, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2304, 7983, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2305, 7984, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2306, 7985, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2307, 7986, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2308, 7987, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2309, 7988, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2310, 7989, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2311, 7990, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2312, 7991, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2313, 7992, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2314, 7993, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2315, 7994, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2316, 7995, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2317, 7996, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2318, 7997, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2319, 7998, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2320, 7999, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2321, 8000, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2322, 8001, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2323, 8002, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2324, 8003, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2325, 8004, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2326, 8005, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2327, 8006, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2328, 8007, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2329, 8008, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2330, 8009, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2331, 8010, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2332, 8011, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2333, 8012, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2334, 8013, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2335, 8014, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2336, 8015, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2337, 8016, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2338, 8017, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2339, 8018, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2340, 8019, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2341, 8020, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2342, 8021, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2343, 8022, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2344, 8023, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2345, 8024, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2346, 8025, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2347, 8026, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2348, 8027, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2349, 8028, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2350, 8029, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2351, 8030, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2352, 8031, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2353, 8032, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2354, 8033, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2355, 8034, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2356, 8035, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2357, 8036, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2358, 8037, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2359, 8038, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2360, 8039, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2361, 8040, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2362, 8041, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2363, 8042, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2364, 8043, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2365, 8044, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2366, 8045, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2367, 8046, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2368, 8047, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2369, 8048, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2370, 8049, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2371, 8050, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2372, 8051, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2373, 8052, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2374, 8053, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2375, 8054, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2376, 8055, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2377, 8056, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2378, 8057, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2379, 8058, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2380, 8059, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2381, 8060, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2382, 8061, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2383, 8062, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2384, 8063, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2385, 8064, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2386, 8065, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2387, 8066, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2388, 8067, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2389, 8068, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2390, 8069, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2391, 8070, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2392, 8071, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2393, 8072, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2394, 8073, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2395, 8074, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2396, 8075, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2397, 8076, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2398, 8077, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2399, 8078, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2400, 8079, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2401, 8080, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2402, 8081, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2403, 8082, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2404, 8083, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2405, 8084, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2406, 8085, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2407, 8086, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2408, 8087, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2409, 8088, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2410, 8089, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2411, 8090, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2412, 8091, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2413, 8092, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2414, 8093, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2415, 8094, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2416, 8095, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2417, 8096, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2418, 8097, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2419, 8098, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2420, 8099, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2421, 8100, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2422, 8101, 1, 0, 10, 10, 899.00000, 799.00000, 1),
(2423, 7958, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2424, 7959, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2425, 7960, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2426, 7961, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2427, 7962, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2428, 7963, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2429, 7964, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2430, 7965, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2431, 7966, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2432, 7967, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2433, 7968, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2434, 7969, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2435, 7970, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2436, 7971, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2437, 7972, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2438, 7973, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2439, 7974, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2440, 7975, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2441, 7976, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2442, 7977, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2443, 7978, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2444, 7979, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2445, 7980, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2446, 7981, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2447, 7982, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2448, 7983, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2449, 7984, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2450, 7985, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2451, 7986, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2452, 7987, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2453, 7988, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2454, 7989, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2455, 7990, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2456, 7991, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2457, 7992, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2458, 7993, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2459, 7994, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2460, 7995, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2461, 7996, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2462, 7997, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2463, 7998, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2464, 7999, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2465, 8000, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2466, 8001, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2467, 8002, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2468, 8003, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2469, 8004, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2470, 8005, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2471, 8006, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2472, 8007, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2473, 8008, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2474, 8009, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2475, 8010, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2476, 8011, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2477, 8012, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2478, 8013, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2479, 8014, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2480, 8015, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2481, 8016, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2482, 8017, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2483, 8018, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2484, 8019, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2485, 8020, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2486, 8021, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2487, 8022, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2488, 8023, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2489, 8024, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2490, 8025, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2491, 8026, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2492, 8027, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2493, 8028, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2494, 8029, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2495, 8030, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2496, 8031, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2497, 8032, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2498, 8033, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2499, 8034, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2500, 8035, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2501, 8036, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2502, 8037, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2503, 8038, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2504, 8039, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2505, 8040, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2506, 8041, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2507, 8042, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2508, 8043, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2509, 8044, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2510, 8045, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2511, 8046, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2512, 8047, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2513, 8048, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2514, 8049, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2515, 8050, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2516, 8051, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2517, 8052, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2518, 8053, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2519, 8054, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2520, 8055, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2521, 8056, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2522, 8057, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2523, 8058, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2524, 8059, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2525, 8060, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2526, 8061, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2527, 8062, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2528, 8063, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2529, 8064, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2530, 8065, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2531, 8066, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2532, 8067, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2533, 8068, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2534, 8069, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2535, 8070, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2536, 8071, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2537, 8072, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2538, 8073, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2539, 8074, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2540, 8075, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2541, 8076, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2542, 8077, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2543, 8078, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2544, 8079, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2545, 8080, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2546, 8081, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2547, 8082, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2548, 8083, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2549, 8084, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2550, 8085, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2551, 8086, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2552, 8087, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2553, 8088, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2554, 8089, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2555, 8090, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2556, 8091, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2557, 8092, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2558, 8093, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2559, 8094, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2560, 8095, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2561, 8096, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2562, 8097, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2563, 8098, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2564, 8099, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2565, 8100, 2, 0, 10, 10, 899.00000, 799.00000, 1),
(2566, 8101, 2, 0, 10, 10, 899.00000, 799.00000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productotallaje`
--

CREATE TABLE IF NOT EXISTS `productotallaje` (
  `idproductotallaje` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idtallaje` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productotallaje`
--

INSERT INTO `productotallaje` (`idproductotallaje`, `idproducto`, `idtallaje`) VALUES
(2, 117, 5),
(3, 117, 6),
(4, 123, 2),
(5, 124, 2),
(6, 124, 3),
(7, 125, 2),
(8, 125, 3),
(9, 125, 5),
(10, 125, 6),
(11, 125, 7),
(12, 126, 2),
(13, 126, 3),
(14, 126, 5),
(15, 126, 6),
(16, 126, 7),
(17, 128, 2),
(18, 128, 3),
(19, 128, 5),
(20, 128, 6),
(21, 128, 7),
(26, 116, 5),
(27, 116, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productovariante`
--

CREATE TABLE IF NOT EXISTS `productovariante` (
  `idproductovariante` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idproductocolor` int(11) NOT NULL,
  `idproductomaterial` int(11) NOT NULL,
  `productovariante_codigobarras` varchar(45) DEFAULT NULL,
  `productovariante_talla` varchar(45) NOT NULL,
  `productovariante_tallatipo` enum('medida','numero','ninguno') DEFAULT NULL,
  `productovariante_estatus` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8102 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productovariante`
--

INSERT INTO `productovariante` (`idproductovariante`, `idproducto`, `idproductocolor`, `idproductomaterial`, `productovariante_codigobarras`, `productovariante_talla`, `productovariante_tallatipo`, `productovariante_estatus`) VALUES
(6897, 117, 309, 221, NULL, '26', 'numero', 1),
(6898, 117, 310, 221, NULL, '26', 'numero', 1),
(6899, 117, 309, 221, NULL, '26.5', 'numero', 1),
(6900, 117, 310, 221, NULL, '26.5', 'numero', 1),
(6901, 117, 309, 221, NULL, '27', 'numero', 1),
(6902, 117, 310, 221, NULL, '27', 'numero', 1),
(6903, 117, 309, 221, NULL, '27.5', 'numero', 1),
(6904, 117, 310, 221, NULL, '27.5', 'numero', 1),
(6905, 117, 309, 221, NULL, '28', 'numero', 1),
(6906, 117, 310, 221, NULL, '28', 'numero', 1),
(6907, 117, 309, 221, NULL, '28.5', 'numero', 1),
(6908, 117, 310, 221, NULL, '28.5', 'numero', 1),
(6909, 117, 309, 221, NULL, '29', 'numero', 1),
(6910, 117, 310, 221, NULL, '29', 'numero', 1),
(6911, 117, 309, 221, NULL, '29.5', 'numero', 1),
(6912, 117, 310, 221, NULL, '29.5', 'numero', 1),
(6913, 117, 309, 221, NULL, '30', 'numero', 1),
(6914, 117, 310, 221, NULL, '30', 'numero', 1),
(6915, 117, 309, 221, NULL, '7', 'numero', 1),
(6916, 117, 310, 221, NULL, '7', 'numero', 1),
(6917, 117, 309, 221, NULL, '7.5', 'numero', 1),
(6918, 117, 310, 221, NULL, '7.5', 'numero', 1),
(6919, 117, 309, 221, NULL, '8', 'numero', 1),
(6920, 117, 310, 221, NULL, '8', 'numero', 1),
(6921, 117, 309, 221, NULL, '8.5', 'numero', 1),
(6922, 117, 310, 221, NULL, '8.5', 'numero', 1),
(6923, 117, 309, 221, NULL, '9', 'numero', 1),
(6924, 117, 310, 221, NULL, '9', 'numero', 1),
(6925, 123, 311, 227, NULL, '19', 'numero', 1),
(6926, 123, 312, 227, NULL, '19', 'numero', 1),
(6927, 123, 313, 227, NULL, '19', 'numero', 1),
(6928, 123, 311, 227, NULL, '19.5', 'numero', 1),
(6929, 123, 312, 227, NULL, '19.5', 'numero', 1),
(6930, 123, 313, 227, NULL, '19.5', 'numero', 1),
(6931, 123, 311, 227, NULL, '20', 'numero', 1),
(6932, 123, 312, 227, NULL, '20', 'numero', 1),
(6933, 123, 313, 227, NULL, '20', 'numero', 1),
(6934, 123, 311, 227, NULL, '20.5', 'numero', 1),
(6935, 123, 312, 227, NULL, '20.5', 'numero', 1),
(6936, 123, 313, 227, NULL, '20.5', 'numero', 1),
(6937, 123, 311, 227, NULL, '21', 'numero', 1),
(6938, 123, 312, 227, NULL, '21', 'numero', 1),
(6939, 123, 313, 227, NULL, '21', 'numero', 1),
(6940, 123, 311, 227, NULL, '21.5', 'numero', 1),
(6941, 123, 312, 227, NULL, '21.5', 'numero', 1),
(6942, 123, 313, 227, NULL, '21.5', 'numero', 1),
(6943, 123, 311, 227, NULL, '22', 'numero', 1),
(6944, 123, 312, 227, NULL, '22', 'numero', 1),
(6945, 123, 313, 227, NULL, '22', 'numero', 1),
(6946, 124, 314, 228, NULL, '19', 'numero', 1),
(6947, 124, 315, 228, NULL, '19', 'numero', 1),
(6948, 124, 314, 229, NULL, '19', 'numero', 1),
(6949, 124, 315, 229, NULL, '19', 'numero', 1),
(6950, 124, 314, 228, NULL, '19.5', 'numero', 1),
(6951, 124, 315, 228, NULL, '19.5', 'numero', 1),
(6952, 124, 314, 229, NULL, '19.5', 'numero', 1),
(6953, 124, 315, 229, NULL, '19.5', 'numero', 1),
(6954, 124, 314, 228, NULL, '20', 'numero', 1),
(6955, 124, 315, 228, NULL, '20', 'numero', 1),
(6956, 124, 314, 229, NULL, '20', 'numero', 1),
(6957, 124, 315, 229, NULL, '20', 'numero', 1),
(6958, 124, 314, 228, NULL, '20.5', 'numero', 1),
(6959, 124, 315, 228, NULL, '20.5', 'numero', 1),
(6960, 124, 314, 229, NULL, '20.5', 'numero', 1),
(6961, 124, 315, 229, NULL, '20.5', 'numero', 1),
(6962, 124, 314, 228, NULL, '21', 'numero', 1),
(6963, 124, 315, 228, NULL, '21', 'numero', 1),
(6964, 124, 314, 229, NULL, '21', 'numero', 1),
(6965, 124, 315, 229, NULL, '21', 'numero', 1),
(6966, 124, 314, 228, NULL, '21.5', 'numero', 1),
(6967, 124, 315, 228, NULL, '21.5', 'numero', 1),
(6968, 124, 314, 229, NULL, '21.5', 'numero', 1),
(6969, 124, 315, 229, NULL, '21.5', 'numero', 1),
(6970, 124, 314, 228, NULL, '22', 'numero', 1),
(6971, 124, 315, 228, NULL, '22', 'numero', 1),
(6972, 124, 314, 229, NULL, '22', 'numero', 1),
(6973, 124, 315, 229, NULL, '22', 'numero', 1),
(6974, 124, 314, 228, NULL, '19', 'numero', 1),
(6975, 124, 315, 228, NULL, '19', 'numero', 1),
(6976, 124, 314, 229, NULL, '19', 'numero', 1),
(6977, 124, 315, 229, NULL, '19', 'numero', 1),
(6978, 124, 314, 228, NULL, '19.5', 'numero', 1),
(6979, 124, 315, 228, NULL, '19.5', 'numero', 1),
(6980, 124, 314, 229, NULL, '19.5', 'numero', 1),
(6981, 124, 315, 229, NULL, '19.5', 'numero', 1),
(6982, 124, 314, 228, NULL, '20', 'numero', 1),
(6983, 124, 315, 228, NULL, '20', 'numero', 1),
(6984, 124, 314, 229, NULL, '20', 'numero', 1),
(6985, 124, 315, 229, NULL, '20', 'numero', 1),
(6986, 124, 314, 228, NULL, '20.5', 'numero', 1),
(6987, 124, 315, 228, NULL, '20.5', 'numero', 1),
(6988, 124, 314, 229, NULL, '20.5', 'numero', 1),
(6989, 124, 315, 229, NULL, '20.5', 'numero', 1),
(6990, 124, 314, 228, NULL, '21', 'numero', 1),
(6991, 124, 315, 228, NULL, '21', 'numero', 1),
(6992, 124, 314, 229, NULL, '21', 'numero', 1),
(6993, 124, 315, 229, NULL, '21', 'numero', 1),
(6994, 124, 314, 228, NULL, '21.5', 'numero', 1),
(6995, 124, 315, 228, NULL, '21.5', 'numero', 1),
(6996, 124, 314, 229, NULL, '21.5', 'numero', 1),
(6997, 124, 315, 229, NULL, '21.5', 'numero', 1),
(6998, 124, 314, 228, NULL, '22', 'numero', 1),
(6999, 124, 315, 228, NULL, '22', 'numero', 1),
(7000, 124, 314, 229, NULL, '22', 'numero', 1),
(7001, 124, 315, 229, NULL, '22', 'numero', 1),
(7002, 124, 314, 228, NULL, '22.5', 'numero', 1),
(7003, 124, 315, 228, NULL, '22.5', 'numero', 1),
(7004, 124, 314, 229, NULL, '22.5', 'numero', 1),
(7005, 124, 315, 229, NULL, '22.5', 'numero', 1),
(7006, 124, 314, 228, NULL, '23', 'numero', 1),
(7007, 124, 315, 228, NULL, '23', 'numero', 1),
(7008, 124, 314, 229, NULL, '23', 'numero', 1),
(7009, 124, 315, 229, NULL, '23', 'numero', 1),
(7010, 124, 314, 228, NULL, '23.5', 'numero', 1),
(7011, 124, 315, 228, NULL, '23.5', 'numero', 1),
(7012, 124, 314, 229, NULL, '23.5', 'numero', 1),
(7013, 124, 315, 229, NULL, '23.5', 'numero', 1),
(7014, 124, 314, 228, NULL, '24', 'numero', 1),
(7015, 124, 315, 228, NULL, '24', 'numero', 1),
(7016, 124, 314, 229, NULL, '24', 'numero', 1),
(7017, 124, 315, 229, NULL, '24', 'numero', 1),
(7018, 124, 314, 228, NULL, '24.5', 'numero', 1),
(7019, 124, 315, 228, NULL, '24.5', 'numero', 1),
(7020, 124, 314, 229, NULL, '24.5', 'numero', 1),
(7021, 124, 315, 229, NULL, '24.5', 'numero', 1),
(7022, 124, 314, 228, NULL, '25', 'numero', 1),
(7023, 124, 315, 228, NULL, '25', 'numero', 1),
(7024, 124, 314, 229, NULL, '25', 'numero', 1),
(7025, 124, 315, 229, NULL, '25', 'numero', 1),
(7026, 124, 314, 228, NULL, '25.5', 'numero', 1),
(7027, 124, 315, 228, NULL, '25.5', 'numero', 1),
(7028, 124, 314, 229, NULL, '25.5', 'numero', 1),
(7029, 124, 315, 229, NULL, '25.5', 'numero', 1),
(7030, 124, 314, 228, NULL, '26', 'numero', 1),
(7031, 124, 315, 228, NULL, '26', 'numero', 1),
(7032, 124, 314, 229, NULL, '26', 'numero', 1),
(7033, 124, 315, 229, NULL, '26', 'numero', 1),
(7034, 124, 314, 228, NULL, '26.5', 'numero', 1),
(7035, 124, 315, 228, NULL, '26.5', 'numero', 1),
(7036, 124, 314, 229, NULL, '26.5', 'numero', 1),
(7037, 124, 315, 229, NULL, '26.5', 'numero', 1),
(7038, 124, 314, 228, NULL, '27', 'numero', 1),
(7039, 124, 315, 228, NULL, '27', 'numero', 1),
(7040, 124, 314, 229, NULL, '27', 'numero', 1),
(7041, 124, 315, 229, NULL, '27', 'numero', 1),
(7042, 124, 314, 228, NULL, '27.5', 'numero', 1),
(7043, 124, 315, 228, NULL, '27.5', 'numero', 1),
(7044, 124, 314, 229, NULL, '27.5', 'numero', 1),
(7045, 124, 315, 229, NULL, '27.5', 'numero', 1),
(7046, 124, 314, 228, NULL, '28', 'numero', 1),
(7047, 124, 315, 228, NULL, '28', 'numero', 1),
(7048, 124, 314, 229, NULL, '28', 'numero', 1),
(7049, 124, 315, 229, NULL, '28', 'numero', 1),
(7050, 124, 314, 228, NULL, '28.5', 'numero', 1),
(7051, 124, 315, 228, NULL, '28.5', 'numero', 1),
(7052, 124, 314, 229, NULL, '28.5', 'numero', 1),
(7053, 124, 315, 229, NULL, '28.5', 'numero', 1),
(7054, 124, 314, 228, NULL, '29', 'numero', 1),
(7055, 124, 315, 228, NULL, '29', 'numero', 1),
(7056, 124, 314, 229, NULL, '29', 'numero', 1),
(7057, 124, 315, 229, NULL, '29', 'numero', 1),
(7058, 124, 314, 228, NULL, '29.5', 'numero', 1),
(7059, 124, 315, 228, NULL, '29.5', 'numero', 1),
(7060, 124, 314, 229, NULL, '29.5', 'numero', 1),
(7061, 124, 315, 229, NULL, '29.5', 'numero', 1),
(7062, 124, 314, 228, NULL, '30', 'numero', 1),
(7063, 124, 315, 228, NULL, '30', 'numero', 1),
(7064, 124, 314, 229, NULL, '30', 'numero', 1),
(7065, 124, 315, 229, NULL, '30', 'numero', 1),
(7066, 124, 314, 228, NULL, '30.5', 'numero', 1),
(7067, 124, 315, 228, NULL, '30.5', 'numero', 1),
(7068, 124, 314, 229, NULL, '30.5', 'numero', 1),
(7069, 124, 315, 229, NULL, '30.5', 'numero', 1),
(7070, 124, 314, 228, NULL, '31', 'numero', 1),
(7071, 124, 315, 228, NULL, '31', 'numero', 1),
(7072, 124, 314, 229, NULL, '31', 'numero', 1),
(7073, 124, 315, 229, NULL, '31', 'numero', 1),
(7074, 124, 314, 228, NULL, '31.5', 'numero', 1),
(7075, 124, 315, 228, NULL, '31.5', 'numero', 1),
(7076, 124, 314, 229, NULL, '31.5', 'numero', 1),
(7077, 124, 315, 229, NULL, '31.5', 'numero', 1),
(7078, 124, 314, 228, NULL, '32', 'numero', 1),
(7079, 124, 315, 228, NULL, '32', 'numero', 1),
(7080, 124, 314, 229, NULL, '32', 'numero', 1),
(7081, 124, 315, 229, NULL, '32', 'numero', 1),
(7082, 124, 314, 228, NULL, '32.5', 'numero', 1),
(7083, 124, 315, 228, NULL, '32.5', 'numero', 1),
(7084, 124, 314, 229, NULL, '32.5', 'numero', 1),
(7085, 124, 315, 229, NULL, '32.5', 'numero', 1),
(7086, 124, 314, 228, NULL, '33', 'numero', 1),
(7087, 124, 315, 228, NULL, '33', 'numero', 1),
(7088, 124, 314, 229, NULL, '33', 'numero', 1),
(7089, 124, 315, 229, NULL, '33', 'numero', 1),
(7090, 124, 314, 228, NULL, '33.5', 'numero', 1),
(7091, 124, 315, 228, NULL, '33.5', 'numero', 1),
(7092, 124, 314, 229, NULL, '33.5', 'numero', 1),
(7093, 124, 315, 229, NULL, '33.5', 'numero', 1),
(7094, 124, 314, 228, NULL, '34', 'numero', 1),
(7095, 124, 315, 228, NULL, '34', 'numero', 1),
(7096, 124, 314, 229, NULL, '34', 'numero', 1),
(7097, 124, 315, 229, NULL, '34', 'numero', 1),
(7098, 124, 314, 228, NULL, '34.5', 'numero', 1),
(7099, 124, 315, 228, NULL, '34.5', 'numero', 1),
(7100, 124, 314, 229, NULL, '34.5', 'numero', 1),
(7101, 124, 315, 229, NULL, '34.5', 'numero', 1),
(7102, 124, 314, 228, NULL, '35', 'numero', 1),
(7103, 124, 315, 228, NULL, '35', 'numero', 1),
(7104, 124, 314, 229, NULL, '35', 'numero', 1),
(7105, 124, 315, 229, NULL, '35', 'numero', 1),
(7106, 125, 316, 230, NULL, '19', 'numero', 1),
(7107, 125, 317, 230, NULL, '19', 'numero', 1),
(7108, 125, 316, 231, NULL, '19', 'numero', 1),
(7109, 125, 317, 231, NULL, '19', 'numero', 1),
(7110, 125, 316, 230, NULL, '19.5', 'numero', 1),
(7111, 125, 317, 230, NULL, '19.5', 'numero', 1),
(7112, 125, 316, 231, NULL, '19.5', 'numero', 1),
(7113, 125, 317, 231, NULL, '19.5', 'numero', 1),
(7114, 125, 316, 230, NULL, '20', 'numero', 1),
(7115, 125, 317, 230, NULL, '20', 'numero', 1),
(7116, 125, 316, 231, NULL, '20', 'numero', 1),
(7117, 125, 317, 231, NULL, '20', 'numero', 1),
(7118, 125, 316, 230, NULL, '20.5', 'numero', 1),
(7119, 125, 317, 230, NULL, '20.5', 'numero', 1),
(7120, 125, 316, 231, NULL, '20.5', 'numero', 1),
(7121, 125, 317, 231, NULL, '20.5', 'numero', 1),
(7122, 125, 316, 230, NULL, '21', 'numero', 1),
(7123, 125, 317, 230, NULL, '21', 'numero', 1),
(7124, 125, 316, 231, NULL, '21', 'numero', 1),
(7125, 125, 317, 231, NULL, '21', 'numero', 1),
(7126, 125, 316, 230, NULL, '21.5', 'numero', 1),
(7127, 125, 317, 230, NULL, '21.5', 'numero', 1),
(7128, 125, 316, 231, NULL, '21.5', 'numero', 1),
(7129, 125, 317, 231, NULL, '21.5', 'numero', 1),
(7130, 125, 316, 230, NULL, '22', 'numero', 1),
(7131, 125, 317, 230, NULL, '22', 'numero', 1),
(7132, 125, 316, 231, NULL, '22', 'numero', 1),
(7133, 125, 317, 231, NULL, '22', 'numero', 1),
(7134, 125, 316, 230, NULL, '19', 'numero', 1),
(7135, 125, 317, 230, NULL, '19', 'numero', 1),
(7136, 125, 316, 231, NULL, '19', 'numero', 1),
(7137, 125, 317, 231, NULL, '19', 'numero', 1),
(7138, 125, 316, 230, NULL, '19.5', 'numero', 1),
(7139, 125, 317, 230, NULL, '19.5', 'numero', 1),
(7140, 125, 316, 231, NULL, '19.5', 'numero', 1),
(7141, 125, 317, 231, NULL, '19.5', 'numero', 1),
(7142, 125, 316, 230, NULL, '20', 'numero', 1),
(7143, 125, 317, 230, NULL, '20', 'numero', 1),
(7144, 125, 316, 231, NULL, '20', 'numero', 1),
(7145, 125, 317, 231, NULL, '20', 'numero', 1),
(7146, 125, 316, 230, NULL, '20.5', 'numero', 1),
(7147, 125, 317, 230, NULL, '20.5', 'numero', 1),
(7148, 125, 316, 231, NULL, '20.5', 'numero', 1),
(7149, 125, 317, 231, NULL, '20.5', 'numero', 1),
(7150, 125, 316, 230, NULL, '21', 'numero', 1),
(7151, 125, 317, 230, NULL, '21', 'numero', 1),
(7152, 125, 316, 231, NULL, '21', 'numero', 1),
(7153, 125, 317, 231, NULL, '21', 'numero', 1),
(7154, 125, 316, 230, NULL, '21.5', 'numero', 1),
(7155, 125, 317, 230, NULL, '21.5', 'numero', 1),
(7156, 125, 316, 231, NULL, '21.5', 'numero', 1),
(7157, 125, 317, 231, NULL, '21.5', 'numero', 1),
(7158, 125, 316, 230, NULL, '22', 'numero', 1),
(7159, 125, 317, 230, NULL, '22', 'numero', 1),
(7160, 125, 316, 231, NULL, '22', 'numero', 1),
(7161, 125, 317, 231, NULL, '22', 'numero', 1),
(7162, 125, 316, 230, NULL, '22.5', 'numero', 1),
(7163, 125, 317, 230, NULL, '22.5', 'numero', 1),
(7164, 125, 316, 231, NULL, '22.5', 'numero', 1),
(7165, 125, 317, 231, NULL, '22.5', 'numero', 1),
(7166, 125, 316, 230, NULL, '23', 'numero', 1),
(7167, 125, 317, 230, NULL, '23', 'numero', 1),
(7168, 125, 316, 231, NULL, '23', 'numero', 1),
(7169, 125, 317, 231, NULL, '23', 'numero', 1),
(7170, 125, 316, 230, NULL, '23.5', 'numero', 1),
(7171, 125, 317, 230, NULL, '23.5', 'numero', 1),
(7172, 125, 316, 231, NULL, '23.5', 'numero', 1),
(7173, 125, 317, 231, NULL, '23.5', 'numero', 1),
(7174, 125, 316, 230, NULL, '24', 'numero', 1),
(7175, 125, 317, 230, NULL, '24', 'numero', 1),
(7176, 125, 316, 231, NULL, '24', 'numero', 1),
(7177, 125, 317, 231, NULL, '24', 'numero', 1),
(7178, 125, 316, 230, NULL, '24.5', 'numero', 1),
(7179, 125, 317, 230, NULL, '24.5', 'numero', 1),
(7180, 125, 316, 231, NULL, '24.5', 'numero', 1),
(7181, 125, 317, 231, NULL, '24.5', 'numero', 1),
(7182, 125, 316, 230, NULL, '25', 'numero', 1),
(7183, 125, 317, 230, NULL, '25', 'numero', 1),
(7184, 125, 316, 231, NULL, '25', 'numero', 1),
(7185, 125, 317, 231, NULL, '25', 'numero', 1),
(7186, 125, 316, 230, NULL, '25.5', 'numero', 1),
(7187, 125, 317, 230, NULL, '25.5', 'numero', 1),
(7188, 125, 316, 231, NULL, '25.5', 'numero', 1),
(7189, 125, 317, 231, NULL, '25.5', 'numero', 1),
(7190, 125, 316, 230, NULL, '26', 'numero', 1),
(7191, 125, 317, 230, NULL, '26', 'numero', 1),
(7192, 125, 316, 231, NULL, '26', 'numero', 1),
(7193, 125, 317, 231, NULL, '26', 'numero', 1),
(7194, 125, 316, 230, NULL, '26.5', 'numero', 1),
(7195, 125, 317, 230, NULL, '26.5', 'numero', 1),
(7196, 125, 316, 231, NULL, '26.5', 'numero', 1),
(7197, 125, 317, 231, NULL, '26.5', 'numero', 1),
(7198, 125, 316, 230, NULL, '27', 'numero', 1),
(7199, 125, 317, 230, NULL, '27', 'numero', 1),
(7200, 125, 316, 231, NULL, '27', 'numero', 1),
(7201, 125, 317, 231, NULL, '27', 'numero', 1),
(7202, 125, 316, 230, NULL, '27.5', 'numero', 1),
(7203, 125, 317, 230, NULL, '27.5', 'numero', 1),
(7204, 125, 316, 231, NULL, '27.5', 'numero', 1),
(7205, 125, 317, 231, NULL, '27.5', 'numero', 1),
(7206, 125, 316, 230, NULL, '28', 'numero', 1),
(7207, 125, 317, 230, NULL, '28', 'numero', 1),
(7208, 125, 316, 231, NULL, '28', 'numero', 1),
(7209, 125, 317, 231, NULL, '28', 'numero', 1),
(7210, 125, 316, 230, NULL, '28.5', 'numero', 1),
(7211, 125, 317, 230, NULL, '28.5', 'numero', 1),
(7212, 125, 316, 231, NULL, '28.5', 'numero', 1),
(7213, 125, 317, 231, NULL, '28.5', 'numero', 1),
(7214, 125, 316, 230, NULL, '29', 'numero', 1),
(7215, 125, 317, 230, NULL, '29', 'numero', 1),
(7216, 125, 316, 231, NULL, '29', 'numero', 1),
(7217, 125, 317, 231, NULL, '29', 'numero', 1),
(7218, 125, 316, 230, NULL, '29.5', 'numero', 1),
(7219, 125, 317, 230, NULL, '29.5', 'numero', 1),
(7220, 125, 316, 231, NULL, '29.5', 'numero', 1),
(7221, 125, 317, 231, NULL, '29.5', 'numero', 1),
(7222, 125, 316, 230, NULL, '30', 'numero', 1),
(7223, 125, 317, 230, NULL, '30', 'numero', 1),
(7224, 125, 316, 231, NULL, '30', 'numero', 1),
(7225, 125, 317, 231, NULL, '30', 'numero', 1),
(7226, 125, 316, 230, NULL, '30.5', 'numero', 1),
(7227, 125, 317, 230, NULL, '30.5', 'numero', 1),
(7228, 125, 316, 231, NULL, '30.5', 'numero', 1),
(7229, 125, 317, 231, NULL, '30.5', 'numero', 1),
(7230, 125, 316, 230, NULL, '31', 'numero', 1),
(7231, 125, 317, 230, NULL, '31', 'numero', 1),
(7232, 125, 316, 231, NULL, '31', 'numero', 1),
(7233, 125, 317, 231, NULL, '31', 'numero', 1),
(7234, 125, 316, 230, NULL, '31.5', 'numero', 1),
(7235, 125, 317, 230, NULL, '31.5', 'numero', 1),
(7236, 125, 316, 231, NULL, '31.5', 'numero', 1),
(7237, 125, 317, 231, NULL, '31.5', 'numero', 1),
(7238, 125, 316, 230, NULL, '32', 'numero', 1),
(7239, 125, 317, 230, NULL, '32', 'numero', 1),
(7240, 125, 316, 231, NULL, '32', 'numero', 1),
(7241, 125, 317, 231, NULL, '32', 'numero', 1),
(7242, 125, 316, 230, NULL, '32.5', 'numero', 1),
(7243, 125, 317, 230, NULL, '32.5', 'numero', 1),
(7244, 125, 316, 231, NULL, '32.5', 'numero', 1),
(7245, 125, 317, 231, NULL, '32.5', 'numero', 1),
(7246, 125, 316, 230, NULL, '33', 'numero', 1),
(7247, 125, 317, 230, NULL, '33', 'numero', 1),
(7248, 125, 316, 231, NULL, '33', 'numero', 1),
(7249, 125, 317, 231, NULL, '33', 'numero', 1),
(7250, 125, 316, 230, NULL, '33.5', 'numero', 1),
(7251, 125, 317, 230, NULL, '33.5', 'numero', 1),
(7252, 125, 316, 231, NULL, '33.5', 'numero', 1),
(7253, 125, 317, 231, NULL, '33.5', 'numero', 1),
(7254, 125, 316, 230, NULL, '34', 'numero', 1),
(7255, 125, 317, 230, NULL, '34', 'numero', 1),
(7256, 125, 316, 231, NULL, '34', 'numero', 1),
(7257, 125, 317, 231, NULL, '34', 'numero', 1),
(7258, 125, 316, 230, NULL, '34.5', 'numero', 1),
(7259, 125, 317, 230, NULL, '34.5', 'numero', 1),
(7260, 125, 316, 231, NULL, '34.5', 'numero', 1),
(7261, 125, 317, 231, NULL, '34.5', 'numero', 1),
(7262, 125, 316, 230, NULL, '35', 'numero', 1),
(7263, 125, 317, 230, NULL, '35', 'numero', 1),
(7264, 125, 316, 231, NULL, '35', 'numero', 1),
(7265, 125, 317, 231, NULL, '35', 'numero', 1),
(7266, 125, 316, 230, NULL, '26', 'numero', 1),
(7267, 125, 317, 230, NULL, '26', 'numero', 1),
(7268, 125, 316, 231, NULL, '26', 'numero', 1),
(7269, 125, 317, 231, NULL, '26', 'numero', 1),
(7270, 125, 316, 230, NULL, '26.5', 'numero', 1),
(7271, 125, 317, 230, NULL, '26.5', 'numero', 1),
(7272, 125, 316, 231, NULL, '26.5', 'numero', 1),
(7273, 125, 317, 231, NULL, '26.5', 'numero', 1),
(7274, 125, 316, 230, NULL, '27', 'numero', 1),
(7275, 125, 317, 230, NULL, '27', 'numero', 1),
(7276, 125, 316, 231, NULL, '27', 'numero', 1),
(7277, 125, 317, 231, NULL, '27', 'numero', 1),
(7278, 125, 316, 230, NULL, '27.5', 'numero', 1),
(7279, 125, 317, 230, NULL, '27.5', 'numero', 1),
(7280, 125, 316, 231, NULL, '27.5', 'numero', 1),
(7281, 125, 317, 231, NULL, '27.5', 'numero', 1),
(7282, 125, 316, 230, NULL, '28', 'numero', 1),
(7283, 125, 317, 230, NULL, '28', 'numero', 1),
(7284, 125, 316, 231, NULL, '28', 'numero', 1),
(7285, 125, 317, 231, NULL, '28', 'numero', 1),
(7286, 125, 316, 230, NULL, '28.5', 'numero', 1),
(7287, 125, 317, 230, NULL, '28.5', 'numero', 1),
(7288, 125, 316, 231, NULL, '28.5', 'numero', 1),
(7289, 125, 317, 231, NULL, '28.5', 'numero', 1),
(7290, 125, 316, 230, NULL, '29', 'numero', 1),
(7291, 125, 317, 230, NULL, '29', 'numero', 1),
(7292, 125, 316, 231, NULL, '29', 'numero', 1),
(7293, 125, 317, 231, NULL, '29', 'numero', 1),
(7294, 125, 316, 230, NULL, '29.5', 'numero', 1),
(7295, 125, 317, 230, NULL, '29.5', 'numero', 1),
(7296, 125, 316, 231, NULL, '29.5', 'numero', 1),
(7297, 125, 317, 231, NULL, '29.5', 'numero', 1),
(7298, 125, 316, 230, NULL, '30', 'numero', 1),
(7299, 125, 317, 230, NULL, '30', 'numero', 1),
(7300, 125, 316, 231, NULL, '30', 'numero', 1),
(7301, 125, 317, 231, NULL, '30', 'numero', 1),
(7302, 125, 316, 230, NULL, '7', 'numero', 1),
(7303, 125, 317, 230, NULL, '7', 'numero', 1),
(7304, 125, 316, 231, NULL, '7', 'numero', 1),
(7305, 125, 317, 231, NULL, '7', 'numero', 1),
(7306, 125, 316, 230, NULL, '7.5', 'numero', 1),
(7307, 125, 317, 230, NULL, '7.5', 'numero', 1),
(7308, 125, 316, 231, NULL, '7.5', 'numero', 1),
(7309, 125, 317, 231, NULL, '7.5', 'numero', 1),
(7310, 125, 316, 230, NULL, '8', 'numero', 1),
(7311, 125, 317, 230, NULL, '8', 'numero', 1),
(7312, 125, 316, 231, NULL, '8', 'numero', 1),
(7313, 125, 317, 231, NULL, '8', 'numero', 1),
(7314, 125, 316, 230, NULL, '8.5', 'numero', 1),
(7315, 125, 317, 230, NULL, '8.5', 'numero', 1),
(7316, 125, 316, 231, NULL, '8.5', 'numero', 1),
(7317, 125, 317, 231, NULL, '8.5', 'numero', 1),
(7318, 125, 316, 230, NULL, '9', 'numero', 1),
(7319, 125, 317, 230, NULL, '9', 'numero', 1),
(7320, 125, 316, 231, NULL, '9', 'numero', 1),
(7321, 125, 317, 231, NULL, '9', 'numero', 1),
(7322, 125, 316, 230, NULL, '15', 'numero', 1),
(7323, 125, 317, 230, NULL, '15', 'numero', 1),
(7324, 125, 316, 231, NULL, '15', 'numero', 1),
(7325, 125, 317, 231, NULL, '15', 'numero', 1),
(7326, 125, 316, 230, NULL, '15.5', 'numero', 1),
(7327, 125, 317, 230, NULL, '15.5', 'numero', 1),
(7328, 125, 316, 231, NULL, '15.5', 'numero', 1),
(7329, 125, 317, 231, NULL, '15.5', 'numero', 1),
(7330, 125, 316, 230, NULL, '16', 'numero', 1),
(7331, 125, 317, 230, NULL, '16', 'numero', 1),
(7332, 125, 316, 231, NULL, '16', 'numero', 1),
(7333, 125, 317, 231, NULL, '16', 'numero', 1),
(7334, 125, 316, 230, NULL, '16.5', 'numero', 1),
(7335, 125, 317, 230, NULL, '16.5', 'numero', 1),
(7336, 125, 316, 231, NULL, '16.5', 'numero', 1),
(7337, 125, 317, 231, NULL, '16.5', 'numero', 1),
(7338, 125, 316, 230, NULL, '17', 'numero', 1),
(7339, 125, 317, 230, NULL, '17', 'numero', 1),
(7340, 125, 316, 231, NULL, '17', 'numero', 1),
(7341, 125, 317, 231, NULL, '17', 'numero', 1),
(7342, 125, 316, 230, NULL, '17.5', 'numero', 1),
(7343, 125, 317, 230, NULL, '17.5', 'numero', 1),
(7344, 125, 316, 231, NULL, '17.5', 'numero', 1),
(7345, 125, 317, 231, NULL, '17.5', 'numero', 1),
(7346, 125, 316, 230, NULL, '18', 'numero', 1),
(7347, 125, 317, 230, NULL, '18', 'numero', 1),
(7348, 125, 316, 231, NULL, '18', 'numero', 1),
(7349, 125, 317, 231, NULL, '18', 'numero', 1),
(7350, 125, 316, 230, NULL, '18.5', 'numero', 1),
(7351, 125, 317, 230, NULL, '18.5', 'numero', 1),
(7352, 125, 316, 231, NULL, '18.5', 'numero', 1),
(7353, 125, 317, 231, NULL, '18.5', 'numero', 1),
(7354, 125, 316, 230, NULL, '19', 'numero', 1),
(7355, 125, 317, 230, NULL, '19', 'numero', 1),
(7356, 125, 316, 231, NULL, '19', 'numero', 1),
(7357, 125, 317, 231, NULL, '19', 'numero', 1),
(7358, 125, 316, 230, NULL, '19.5', 'numero', 1),
(7359, 125, 317, 230, NULL, '19.5', 'numero', 1),
(7360, 125, 316, 231, NULL, '19.5', 'numero', 1),
(7361, 125, 317, 231, NULL, '19.5', 'numero', 1),
(7362, 125, 316, 230, NULL, '20', 'numero', 1),
(7363, 125, 317, 230, NULL, '20', 'numero', 1),
(7364, 125, 316, 231, NULL, '20', 'numero', 1),
(7365, 125, 317, 231, NULL, '20', 'numero', 1),
(7366, 125, 316, 230, NULL, '20.5', 'numero', 1),
(7367, 125, 317, 230, NULL, '20.5', 'numero', 1),
(7368, 125, 316, 231, NULL, '20.5', 'numero', 1),
(7369, 125, 317, 231, NULL, '20.5', 'numero', 1),
(7370, 125, 316, 230, NULL, '21', 'numero', 1),
(7371, 125, 317, 230, NULL, '21', 'numero', 1),
(7372, 125, 316, 231, NULL, '21', 'numero', 1),
(7373, 125, 317, 231, NULL, '21', 'numero', 1),
(7374, 125, 316, 230, NULL, '21.5', 'numero', 1),
(7375, 125, 317, 230, NULL, '21.5', 'numero', 1),
(7376, 125, 316, 231, NULL, '21.5', 'numero', 1),
(7377, 125, 317, 231, NULL, '21.5', 'numero', 1),
(7378, 125, 316, 230, NULL, '22', 'numero', 1),
(7379, 125, 317, 230, NULL, '22', 'numero', 1),
(7380, 125, 316, 231, NULL, '22', 'numero', 1),
(7381, 125, 317, 231, NULL, '22', 'numero', 1),
(7382, 125, 316, 230, NULL, '22.5', 'numero', 1),
(7383, 125, 317, 230, NULL, '22.5', 'numero', 1),
(7384, 125, 316, 231, NULL, '22.5', 'numero', 1),
(7385, 125, 317, 231, NULL, '22.5', 'numero', 1),
(7386, 125, 316, 230, NULL, '23', 'numero', 1),
(7387, 125, 317, 230, NULL, '23', 'numero', 1),
(7388, 125, 316, 231, NULL, '23', 'numero', 1),
(7389, 125, 317, 231, NULL, '23', 'numero', 1),
(7390, 126, 318, 232, NULL, '19', 'numero', 1),
(7391, 126, 319, 232, NULL, '19', 'numero', 1),
(7392, 126, 318, 233, NULL, '19', 'numero', 1),
(7393, 126, 319, 233, NULL, '19', 'numero', 1),
(7394, 126, 318, 232, NULL, '19.5', 'numero', 1),
(7395, 126, 319, 232, NULL, '19.5', 'numero', 1),
(7396, 126, 318, 233, NULL, '19.5', 'numero', 1),
(7397, 126, 319, 233, NULL, '19.5', 'numero', 1),
(7398, 126, 318, 232, NULL, '20', 'numero', 1),
(7399, 126, 319, 232, NULL, '20', 'numero', 1),
(7400, 126, 318, 233, NULL, '20', 'numero', 1),
(7401, 126, 319, 233, NULL, '20', 'numero', 1),
(7402, 126, 318, 232, NULL, '20.5', 'numero', 1),
(7403, 126, 319, 232, NULL, '20.5', 'numero', 1),
(7404, 126, 318, 233, NULL, '20.5', 'numero', 1),
(7405, 126, 319, 233, NULL, '20.5', 'numero', 1),
(7406, 126, 318, 232, NULL, '21', 'numero', 1),
(7407, 126, 319, 232, NULL, '21', 'numero', 1),
(7408, 126, 318, 233, NULL, '21', 'numero', 1),
(7409, 126, 319, 233, NULL, '21', 'numero', 1),
(7410, 126, 318, 232, NULL, '21.5', 'numero', 1),
(7411, 126, 319, 232, NULL, '21.5', 'numero', 1),
(7412, 126, 318, 233, NULL, '21.5', 'numero', 1),
(7413, 126, 319, 233, NULL, '21.5', 'numero', 1),
(7414, 126, 318, 232, NULL, '22', 'numero', 1),
(7415, 126, 319, 232, NULL, '22', 'numero', 1),
(7416, 126, 318, 233, NULL, '22', 'numero', 1),
(7417, 126, 319, 233, NULL, '22', 'numero', 1),
(7418, 126, 318, 232, NULL, '19', 'numero', 1),
(7419, 126, 319, 232, NULL, '19', 'numero', 1),
(7420, 126, 318, 233, NULL, '19', 'numero', 1),
(7421, 126, 319, 233, NULL, '19', 'numero', 1),
(7422, 126, 318, 232, NULL, '19.5', 'numero', 1),
(7423, 126, 319, 232, NULL, '19.5', 'numero', 1),
(7424, 126, 318, 233, NULL, '19.5', 'numero', 1),
(7425, 126, 319, 233, NULL, '19.5', 'numero', 1),
(7426, 126, 318, 232, NULL, '20', 'numero', 1),
(7427, 126, 319, 232, NULL, '20', 'numero', 1),
(7428, 126, 318, 233, NULL, '20', 'numero', 1),
(7429, 126, 319, 233, NULL, '20', 'numero', 1),
(7430, 126, 318, 232, NULL, '20.5', 'numero', 1),
(7431, 126, 319, 232, NULL, '20.5', 'numero', 1),
(7432, 126, 318, 233, NULL, '20.5', 'numero', 1),
(7433, 126, 319, 233, NULL, '20.5', 'numero', 1),
(7434, 126, 318, 232, NULL, '21', 'numero', 1),
(7435, 126, 319, 232, NULL, '21', 'numero', 1),
(7436, 126, 318, 233, NULL, '21', 'numero', 1),
(7437, 126, 319, 233, NULL, '21', 'numero', 1),
(7438, 126, 318, 232, NULL, '21.5', 'numero', 1),
(7439, 126, 319, 232, NULL, '21.5', 'numero', 1),
(7440, 126, 318, 233, NULL, '21.5', 'numero', 1),
(7441, 126, 319, 233, NULL, '21.5', 'numero', 1),
(7442, 126, 318, 232, NULL, '22', 'numero', 1),
(7443, 126, 319, 232, NULL, '22', 'numero', 1),
(7444, 126, 318, 233, NULL, '22', 'numero', 1),
(7445, 126, 319, 233, NULL, '22', 'numero', 1),
(7446, 126, 318, 232, NULL, '22.5', 'numero', 1),
(7447, 126, 319, 232, NULL, '22.5', 'numero', 1),
(7448, 126, 318, 233, NULL, '22.5', 'numero', 1),
(7449, 126, 319, 233, NULL, '22.5', 'numero', 1),
(7450, 126, 318, 232, NULL, '23', 'numero', 1),
(7451, 126, 319, 232, NULL, '23', 'numero', 1),
(7452, 126, 318, 233, NULL, '23', 'numero', 1),
(7453, 126, 319, 233, NULL, '23', 'numero', 1),
(7454, 126, 318, 232, NULL, '23.5', 'numero', 1),
(7455, 126, 319, 232, NULL, '23.5', 'numero', 1),
(7456, 126, 318, 233, NULL, '23.5', 'numero', 1),
(7457, 126, 319, 233, NULL, '23.5', 'numero', 1),
(7458, 126, 318, 232, NULL, '24', 'numero', 1),
(7459, 126, 319, 232, NULL, '24', 'numero', 1),
(7460, 126, 318, 233, NULL, '24', 'numero', 1),
(7461, 126, 319, 233, NULL, '24', 'numero', 1),
(7462, 126, 318, 232, NULL, '24.5', 'numero', 1),
(7463, 126, 319, 232, NULL, '24.5', 'numero', 1),
(7464, 126, 318, 233, NULL, '24.5', 'numero', 1),
(7465, 126, 319, 233, NULL, '24.5', 'numero', 1),
(7466, 126, 318, 232, NULL, '25', 'numero', 1),
(7467, 126, 319, 232, NULL, '25', 'numero', 1),
(7468, 126, 318, 233, NULL, '25', 'numero', 1),
(7469, 126, 319, 233, NULL, '25', 'numero', 1),
(7470, 126, 318, 232, NULL, '25.5', 'numero', 1),
(7471, 126, 319, 232, NULL, '25.5', 'numero', 1),
(7472, 126, 318, 233, NULL, '25.5', 'numero', 1),
(7473, 126, 319, 233, NULL, '25.5', 'numero', 1),
(7474, 126, 318, 232, NULL, '26', 'numero', 1),
(7475, 126, 319, 232, NULL, '26', 'numero', 1),
(7476, 126, 318, 233, NULL, '26', 'numero', 1),
(7477, 126, 319, 233, NULL, '26', 'numero', 1),
(7478, 126, 318, 232, NULL, '26.5', 'numero', 1),
(7479, 126, 319, 232, NULL, '26.5', 'numero', 1),
(7480, 126, 318, 233, NULL, '26.5', 'numero', 1),
(7481, 126, 319, 233, NULL, '26.5', 'numero', 1),
(7482, 126, 318, 232, NULL, '27', 'numero', 1),
(7483, 126, 319, 232, NULL, '27', 'numero', 1),
(7484, 126, 318, 233, NULL, '27', 'numero', 1),
(7485, 126, 319, 233, NULL, '27', 'numero', 1),
(7486, 126, 318, 232, NULL, '27.5', 'numero', 1),
(7487, 126, 319, 232, NULL, '27.5', 'numero', 1),
(7488, 126, 318, 233, NULL, '27.5', 'numero', 1),
(7489, 126, 319, 233, NULL, '27.5', 'numero', 1),
(7490, 126, 318, 232, NULL, '28', 'numero', 1),
(7491, 126, 319, 232, NULL, '28', 'numero', 1),
(7492, 126, 318, 233, NULL, '28', 'numero', 1),
(7493, 126, 319, 233, NULL, '28', 'numero', 1),
(7494, 126, 318, 232, NULL, '28.5', 'numero', 1),
(7495, 126, 319, 232, NULL, '28.5', 'numero', 1),
(7496, 126, 318, 233, NULL, '28.5', 'numero', 1),
(7497, 126, 319, 233, NULL, '28.5', 'numero', 1),
(7498, 126, 318, 232, NULL, '29', 'numero', 1),
(7499, 126, 319, 232, NULL, '29', 'numero', 1),
(7500, 126, 318, 233, NULL, '29', 'numero', 1),
(7501, 126, 319, 233, NULL, '29', 'numero', 1),
(7502, 126, 318, 232, NULL, '29.5', 'numero', 1),
(7503, 126, 319, 232, NULL, '29.5', 'numero', 1),
(7504, 126, 318, 233, NULL, '29.5', 'numero', 1),
(7505, 126, 319, 233, NULL, '29.5', 'numero', 1),
(7506, 126, 318, 232, NULL, '30', 'numero', 1),
(7507, 126, 319, 232, NULL, '30', 'numero', 1),
(7508, 126, 318, 233, NULL, '30', 'numero', 1),
(7509, 126, 319, 233, NULL, '30', 'numero', 1),
(7510, 126, 318, 232, NULL, '30.5', 'numero', 1),
(7511, 126, 319, 232, NULL, '30.5', 'numero', 1),
(7512, 126, 318, 233, NULL, '30.5', 'numero', 1),
(7513, 126, 319, 233, NULL, '30.5', 'numero', 1),
(7514, 126, 318, 232, NULL, '31', 'numero', 1),
(7515, 126, 319, 232, NULL, '31', 'numero', 1),
(7516, 126, 318, 233, NULL, '31', 'numero', 1),
(7517, 126, 319, 233, NULL, '31', 'numero', 1),
(7518, 126, 318, 232, NULL, '31.5', 'numero', 1),
(7519, 126, 319, 232, NULL, '31.5', 'numero', 1),
(7520, 126, 318, 233, NULL, '31.5', 'numero', 1),
(7521, 126, 319, 233, NULL, '31.5', 'numero', 1),
(7522, 126, 318, 232, NULL, '32', 'numero', 1),
(7523, 126, 319, 232, NULL, '32', 'numero', 1),
(7524, 126, 318, 233, NULL, '32', 'numero', 1),
(7525, 126, 319, 233, NULL, '32', 'numero', 1),
(7526, 126, 318, 232, NULL, '32.5', 'numero', 1),
(7527, 126, 319, 232, NULL, '32.5', 'numero', 1),
(7528, 126, 318, 233, NULL, '32.5', 'numero', 1),
(7529, 126, 319, 233, NULL, '32.5', 'numero', 1),
(7530, 126, 318, 232, NULL, '33', 'numero', 1),
(7531, 126, 319, 232, NULL, '33', 'numero', 1),
(7532, 126, 318, 233, NULL, '33', 'numero', 1),
(7533, 126, 319, 233, NULL, '33', 'numero', 1),
(7534, 126, 318, 232, NULL, '33.5', 'numero', 1),
(7535, 126, 319, 232, NULL, '33.5', 'numero', 1),
(7536, 126, 318, 233, NULL, '33.5', 'numero', 1),
(7537, 126, 319, 233, NULL, '33.5', 'numero', 1),
(7538, 126, 318, 232, NULL, '34', 'numero', 1),
(7539, 126, 319, 232, NULL, '34', 'numero', 1),
(7540, 126, 318, 233, NULL, '34', 'numero', 1),
(7541, 126, 319, 233, NULL, '34', 'numero', 1),
(7542, 126, 318, 232, NULL, '34.5', 'numero', 1),
(7543, 126, 319, 232, NULL, '34.5', 'numero', 1),
(7544, 126, 318, 233, NULL, '34.5', 'numero', 1),
(7545, 126, 319, 233, NULL, '34.5', 'numero', 1),
(7546, 126, 318, 232, NULL, '35', 'numero', 1),
(7547, 126, 319, 232, NULL, '35', 'numero', 1),
(7548, 126, 318, 233, NULL, '35', 'numero', 1),
(7549, 126, 319, 233, NULL, '35', 'numero', 1),
(7550, 126, 318, 232, NULL, '26', 'numero', 1),
(7551, 126, 319, 232, NULL, '26', 'numero', 1),
(7552, 126, 318, 233, NULL, '26', 'numero', 1),
(7553, 126, 319, 233, NULL, '26', 'numero', 1),
(7554, 126, 318, 232, NULL, '26.5', 'numero', 1),
(7555, 126, 319, 232, NULL, '26.5', 'numero', 1),
(7556, 126, 318, 233, NULL, '26.5', 'numero', 1),
(7557, 126, 319, 233, NULL, '26.5', 'numero', 1),
(7558, 126, 318, 232, NULL, '27', 'numero', 1),
(7559, 126, 319, 232, NULL, '27', 'numero', 1),
(7560, 126, 318, 233, NULL, '27', 'numero', 1),
(7561, 126, 319, 233, NULL, '27', 'numero', 1),
(7562, 126, 318, 232, NULL, '27.5', 'numero', 1),
(7563, 126, 319, 232, NULL, '27.5', 'numero', 1),
(7564, 126, 318, 233, NULL, '27.5', 'numero', 1),
(7565, 126, 319, 233, NULL, '27.5', 'numero', 1),
(7566, 126, 318, 232, NULL, '28', 'numero', 1),
(7567, 126, 319, 232, NULL, '28', 'numero', 1),
(7568, 126, 318, 233, NULL, '28', 'numero', 1),
(7569, 126, 319, 233, NULL, '28', 'numero', 1),
(7570, 126, 318, 232, NULL, '28.5', 'numero', 1),
(7571, 126, 319, 232, NULL, '28.5', 'numero', 1),
(7572, 126, 318, 233, NULL, '28.5', 'numero', 1),
(7573, 126, 319, 233, NULL, '28.5', 'numero', 1),
(7574, 126, 318, 232, NULL, '29', 'numero', 1),
(7575, 126, 319, 232, NULL, '29', 'numero', 1),
(7576, 126, 318, 233, NULL, '29', 'numero', 1),
(7577, 126, 319, 233, NULL, '29', 'numero', 1),
(7578, 126, 318, 232, NULL, '29.5', 'numero', 1),
(7579, 126, 319, 232, NULL, '29.5', 'numero', 1),
(7580, 126, 318, 233, NULL, '29.5', 'numero', 1),
(7581, 126, 319, 233, NULL, '29.5', 'numero', 1),
(7582, 126, 318, 232, NULL, '30', 'numero', 1),
(7583, 126, 319, 232, NULL, '30', 'numero', 1),
(7584, 126, 318, 233, NULL, '30', 'numero', 1),
(7585, 126, 319, 233, NULL, '30', 'numero', 1),
(7586, 126, 318, 232, NULL, '7', 'numero', 1),
(7587, 126, 319, 232, NULL, '7', 'numero', 1),
(7588, 126, 318, 233, NULL, '7', 'numero', 1),
(7589, 126, 319, 233, NULL, '7', 'numero', 1),
(7590, 126, 318, 232, NULL, '7.5', 'numero', 1),
(7591, 126, 319, 232, NULL, '7.5', 'numero', 1),
(7592, 126, 318, 233, NULL, '7.5', 'numero', 1),
(7593, 126, 319, 233, NULL, '7.5', 'numero', 1),
(7594, 126, 318, 232, NULL, '8', 'numero', 1),
(7595, 126, 319, 232, NULL, '8', 'numero', 1),
(7596, 126, 318, 233, NULL, '8', 'numero', 1),
(7597, 126, 319, 233, NULL, '8', 'numero', 1),
(7598, 126, 318, 232, NULL, '8.5', 'numero', 1),
(7599, 126, 319, 232, NULL, '8.5', 'numero', 1),
(7600, 126, 318, 233, NULL, '8.5', 'numero', 1),
(7601, 126, 319, 233, NULL, '8.5', 'numero', 1),
(7602, 126, 318, 232, NULL, '9', 'numero', 1),
(7603, 126, 319, 232, NULL, '9', 'numero', 1),
(7604, 126, 318, 233, NULL, '9', 'numero', 1),
(7605, 126, 319, 233, NULL, '9', 'numero', 1),
(7606, 126, 318, 232, NULL, '15', 'numero', 1),
(7607, 126, 319, 232, NULL, '15', 'numero', 1),
(7608, 126, 318, 233, NULL, '15', 'numero', 1),
(7609, 126, 319, 233, NULL, '15', 'numero', 1),
(7610, 126, 318, 232, NULL, '15.5', 'numero', 1),
(7611, 126, 319, 232, NULL, '15.5', 'numero', 1),
(7612, 126, 318, 233, NULL, '15.5', 'numero', 1),
(7613, 126, 319, 233, NULL, '15.5', 'numero', 1),
(7614, 126, 318, 232, NULL, '16', 'numero', 1),
(7615, 126, 319, 232, NULL, '16', 'numero', 1),
(7616, 126, 318, 233, NULL, '16', 'numero', 1),
(7617, 126, 319, 233, NULL, '16', 'numero', 1),
(7618, 126, 318, 232, NULL, '16.5', 'numero', 1),
(7619, 126, 319, 232, NULL, '16.5', 'numero', 1),
(7620, 126, 318, 233, NULL, '16.5', 'numero', 1),
(7621, 126, 319, 233, NULL, '16.5', 'numero', 1),
(7622, 126, 318, 232, NULL, '17', 'numero', 1),
(7623, 126, 319, 232, NULL, '17', 'numero', 1),
(7624, 126, 318, 233, NULL, '17', 'numero', 1),
(7625, 126, 319, 233, NULL, '17', 'numero', 1),
(7626, 126, 318, 232, NULL, '17.5', 'numero', 1),
(7627, 126, 319, 232, NULL, '17.5', 'numero', 1),
(7628, 126, 318, 233, NULL, '17.5', 'numero', 1),
(7629, 126, 319, 233, NULL, '17.5', 'numero', 1),
(7630, 126, 318, 232, NULL, '18', 'numero', 1),
(7631, 126, 319, 232, NULL, '18', 'numero', 1),
(7632, 126, 318, 233, NULL, '18', 'numero', 1),
(7633, 126, 319, 233, NULL, '18', 'numero', 1),
(7634, 126, 318, 232, NULL, '18.5', 'numero', 1),
(7635, 126, 319, 232, NULL, '18.5', 'numero', 1),
(7636, 126, 318, 233, NULL, '18.5', 'numero', 1),
(7637, 126, 319, 233, NULL, '18.5', 'numero', 1),
(7638, 126, 318, 232, NULL, '19', 'numero', 1),
(7639, 126, 319, 232, NULL, '19', 'numero', 1),
(7640, 126, 318, 233, NULL, '19', 'numero', 1),
(7641, 126, 319, 233, NULL, '19', 'numero', 1),
(7642, 126, 318, 232, NULL, '19.5', 'numero', 1),
(7643, 126, 319, 232, NULL, '19.5', 'numero', 1),
(7644, 126, 318, 233, NULL, '19.5', 'numero', 1),
(7645, 126, 319, 233, NULL, '19.5', 'numero', 1),
(7646, 126, 318, 232, NULL, '20', 'numero', 1),
(7647, 126, 319, 232, NULL, '20', 'numero', 1),
(7648, 126, 318, 233, NULL, '20', 'numero', 1),
(7649, 126, 319, 233, NULL, '20', 'numero', 1),
(7650, 126, 318, 232, NULL, '20.5', 'numero', 1),
(7651, 126, 319, 232, NULL, '20.5', 'numero', 1),
(7652, 126, 318, 233, NULL, '20.5', 'numero', 1),
(7653, 126, 319, 233, NULL, '20.5', 'numero', 1),
(7654, 126, 318, 232, NULL, '21', 'numero', 1),
(7655, 126, 319, 232, NULL, '21', 'numero', 1),
(7656, 126, 318, 233, NULL, '21', 'numero', 1),
(7657, 126, 319, 233, NULL, '21', 'numero', 1),
(7658, 126, 318, 232, NULL, '21.5', 'numero', 1),
(7659, 126, 319, 232, NULL, '21.5', 'numero', 1),
(7660, 126, 318, 233, NULL, '21.5', 'numero', 1),
(7661, 126, 319, 233, NULL, '21.5', 'numero', 1),
(7662, 126, 318, 232, NULL, '22', 'numero', 1),
(7663, 126, 319, 232, NULL, '22', 'numero', 1),
(7664, 126, 318, 233, NULL, '22', 'numero', 1),
(7665, 126, 319, 233, NULL, '22', 'numero', 1),
(7666, 126, 318, 232, NULL, '22.5', 'numero', 1),
(7667, 126, 319, 232, NULL, '22.5', 'numero', 1),
(7668, 126, 318, 233, NULL, '22.5', 'numero', 1),
(7669, 126, 319, 233, NULL, '22.5', 'numero', 1),
(7670, 126, 318, 232, NULL, '23', 'numero', 1),
(7671, 126, 319, 232, NULL, '23', 'numero', 1),
(7672, 126, 318, 233, NULL, '23', 'numero', 1),
(7673, 126, 319, 233, NULL, '23', 'numero', 1),
(7674, 128, 321, 236, NULL, '19', 'numero', 1),
(7675, 128, 322, 236, NULL, '19', 'numero', 1),
(7676, 128, 321, 237, NULL, '19', 'numero', 1),
(7677, 128, 322, 237, NULL, '19', 'numero', 1),
(7678, 128, 321, 236, NULL, '19.5', 'numero', 1),
(7679, 128, 322, 236, NULL, '19.5', 'numero', 1),
(7680, 128, 321, 237, NULL, '19.5', 'numero', 1),
(7681, 128, 322, 237, NULL, '19.5', 'numero', 1),
(7682, 128, 321, 236, NULL, '20', 'numero', 1),
(7683, 128, 322, 236, NULL, '20', 'numero', 1),
(7684, 128, 321, 237, NULL, '20', 'numero', 1),
(7685, 128, 322, 237, NULL, '20', 'numero', 1),
(7686, 128, 321, 236, NULL, '20.5', 'numero', 1),
(7687, 128, 322, 236, NULL, '20.5', 'numero', 1),
(7688, 128, 321, 237, NULL, '20.5', 'numero', 1),
(7689, 128, 322, 237, NULL, '20.5', 'numero', 1),
(7690, 128, 321, 236, NULL, '21', 'numero', 1),
(7691, 128, 322, 236, NULL, '21', 'numero', 1),
(7692, 128, 321, 237, NULL, '21', 'numero', 1),
(7693, 128, 322, 237, NULL, '21', 'numero', 1),
(7694, 128, 321, 236, NULL, '21.5', 'numero', 1),
(7695, 128, 322, 236, NULL, '21.5', 'numero', 1),
(7696, 128, 321, 237, NULL, '21.5', 'numero', 1),
(7697, 128, 322, 237, NULL, '21.5', 'numero', 1),
(7698, 128, 321, 236, NULL, '22', 'numero', 1),
(7699, 128, 322, 236, NULL, '22', 'numero', 1),
(7700, 128, 321, 237, NULL, '22', 'numero', 1),
(7701, 128, 322, 237, NULL, '22', 'numero', 1),
(7702, 128, 321, 236, NULL, '19', 'numero', 1),
(7703, 128, 322, 236, NULL, '19', 'numero', 1),
(7704, 128, 321, 237, NULL, '19', 'numero', 1),
(7705, 128, 322, 237, NULL, '19', 'numero', 1),
(7706, 128, 321, 236, NULL, '19.5', 'numero', 1),
(7707, 128, 322, 236, NULL, '19.5', 'numero', 1),
(7708, 128, 321, 237, NULL, '19.5', 'numero', 1),
(7709, 128, 322, 237, NULL, '19.5', 'numero', 1),
(7710, 128, 321, 236, NULL, '20', 'numero', 1),
(7711, 128, 322, 236, NULL, '20', 'numero', 1),
(7712, 128, 321, 237, NULL, '20', 'numero', 1),
(7713, 128, 322, 237, NULL, '20', 'numero', 1),
(7714, 128, 321, 236, NULL, '20.5', 'numero', 1),
(7715, 128, 322, 236, NULL, '20.5', 'numero', 1),
(7716, 128, 321, 237, NULL, '20.5', 'numero', 1),
(7717, 128, 322, 237, NULL, '20.5', 'numero', 1),
(7718, 128, 321, 236, NULL, '21', 'numero', 1),
(7719, 128, 322, 236, NULL, '21', 'numero', 1),
(7720, 128, 321, 237, NULL, '21', 'numero', 1),
(7721, 128, 322, 237, NULL, '21', 'numero', 1),
(7722, 128, 321, 236, NULL, '21.5', 'numero', 1),
(7723, 128, 322, 236, NULL, '21.5', 'numero', 1),
(7724, 128, 321, 237, NULL, '21.5', 'numero', 1),
(7725, 128, 322, 237, NULL, '21.5', 'numero', 1),
(7726, 128, 321, 236, NULL, '22', 'numero', 1),
(7727, 128, 322, 236, NULL, '22', 'numero', 1),
(7728, 128, 321, 237, NULL, '22', 'numero', 1),
(7729, 128, 322, 237, NULL, '22', 'numero', 1),
(7730, 128, 321, 236, NULL, '22.5', 'numero', 1),
(7731, 128, 322, 236, NULL, '22.5', 'numero', 1),
(7732, 128, 321, 237, NULL, '22.5', 'numero', 1),
(7733, 128, 322, 237, NULL, '22.5', 'numero', 1),
(7734, 128, 321, 236, NULL, '23', 'numero', 1),
(7735, 128, 322, 236, NULL, '23', 'numero', 1),
(7736, 128, 321, 237, NULL, '23', 'numero', 1),
(7737, 128, 322, 237, NULL, '23', 'numero', 1),
(7738, 128, 321, 236, NULL, '23.5', 'numero', 1),
(7739, 128, 322, 236, NULL, '23.5', 'numero', 1),
(7740, 128, 321, 237, NULL, '23.5', 'numero', 1),
(7741, 128, 322, 237, NULL, '23.5', 'numero', 1),
(7742, 128, 321, 236, NULL, '24', 'numero', 1),
(7743, 128, 322, 236, NULL, '24', 'numero', 1),
(7744, 128, 321, 237, NULL, '24', 'numero', 1),
(7745, 128, 322, 237, NULL, '24', 'numero', 1),
(7746, 128, 321, 236, NULL, '24.5', 'numero', 1),
(7747, 128, 322, 236, NULL, '24.5', 'numero', 1),
(7748, 128, 321, 237, NULL, '24.5', 'numero', 1),
(7749, 128, 322, 237, NULL, '24.5', 'numero', 1),
(7750, 128, 321, 236, NULL, '25', 'numero', 1),
(7751, 128, 322, 236, NULL, '25', 'numero', 1),
(7752, 128, 321, 237, NULL, '25', 'numero', 1),
(7753, 128, 322, 237, NULL, '25', 'numero', 1),
(7754, 128, 321, 236, NULL, '25.5', 'numero', 1),
(7755, 128, 322, 236, NULL, '25.5', 'numero', 1),
(7756, 128, 321, 237, NULL, '25.5', 'numero', 1),
(7757, 128, 322, 237, NULL, '25.5', 'numero', 1),
(7758, 128, 321, 236, NULL, '26', 'numero', 1),
(7759, 128, 322, 236, NULL, '26', 'numero', 1),
(7760, 128, 321, 237, NULL, '26', 'numero', 1),
(7761, 128, 322, 237, NULL, '26', 'numero', 1),
(7762, 128, 321, 236, NULL, '26.5', 'numero', 1),
(7763, 128, 322, 236, NULL, '26.5', 'numero', 1),
(7764, 128, 321, 237, NULL, '26.5', 'numero', 1),
(7765, 128, 322, 237, NULL, '26.5', 'numero', 1),
(7766, 128, 321, 236, NULL, '27', 'numero', 1),
(7767, 128, 322, 236, NULL, '27', 'numero', 1),
(7768, 128, 321, 237, NULL, '27', 'numero', 1),
(7769, 128, 322, 237, NULL, '27', 'numero', 1),
(7770, 128, 321, 236, NULL, '27.5', 'numero', 1),
(7771, 128, 322, 236, NULL, '27.5', 'numero', 1),
(7772, 128, 321, 237, NULL, '27.5', 'numero', 1),
(7773, 128, 322, 237, NULL, '27.5', 'numero', 1),
(7774, 128, 321, 236, NULL, '28', 'numero', 1),
(7775, 128, 322, 236, NULL, '28', 'numero', 1),
(7776, 128, 321, 237, NULL, '28', 'numero', 1),
(7777, 128, 322, 237, NULL, '28', 'numero', 1),
(7778, 128, 321, 236, NULL, '28.5', 'numero', 1),
(7779, 128, 322, 236, NULL, '28.5', 'numero', 1),
(7780, 128, 321, 237, NULL, '28.5', 'numero', 1),
(7781, 128, 322, 237, NULL, '28.5', 'numero', 1),
(7782, 128, 321, 236, NULL, '29', 'numero', 1),
(7783, 128, 322, 236, NULL, '29', 'numero', 1),
(7784, 128, 321, 237, NULL, '29', 'numero', 1),
(7785, 128, 322, 237, NULL, '29', 'numero', 1),
(7786, 128, 321, 236, NULL, '29.5', 'numero', 1),
(7787, 128, 322, 236, NULL, '29.5', 'numero', 1),
(7788, 128, 321, 237, NULL, '29.5', 'numero', 1),
(7789, 128, 322, 237, NULL, '29.5', 'numero', 1),
(7790, 128, 321, 236, NULL, '30', 'numero', 1),
(7791, 128, 322, 236, NULL, '30', 'numero', 1),
(7792, 128, 321, 237, NULL, '30', 'numero', 1),
(7793, 128, 322, 237, NULL, '30', 'numero', 1),
(7794, 128, 321, 236, NULL, '30.5', 'numero', 1),
(7795, 128, 322, 236, NULL, '30.5', 'numero', 1),
(7796, 128, 321, 237, NULL, '30.5', 'numero', 1),
(7797, 128, 322, 237, NULL, '30.5', 'numero', 1),
(7798, 128, 321, 236, NULL, '31', 'numero', 1),
(7799, 128, 322, 236, NULL, '31', 'numero', 1),
(7800, 128, 321, 237, NULL, '31', 'numero', 1),
(7801, 128, 322, 237, NULL, '31', 'numero', 1),
(7802, 128, 321, 236, NULL, '31.5', 'numero', 1),
(7803, 128, 322, 236, NULL, '31.5', 'numero', 1),
(7804, 128, 321, 237, NULL, '31.5', 'numero', 1),
(7805, 128, 322, 237, NULL, '31.5', 'numero', 1),
(7806, 128, 321, 236, NULL, '32', 'numero', 1),
(7807, 128, 322, 236, NULL, '32', 'numero', 1),
(7808, 128, 321, 237, NULL, '32', 'numero', 1),
(7809, 128, 322, 237, NULL, '32', 'numero', 1),
(7810, 128, 321, 236, NULL, '32.5', 'numero', 1),
(7811, 128, 322, 236, NULL, '32.5', 'numero', 1),
(7812, 128, 321, 237, NULL, '32.5', 'numero', 1),
(7813, 128, 322, 237, NULL, '32.5', 'numero', 1),
(7814, 128, 321, 236, NULL, '33', 'numero', 1),
(7815, 128, 322, 236, NULL, '33', 'numero', 1),
(7816, 128, 321, 237, NULL, '33', 'numero', 1),
(7817, 128, 322, 237, NULL, '33', 'numero', 1),
(7818, 128, 321, 236, NULL, '33.5', 'numero', 1),
(7819, 128, 322, 236, NULL, '33.5', 'numero', 1),
(7820, 128, 321, 237, NULL, '33.5', 'numero', 1),
(7821, 128, 322, 237, NULL, '33.5', 'numero', 1),
(7822, 128, 321, 236, NULL, '34', 'numero', 1),
(7823, 128, 322, 236, NULL, '34', 'numero', 1),
(7824, 128, 321, 237, NULL, '34', 'numero', 1),
(7825, 128, 322, 237, NULL, '34', 'numero', 1),
(7826, 128, 321, 236, NULL, '34.5', 'numero', 1),
(7827, 128, 322, 236, NULL, '34.5', 'numero', 1),
(7828, 128, 321, 237, NULL, '34.5', 'numero', 1),
(7829, 128, 322, 237, NULL, '34.5', 'numero', 1),
(7830, 128, 321, 236, NULL, '35', 'numero', 1),
(7831, 128, 322, 236, NULL, '35', 'numero', 1),
(7832, 128, 321, 237, NULL, '35', 'numero', 1),
(7833, 128, 322, 237, NULL, '35', 'numero', 1),
(7834, 128, 321, 236, NULL, '26', 'numero', 1),
(7835, 128, 322, 236, NULL, '26', 'numero', 1),
(7836, 128, 321, 237, NULL, '26', 'numero', 1),
(7837, 128, 322, 237, NULL, '26', 'numero', 1),
(7838, 128, 321, 236, NULL, '26.5', 'numero', 1),
(7839, 128, 322, 236, NULL, '26.5', 'numero', 1),
(7840, 128, 321, 237, NULL, '26.5', 'numero', 1),
(7841, 128, 322, 237, NULL, '26.5', 'numero', 1),
(7842, 128, 321, 236, NULL, '27', 'numero', 1),
(7843, 128, 322, 236, NULL, '27', 'numero', 1),
(7844, 128, 321, 237, NULL, '27', 'numero', 1),
(7845, 128, 322, 237, NULL, '27', 'numero', 1),
(7846, 128, 321, 236, NULL, '27.5', 'numero', 1),
(7847, 128, 322, 236, NULL, '27.5', 'numero', 1),
(7848, 128, 321, 237, NULL, '27.5', 'numero', 1),
(7849, 128, 322, 237, NULL, '27.5', 'numero', 1),
(7850, 128, 321, 236, NULL, '28', 'numero', 1),
(7851, 128, 322, 236, NULL, '28', 'numero', 1),
(7852, 128, 321, 237, NULL, '28', 'numero', 1),
(7853, 128, 322, 237, NULL, '28', 'numero', 1),
(7854, 128, 321, 236, NULL, '28.5', 'numero', 1),
(7855, 128, 322, 236, NULL, '28.5', 'numero', 1),
(7856, 128, 321, 237, NULL, '28.5', 'numero', 1),
(7857, 128, 322, 237, NULL, '28.5', 'numero', 1),
(7858, 128, 321, 236, NULL, '29', 'numero', 1),
(7859, 128, 322, 236, NULL, '29', 'numero', 1),
(7860, 128, 321, 237, NULL, '29', 'numero', 1),
(7861, 128, 322, 237, NULL, '29', 'numero', 1),
(7862, 128, 321, 236, NULL, '29.5', 'numero', 1),
(7863, 128, 322, 236, NULL, '29.5', 'numero', 1),
(7864, 128, 321, 237, NULL, '29.5', 'numero', 1),
(7865, 128, 322, 237, NULL, '29.5', 'numero', 1),
(7866, 128, 321, 236, NULL, '30', 'numero', 1),
(7867, 128, 322, 236, NULL, '30', 'numero', 1),
(7868, 128, 321, 237, NULL, '30', 'numero', 1),
(7869, 128, 322, 237, NULL, '30', 'numero', 1),
(7870, 128, 321, 236, NULL, '7', 'numero', 1),
(7871, 128, 322, 236, NULL, '7', 'numero', 1),
(7872, 128, 321, 237, NULL, '7', 'numero', 1),
(7873, 128, 322, 237, NULL, '7', 'numero', 1),
(7874, 128, 321, 236, NULL, '7.5', 'numero', 1),
(7875, 128, 322, 236, NULL, '7.5', 'numero', 1),
(7876, 128, 321, 237, NULL, '7.5', 'numero', 1),
(7877, 128, 322, 237, NULL, '7.5', 'numero', 1),
(7878, 128, 321, 236, NULL, '8', 'numero', 1),
(7879, 128, 322, 236, NULL, '8', 'numero', 1),
(7880, 128, 321, 237, NULL, '8', 'numero', 1),
(7881, 128, 322, 237, NULL, '8', 'numero', 1),
(7882, 128, 321, 236, NULL, '8.5', 'numero', 1),
(7883, 128, 322, 236, NULL, '8.5', 'numero', 1),
(7884, 128, 321, 237, NULL, '8.5', 'numero', 1),
(7885, 128, 322, 237, NULL, '8.5', 'numero', 1),
(7886, 128, 321, 236, NULL, '9', 'numero', 1),
(7887, 128, 322, 236, NULL, '9', 'numero', 1),
(7888, 128, 321, 237, NULL, '9', 'numero', 1),
(7889, 128, 322, 237, NULL, '9', 'numero', 1),
(7890, 128, 321, 236, NULL, '15', 'numero', 1),
(7891, 128, 322, 236, NULL, '15', 'numero', 1),
(7892, 128, 321, 237, NULL, '15', 'numero', 1),
(7893, 128, 322, 237, NULL, '15', 'numero', 1),
(7894, 128, 321, 236, NULL, '15.5', 'numero', 1),
(7895, 128, 322, 236, NULL, '15.5', 'numero', 1),
(7896, 128, 321, 237, NULL, '15.5', 'numero', 1),
(7897, 128, 322, 237, NULL, '15.5', 'numero', 1),
(7898, 128, 321, 236, NULL, '16', 'numero', 1),
(7899, 128, 322, 236, NULL, '16', 'numero', 1),
(7900, 128, 321, 237, NULL, '16', 'numero', 1),
(7901, 128, 322, 237, NULL, '16', 'numero', 1),
(7902, 128, 321, 236, NULL, '16.5', 'numero', 1),
(7903, 128, 322, 236, NULL, '16.5', 'numero', 1),
(7904, 128, 321, 237, NULL, '16.5', 'numero', 1),
(7905, 128, 322, 237, NULL, '16.5', 'numero', 1),
(7906, 128, 321, 236, NULL, '17', 'numero', 1),
(7907, 128, 322, 236, NULL, '17', 'numero', 1),
(7908, 128, 321, 237, NULL, '17', 'numero', 1),
(7909, 128, 322, 237, NULL, '17', 'numero', 1),
(7910, 128, 321, 236, NULL, '17.5', 'numero', 1),
(7911, 128, 322, 236, NULL, '17.5', 'numero', 1),
(7912, 128, 321, 237, NULL, '17.5', 'numero', 1),
(7913, 128, 322, 237, NULL, '17.5', 'numero', 1),
(7914, 128, 321, 236, NULL, '18', 'numero', 1),
(7915, 128, 322, 236, NULL, '18', 'numero', 1),
(7916, 128, 321, 237, NULL, '18', 'numero', 1),
(7917, 128, 322, 237, NULL, '18', 'numero', 1),
(7918, 128, 321, 236, NULL, '18.5', 'numero', 1),
(7919, 128, 322, 236, NULL, '18.5', 'numero', 1),
(7920, 128, 321, 237, NULL, '18.5', 'numero', 1),
(7921, 128, 322, 237, NULL, '18.5', 'numero', 1),
(7922, 128, 321, 236, NULL, '19', 'numero', 1),
(7923, 128, 322, 236, NULL, '19', 'numero', 1),
(7924, 128, 321, 237, NULL, '19', 'numero', 1),
(7925, 128, 322, 237, NULL, '19', 'numero', 1),
(7926, 128, 321, 236, NULL, '19.5', 'numero', 1),
(7927, 128, 322, 236, NULL, '19.5', 'numero', 1),
(7928, 128, 321, 237, NULL, '19.5', 'numero', 1),
(7929, 128, 322, 237, NULL, '19.5', 'numero', 1),
(7930, 128, 321, 236, NULL, '20', 'numero', 1),
(7931, 128, 322, 236, NULL, '20', 'numero', 1),
(7932, 128, 321, 237, NULL, '20', 'numero', 1),
(7933, 128, 322, 237, NULL, '20', 'numero', 1),
(7934, 128, 321, 236, NULL, '20.5', 'numero', 1),
(7935, 128, 322, 236, NULL, '20.5', 'numero', 1),
(7936, 128, 321, 237, NULL, '20.5', 'numero', 1),
(7937, 128, 322, 237, NULL, '20.5', 'numero', 1),
(7938, 128, 321, 236, NULL, '21', 'numero', 1),
(7939, 128, 322, 236, NULL, '21', 'numero', 1),
(7940, 128, 321, 237, NULL, '21', 'numero', 1),
(7941, 128, 322, 237, NULL, '21', 'numero', 1),
(7942, 128, 321, 236, NULL, '21.5', 'numero', 1),
(7943, 128, 322, 236, NULL, '21.5', 'numero', 1),
(7944, 128, 321, 237, NULL, '21.5', 'numero', 1),
(7945, 128, 322, 237, NULL, '21.5', 'numero', 1),
(7946, 128, 321, 236, NULL, '22', 'numero', 1),
(7947, 128, 322, 236, NULL, '22', 'numero', 1),
(7948, 128, 321, 237, NULL, '22', 'numero', 1),
(7949, 128, 322, 237, NULL, '22', 'numero', 1),
(7950, 128, 321, 236, NULL, '22.5', 'numero', 1),
(7951, 128, 322, 236, NULL, '22.5', 'numero', 1),
(7952, 128, 321, 237, NULL, '22.5', 'numero', 1),
(7953, 128, 322, 237, NULL, '22.5', 'numero', 1),
(7954, 128, 321, 236, NULL, '23', 'numero', 1),
(7955, 128, 322, 236, NULL, '23', 'numero', 1),
(7956, 128, 321, 237, NULL, '23', 'numero', 1),
(7957, 128, 322, 237, NULL, '23', 'numero', 1);
INSERT INTO `productovariante` (`idproductovariante`, `idproducto`, `idproductocolor`, `idproductomaterial`, `productovariante_codigobarras`, `productovariante_talla`, `productovariante_tallatipo`, `productovariante_estatus`) VALUES
(7958, 116, 329, 242, NULL, '26', 'numero', 1),
(7959, 116, 330, 242, NULL, '26', 'numero', 1),
(7960, 116, 331, 242, NULL, '26', 'numero', 1),
(7961, 116, 332, 242, NULL, '26', 'numero', 1),
(7962, 116, 329, 243, NULL, '26', 'numero', 1),
(7963, 116, 330, 243, NULL, '26', 'numero', 1),
(7964, 116, 331, 243, NULL, '26', 'numero', 1),
(7965, 116, 332, 243, NULL, '26', 'numero', 1),
(7966, 116, 329, 242, NULL, '26.5', 'numero', 1),
(7967, 116, 330, 242, NULL, '26.5', 'numero', 1),
(7968, 116, 331, 242, NULL, '26.5', 'numero', 1),
(7969, 116, 332, 242, NULL, '26.5', 'numero', 1),
(7970, 116, 329, 243, NULL, '26.5', 'numero', 1),
(7971, 116, 330, 243, NULL, '26.5', 'numero', 1),
(7972, 116, 331, 243, NULL, '26.5', 'numero', 1),
(7973, 116, 332, 243, NULL, '26.5', 'numero', 1),
(7974, 116, 329, 242, NULL, '27', 'numero', 1),
(7975, 116, 330, 242, NULL, '27', 'numero', 1),
(7976, 116, 331, 242, NULL, '27', 'numero', 1),
(7977, 116, 332, 242, NULL, '27', 'numero', 1),
(7978, 116, 329, 243, NULL, '27', 'numero', 1),
(7979, 116, 330, 243, NULL, '27', 'numero', 1),
(7980, 116, 331, 243, NULL, '27', 'numero', 1),
(7981, 116, 332, 243, NULL, '27', 'numero', 1),
(7982, 116, 329, 242, NULL, '27.5', 'numero', 1),
(7983, 116, 330, 242, NULL, '27.5', 'numero', 1),
(7984, 116, 331, 242, NULL, '27.5', 'numero', 1),
(7985, 116, 332, 242, NULL, '27.5', 'numero', 1),
(7986, 116, 329, 243, NULL, '27.5', 'numero', 1),
(7987, 116, 330, 243, NULL, '27.5', 'numero', 1),
(7988, 116, 331, 243, NULL, '27.5', 'numero', 1),
(7989, 116, 332, 243, NULL, '27.5', 'numero', 1),
(7990, 116, 329, 242, NULL, '28', 'numero', 1),
(7991, 116, 330, 242, NULL, '28', 'numero', 1),
(7992, 116, 331, 242, NULL, '28', 'numero', 1),
(7993, 116, 332, 242, NULL, '28', 'numero', 1),
(7994, 116, 329, 243, NULL, '28', 'numero', 1),
(7995, 116, 330, 243, NULL, '28', 'numero', 1),
(7996, 116, 331, 243, NULL, '28', 'numero', 1),
(7997, 116, 332, 243, NULL, '28', 'numero', 1),
(7998, 116, 329, 242, NULL, '28.5', 'numero', 1),
(7999, 116, 330, 242, NULL, '28.5', 'numero', 1),
(8000, 116, 331, 242, NULL, '28.5', 'numero', 1),
(8001, 116, 332, 242, NULL, '28.5', 'numero', 1),
(8002, 116, 329, 243, NULL, '28.5', 'numero', 1),
(8003, 116, 330, 243, NULL, '28.5', 'numero', 1),
(8004, 116, 331, 243, NULL, '28.5', 'numero', 1),
(8005, 116, 332, 243, NULL, '28.5', 'numero', 1),
(8006, 116, 329, 242, NULL, '29', 'numero', 1),
(8007, 116, 330, 242, NULL, '29', 'numero', 1),
(8008, 116, 331, 242, NULL, '29', 'numero', 1),
(8009, 116, 332, 242, NULL, '29', 'numero', 1),
(8010, 116, 329, 243, NULL, '29', 'numero', 1),
(8011, 116, 330, 243, NULL, '29', 'numero', 1),
(8012, 116, 331, 243, NULL, '29', 'numero', 1),
(8013, 116, 332, 243, NULL, '29', 'numero', 1),
(8014, 116, 329, 242, NULL, '29.5', 'numero', 1),
(8015, 116, 330, 242, NULL, '29.5', 'numero', 1),
(8016, 116, 331, 242, NULL, '29.5', 'numero', 1),
(8017, 116, 332, 242, NULL, '29.5', 'numero', 1),
(8018, 116, 329, 243, NULL, '29.5', 'numero', 1),
(8019, 116, 330, 243, NULL, '29.5', 'numero', 1),
(8020, 116, 331, 243, NULL, '29.5', 'numero', 1),
(8021, 116, 332, 243, NULL, '29.5', 'numero', 1),
(8022, 116, 329, 242, NULL, '30', 'numero', 1),
(8023, 116, 330, 242, NULL, '30', 'numero', 1),
(8024, 116, 331, 242, NULL, '30', 'numero', 1),
(8025, 116, 332, 242, NULL, '30', 'numero', 1),
(8026, 116, 329, 243, NULL, '30', 'numero', 1),
(8027, 116, 330, 243, NULL, '30', 'numero', 1),
(8028, 116, 331, 243, NULL, '30', 'numero', 1),
(8029, 116, 332, 243, NULL, '30', 'numero', 1),
(8030, 116, 329, 242, NULL, '7', 'numero', 1),
(8031, 116, 330, 242, NULL, '7', 'numero', 1),
(8032, 116, 331, 242, NULL, '7', 'numero', 1),
(8033, 116, 332, 242, NULL, '7', 'numero', 1),
(8034, 116, 329, 243, NULL, '7', 'numero', 1),
(8035, 116, 330, 243, NULL, '7', 'numero', 1),
(8036, 116, 331, 243, NULL, '7', 'numero', 1),
(8037, 116, 332, 243, NULL, '7', 'numero', 1),
(8038, 116, 329, 242, NULL, '7.5', 'numero', 1),
(8039, 116, 330, 242, NULL, '7.5', 'numero', 1),
(8040, 116, 331, 242, NULL, '7.5', 'numero', 1),
(8041, 116, 332, 242, NULL, '7.5', 'numero', 1),
(8042, 116, 329, 243, NULL, '7.5', 'numero', 1),
(8043, 116, 330, 243, NULL, '7.5', 'numero', 1),
(8044, 116, 331, 243, NULL, '7.5', 'numero', 1),
(8045, 116, 332, 243, NULL, '7.5', 'numero', 1),
(8046, 116, 329, 242, NULL, '8', 'numero', 1),
(8047, 116, 330, 242, NULL, '8', 'numero', 1),
(8048, 116, 331, 242, NULL, '8', 'numero', 1),
(8049, 116, 332, 242, NULL, '8', 'numero', 1),
(8050, 116, 329, 243, NULL, '8', 'numero', 1),
(8051, 116, 330, 243, NULL, '8', 'numero', 1),
(8052, 116, 331, 243, NULL, '8', 'numero', 1),
(8053, 116, 332, 243, NULL, '8', 'numero', 1),
(8054, 116, 329, 242, NULL, '8.5', 'numero', 1),
(8055, 116, 330, 242, NULL, '8.5', 'numero', 1),
(8056, 116, 331, 242, NULL, '8.5', 'numero', 1),
(8057, 116, 332, 242, NULL, '8.5', 'numero', 1),
(8058, 116, 329, 243, NULL, '8.5', 'numero', 1),
(8059, 116, 330, 243, NULL, '8.5', 'numero', 1),
(8060, 116, 331, 243, NULL, '8.5', 'numero', 1),
(8061, 116, 332, 243, NULL, '8.5', 'numero', 1),
(8062, 116, 329, 242, NULL, '9', 'numero', 1),
(8063, 116, 330, 242, NULL, '9', 'numero', 1),
(8064, 116, 331, 242, NULL, '9', 'numero', 1),
(8065, 116, 332, 242, NULL, '9', 'numero', 1),
(8066, 116, 329, 243, NULL, '9', 'numero', 1),
(8067, 116, 330, 243, NULL, '9', 'numero', 1),
(8068, 116, 331, 243, NULL, '9', 'numero', 1),
(8069, 116, 332, 243, NULL, '9', 'numero', 1),
(8070, 116, 329, 242, NULL, 'm', 'medida', 1),
(8071, 116, 330, 242, NULL, 'm', 'medida', 1),
(8072, 116, 331, 242, NULL, 'm', 'medida', 1),
(8073, 116, 332, 242, NULL, 'm', 'medida', 1),
(8074, 116, 329, 243, NULL, 'm', 'medida', 1),
(8075, 116, 330, 243, NULL, 'm', 'medida', 1),
(8076, 116, 331, 243, NULL, 'm', 'medida', 1),
(8077, 116, 332, 243, NULL, 'm', 'medida', 1),
(8078, 116, 329, 242, NULL, 'l', 'medida', 1),
(8079, 116, 330, 242, NULL, 'l', 'medida', 1),
(8080, 116, 331, 242, NULL, 'l', 'medida', 1),
(8081, 116, 332, 242, NULL, 'l', 'medida', 1),
(8082, 116, 329, 243, NULL, 'l', 'medida', 1),
(8083, 116, 330, 243, NULL, 'l', 'medida', 1),
(8084, 116, 331, 243, NULL, 'l', 'medida', 1),
(8085, 116, 332, 243, NULL, 'l', 'medida', 1),
(8086, 116, 329, 242, NULL, 'xl', 'medida', 1),
(8087, 116, 330, 242, NULL, 'xl', 'medida', 1),
(8088, 116, 331, 242, NULL, 'xl', 'medida', 1),
(8089, 116, 332, 242, NULL, 'xl', 'medida', 1),
(8090, 116, 329, 243, NULL, 'xl', 'medida', 1),
(8091, 116, 330, 243, NULL, 'xl', 'medida', 1),
(8092, 116, 331, 243, NULL, 'xl', 'medida', 1),
(8093, 116, 332, 243, NULL, 'xl', 'medida', 1),
(8094, 116, 329, 242, NULL, 'xxl', 'medida', 1),
(8095, 116, 330, 242, NULL, 'xxl', 'medida', 1),
(8096, 116, 331, 242, NULL, 'xxl', 'medida', 1),
(8097, 116, 332, 242, NULL, 'xxl', 'medida', 1),
(8098, 116, 329, 243, NULL, 'xxl', 'medida', 1),
(8099, 116, 330, 243, NULL, 'xxl', 'medida', 1),
(8100, 116, 331, 243, NULL, 'xxl', 'medida', 1),
(8101, 116, 332, 243, NULL, 'xxl', 'medida', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `proveedor_nombrecomercial` varchar(45) DEFAULT NULL,
  `proveedor_telefono` varchar(45) DEFAULT NULL,
  `proveedor_celular` varchar(45) DEFAULT NULL,
  `proveedor_fechainicio` date DEFAULT NULL,
  `proveedor_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `proveedor_nombrecomercial`, `proveedor_telefono`, `proveedor_celular`, `proveedor_fechainicio`, `proveedor_email`) VALUES
(1, 'Armando', '234234', '3432425', '2005-05-06', 'arm_chiva@hotmail.com'),
(12, 'Juan', '12341', '21341', '2010-12-12', 'arm_chiva@hotmail.com'),
(13, 'Nike Mexico', '23423', '234234', '0018-01-01', 'arm_chiva@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedormarca`
--

CREATE TABLE IF NOT EXISTS `proveedormarca` (
  `idproveedormarca` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL,
  `rol_nombre` varchar(45) NOT NULL,
  `rol_descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol_nombre`, `rol_descripcion`) VALUES
(1, 'Administrador', 'Administrador'),
(2, 'Secretaria A', 'Secretaria A'),
(3, 'Secretaria B', 'Secretaria B'),
(4, 'Caja', 'Caja'),
(5, 'Vendedora', 'Vendedora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `sucursal_nombrecomercial` varchar(255) NOT NULL,
  `sucursal_razonsocial` varchar(255) NOT NULL,
  `sucursal_calle` varchar(45) DEFAULT NULL,
  `sucursal_numexterno` varchar(45) DEFAULT NULL,
  `sucursal_numinterior` varchar(45) DEFAULT NULL,
  `sucursal_colonia` varchar(45) DEFAULT NULL,
  `sucursal_codigopostal` varchar(45) DEFAULT NULL,
  `sucursal_ciudad` varchar(45) DEFAULT NULL,
  `sucursal_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `sucursal_nombrecomercial`, `sucursal_razonsocial`, `sucursal_calle`, `sucursal_numexterno`, `sucursal_numinterior`, `sucursal_colonia`, `sucursal_codigopostal`, `sucursal_ciudad`, `sucursal_estado`) VALUES
(1, 'Oneclicks', 'adsjkfl', 'Si', '470', '234', 'Si', '12343', 'Guadaljara', 'Jalisco'),
(2, 'Otra sucursal', 'OTRA_SUCURSAL', 'asdfad', '234', '232', 'JArdines del sur', '34234', 'Guadalajra', 'Jalisco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursalempleado`
--

CREATE TABLE IF NOT EXISTS `sucursalempleado` (
  `idsucursalempleado` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `sucursalempleado_estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursalempleado`
--

INSERT INTO `sucursalempleado` (`idsucursalempleado`, `idsucursal`, `idempleado`, `sucursalempleado_estatus`) VALUES
(57, 1, 3, 0),
(58, 1, 1, 0),
(59, 1, 2, 0),
(60, 1, 4, 0),
(61, 2, 3, 0),
(62, 2, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallaje`
--

CREATE TABLE IF NOT EXISTS `tallaje` (
  `idtallaje` int(11) NOT NULL,
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
  `tallajerango` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tallaje`
--

INSERT INTO `tallaje` (`idtallaje`, `tallaje_nombre`, `talla_70`, `talla_75`, `talla_80`, `talla_85`, `talla_90`, `talla_95`, `talla_100`, `talla_105`, `talla_110`, `talla_115`, `talla_120`, `talla_125`, `talla_130`, `talla_135`, `talla_140`, `talla_145`, `talla_150`, `talla_155`, `talla_160`, `talla_165`, `talla_170`, `talla_175`, `talla_180`, `talla_185`, `talla_190`, `talla_195`, `talla_200`, `talla_205`, `talla_210`, `talla_215`, `talla_220`, `talla_225`, `talla_230`, `talla_235`, `talla_240`, `talla_245`, `talla_250`, `talla_255`, `talla_260`, `talla_265`, `talla_270`, `talla_275`, `talla_280`, `talla_285`, `talla_290`, `talla_295`, `talla_300`, `talla_305`, `talla_310`, `talla_315`, `talla_320`, `talla_325`, `talla_330`, `talla_335`, `talla_340`, `talla_345`, `talla_350`, `tallajerango`) VALUES
(2, 'asdfadsf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '19 - 22.5'),
(3, 'asdfadsf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, '19.5 - 35'),
(5, 'Adulto', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '26 - 30'),
(6, 'NiÃ±o', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '7 - 9.5'),
(7, 'Joven', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '15 - 23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE IF NOT EXISTS `temporada` (
  `idtemporada` int(11) NOT NULL,
  `temporada_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`idtemporada`, `temporada_nombre`) VALUES
(1, 'Verano'),
(2, 'OtoÃ±o'),
(3, 'Primavera - Verano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocalzado`
--

CREATE TABLE IF NOT EXISTS `tipocalzado` (
  `idtipocalzado` int(11) NOT NULL,
  `tipocalzado_nombre` varchar(45) NOT NULL,
  `tipocalzado_descripcion` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipocalzado`
--

INSERT INTO `tipocalzado` (`idtipocalzado`, `tipocalzado_nombre`, `tipocalzado_descripcion`) VALUES
(4, 'Correr', 'Te hace muy rapido');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcompra`),
  ADD KEY `idproveedor` (`compra_fechacreacion`),
  ADD KEY `idproveedor_compra_idx` (`idproveedor`);

--
-- Indices de la tabla `compradetalle`
--
ALTER TABLE `compradetalle`
  ADD PRIMARY KEY (`idcompradetalle`),
  ADD KEY `idcompra` (`idcompra`),
  ADD KEY `idproductovariante` (`idproductovariante`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idconfiguracion`);

--
-- Indices de la tabla `cuentabancaria`
--
ALTER TABLE `cuentabancaria`
  ADD PRIMARY KEY (`idcuentabancaria`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`iddevolucion`),
  ADD KEY `idproveedor` (`idproveedor`);

--
-- Indices de la tabla `devoluciondetalle`
--
ALTER TABLE `devoluciondetalle`
  ADD PRIMARY KEY (`iddevoluciondetalle`),
  ADD KEY `iddevolucion` (`iddevolucion`),
  ADD KEY `idproductovariante` (`idproductovariante`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`idgasto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `marcatallaje`
--
ALTER TABLE `marcatallaje`
  ADD PRIMARY KEY (`idmarcatallaje`),
  ADD KEY `idmarca` (`idmarca`),
  ADD KEY `idtallaje` (`idtallaje`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idmaterial`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`idmedida`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idsucursal` (`idsucursal`),
  ADD KEY `idproductovariante` (`idproductovariante`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `pedidomayorista`
--
ALTER TABLE `pedidomayorista`
  ADD PRIMARY KEY (`idpedidomayorista`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `pedidomayoristadetalle`
--
ALTER TABLE `pedidomayoristadetalle`
  ADD PRIMARY KEY (`idpedidomayoristadetalle`),
  ADD KEY `idpedidomayorista` (`idpedidomayorista`),
  ADD KEY `idproducto_pedidomayoristadetalle_idx` (`idproducto`),
  ADD KEY `idproductovariante_pedidomayoristadetalle_idx` (`idproductovariante`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idmarca` (`idmarca`),
  ADD KEY `idtemporada` (`idtemporada`),
  ADD KEY `idproveedor` (`idproveedor`),
  ADD KEY `idtipocalzado` (`idtipocalzado`);

--
-- Indices de la tabla `productocolor`
--
ALTER TABLE `productocolor`
  ADD PRIMARY KEY (`idproductocolor`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idcolor` (`idcolor`);

--
-- Indices de la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  ADD PRIMARY KEY (`idproductomaterial`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idmaterial` (`idmaterial`);

--
-- Indices de la tabla `productomedida`
--
ALTER TABLE `productomedida`
  ADD PRIMARY KEY (`idproductomedida`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idmedida` (`idmedida`);

--
-- Indices de la tabla `productosucursal`
--
ALTER TABLE `productosucursal`
  ADD PRIMARY KEY (`idproductosucursal`),
  ADD KEY `idproductovariante` (`idproductovariante`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- Indices de la tabla `productotallaje`
--
ALTER TABLE `productotallaje`
  ADD PRIMARY KEY (`idproductotallaje`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idtallaje` (`idtallaje`);

--
-- Indices de la tabla `productovariante`
--
ALTER TABLE `productovariante`
  ADD PRIMARY KEY (`idproductovariante`),
  ADD KEY `idproductocolor` (`idproductocolor`),
  ADD KEY `idproductomaterial` (`idproductomaterial`),
  ADD KEY `idproducto_productovariante_idx` (`idproducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `proveedormarca`
--
ALTER TABLE `proveedormarca`
  ADD PRIMARY KEY (`idproveedormarca`),
  ADD KEY `idproveedor` (`idproveedor`),
  ADD KEY `idmarca` (`idmarca`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idsucursal`);

--
-- Indices de la tabla `sucursalempleado`
--
ALTER TABLE `sucursalempleado`
  ADD PRIMARY KEY (`idsucursalempleado`),
  ADD KEY `idsucursal` (`idsucursal`),
  ADD KEY `idempleado` (`idempleado`);

--
-- Indices de la tabla `tallaje`
--
ALTER TABLE `tallaje`
  ADD PRIMARY KEY (`idtallaje`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`idtemporada`);

--
-- Indices de la tabla `tipocalzado`
--
ALTER TABLE `tipocalzado`
  ADD PRIMARY KEY (`idtipocalzado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `idcolor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `compradetalle`
--
ALTER TABLE `compradetalle`
  MODIFY `idcompradetalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idconfiguracion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuentabancaria`
--
ALTER TABLE `cuentabancaria`
  MODIFY `idcuentabancaria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `iddevolucion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `devoluciondetalle`
--
ALTER TABLE `devoluciondetalle`
  MODIFY `iddevoluciondetalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `idgasto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `marcatallaje`
--
ALTER TABLE `marcatallaje`
  MODIFY `idmarcatallaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `idmaterial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `idmedida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedidomayorista`
--
ALTER TABLE `pedidomayorista`
  MODIFY `idpedidomayorista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pedidomayoristadetalle`
--
ALTER TABLE `pedidomayoristadetalle`
  MODIFY `idpedidomayoristadetalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT de la tabla `productocolor`
--
ALTER TABLE `productocolor`
  MODIFY `idproductocolor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=333;
--
-- AUTO_INCREMENT de la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  MODIFY `idproductomaterial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT de la tabla `productomedida`
--
ALTER TABLE `productomedida`
  MODIFY `idproductomedida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productosucursal`
--
ALTER TABLE `productosucursal`
  MODIFY `idproductosucursal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2567;
--
-- AUTO_INCREMENT de la tabla `productotallaje`
--
ALTER TABLE `productotallaje`
  MODIFY `idproductotallaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `productovariante`
--
ALTER TABLE `productovariante`
  MODIFY `idproductovariante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8102;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `proveedormarca`
--
ALTER TABLE `proveedormarca`
  MODIFY `idproveedormarca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sucursalempleado`
--
ALTER TABLE `sucursalempleado`
  MODIFY `idsucursalempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `tallaje`
--
ALTER TABLE `tallaje`
  MODIFY `idtallaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `idtemporada` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipocalzado`
--
ALTER TABLE `tipocalzado`
  MODIFY `idtipocalzado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `idproveedor_compra` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compradetalle`
--
ALTER TABLE `compradetalle`
  ADD CONSTRAINT `idcompra_compradetalle` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductovariante_compradetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `idproveedor_devolucion` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `devoluciondetalle`
--
ALTER TABLE `devoluciondetalle`
  ADD CONSTRAINT `iddevolucion_devoluciondetalle` FOREIGN KEY (`iddevolucion`) REFERENCES `devolucion` (`iddevolucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductovariante_devoluciondetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `idrol_empleado` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `marcatallaje`
--
ALTER TABLE `marcatallaje`
  ADD CONSTRAINT `idmarca_marcatallaje` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idtallaje_marcatallaje` FOREIGN KEY (`idtallaje`) REFERENCES `tallaje` (`idtallaje`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `idproducto_pedido` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductovariante_pedido` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idsucursal_pedido` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidomayorista`
--
ALTER TABLE `pedidomayorista`
  ADD CONSTRAINT `idcliente_pedidomayorista` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidomayoristadetalle`
--
ALTER TABLE `pedidomayoristadetalle`
  ADD CONSTRAINT `idpedidomayorista_pedidomayoristadetalle` FOREIGN KEY (`idpedidomayorista`) REFERENCES `pedidomayorista` (`idpedidomayorista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproducto_pedidomayoristadetalle` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductovariante_pedidomayoristadetalle` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `idmarca_producto` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproveedor_producto` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idtemporada_producto` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idtipocalzado_producto` FOREIGN KEY (`idtipocalzado`) REFERENCES `tipocalzado` (`idtipocalzado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productocolor`
--
ALTER TABLE `productocolor`
  ADD CONSTRAINT `idcolor_productocolor` FOREIGN KEY (`idcolor`) REFERENCES `color` (`idcolor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproducto_productocolor` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  ADD CONSTRAINT `idmaterial_productomaterial` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`idmaterial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproducto_productomaterial` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productomedida`
--
ALTER TABLE `productomedida`
  ADD CONSTRAINT `idmedida_productomedida` FOREIGN KEY (`idmedida`) REFERENCES `medida` (`idmedida`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproducto_productomedida` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productosucursal`
--
ALTER TABLE `productosucursal`
  ADD CONSTRAINT `idproductovariante_productosucursal` FOREIGN KEY (`idproductovariante`) REFERENCES `productovariante` (`idproductovariante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idsucursal_productosucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productotallaje`
--
ALTER TABLE `productotallaje`
  ADD CONSTRAINT `idproducto_productotallaje` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idtallaje_productotallaje` FOREIGN KEY (`idtallaje`) REFERENCES `tallaje` (`idtallaje`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productovariante`
--
ALTER TABLE `productovariante`
  ADD CONSTRAINT `idproducto_productovariante` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductocolor_productovariante` FOREIGN KEY (`idproductocolor`) REFERENCES `productocolor` (`idproductocolor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproductomaterial_productomaterial` FOREIGN KEY (`idproductomaterial`) REFERENCES `productomaterial` (`idproductomaterial`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedormarca`
--
ALTER TABLE `proveedormarca`
  ADD CONSTRAINT `idmarca_proveedormarca` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproveedor_proveedormarca` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursalempleado`
--
ALTER TABLE `sucursalempleado`
  ADD CONSTRAINT `idempleado_sucursalempleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idsucursal_sucursalempleado` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
